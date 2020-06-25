<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Carbon\Carbon;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Mail\MailOrderConfirm;
use Mail;

class OrderController extends Controller
{
    public function index()
    {
        return view('frontend.order.order');
    }

    public function store(Request $request)
    {
        $carts = $request->session()->get('carts') ?? collect();
        $type_payment = $request->type_payment;
        if ($type_payment == 'NH') {
            /*tạo mới đơn hàng vào DB*/
            $order = new Order();
            $order = $this->createOrderOnDB($request, $type_payment);
            /*send mail*/
            Mail::to('vdphuit2@gmail.com')->send(new MailOrderConfirm($order));
            $request->session()->forget('carts');
            return view('frontend.order.orderFinal');
        } else if ($type_payment == 'VNPAY'){
            // $url = 'https://sandbox.nganluong.vn:8088/nl35/checkout.php?merchant_site_code=49018&return_url=http://la2.test/nganluong/success.php&receiver=dinhphucit13s@gmail.com&order_code=NL_1447474310&price=2000&currency=vnd&quantity=1&tax=0&discount=0&fee_cal=0&fee_shipping=0&secure_code=a4c65cbe37e5459a3e5f732a5c17f8a3';
            //return redirect($url);
            $request->session()->put('cartsInsert',$carts);
            $cartss = $request->session()->get('carts') ?? collect();
            Order::create([
                'user_name' => $request->user_name,
                'totalMoney' => $cartss->total,
                'Date' => Carbon::now('Asia/Ho_Chi_Minh'),
                'user_id' => auth()->user()->id,
                'address' => $request->address,
                'email' => $request->email,
                'phone' => $request->phone,
                'status' => 'Chưa xử lý'
            ]);
            $url_return = $this->orderVnpay($request, $cartss);
            return redirect($url_return);
        }

    }

    public function orderFinal(Request $req)
    {
        if ($req->vnp_ResponseCode == '00'){
            $cartsInsert = $req->session()->get('carts') ?? collect();
            $orderId = Order::where('user_id', auth()->user()->id)->max('id');
            foreach ($cartsInsert as $cart) {
                OrderDetail::create([
                    'order_id' => $orderId,
                    'product_id' => $cart->id,
                    'product_name' => $cart->product_name,
                    'product_price' => $cart->price,
                    'qty' => $cart->qty,
                    'note' => $req->note

                ]);

                $product = Product::find($cart->id);
                $qtyNew = $product->qty_nhap - $cart->qty;

                $product->qty_nhap = $qtyNew;
                $product->save();

            }
            $order = new Order();
            $order = Order::findOrFail($orderId);
            Mail::to('vdphuit2@gmail.com')->send(new MailOrderConfirm($order));
            return view('frontend.order.orderFinal');
        } else {
            $orderId = Order::where('user_id', auth()->user()->id)->max('id');
            $blog = Order::findOrFail($orderId);
            $blog->delete();
            return view('frontend.order.orderFinalError');
        }

    }

    /**
     * 
     * @param Request $request
     * @param $type_payment
     */
    public function createOrderOnDB($requests, $type_payment) {
        $carts = $requests->session()->get('carts') ?? collect();
        Order::create([
                'user_name' => $requests->user_name,
                'totalMoney' => $carts->total,
                'Date' => Carbon::now('Asia/Ho_Chi_Minh'),
                'user_id' => auth()->user()->id,
                'address' => $requests->address,
                'email' => $requests->email,
                'phone' => $requests->phone,
                'status' => 'Chưa xử lý'
            ]);
            $orderId = Order::where('user_id', auth()->user()->id)->max('id');
            foreach ($carts as $cart) {
                OrderDetail::create([
                    'order_id' => $orderId,
                    'product_id' => $cart->id,
                    'product_name' => $cart->product_name,
                    'product_price' => $cart->price,
                    'qty' => $cart->qty,
                    'note' => $requests->note

                ]);

                $product = Product::find($cart->id);
                $qtyNew = $product->qty_nhap - $cart->qty;

                $product->qty_nhap = $qtyNew;
                $product->save();

            }
            $order = new Order();
            return Order::findOrFail($orderId);
    }

    public function orderVnpay(Request $request, $carts)
    {
        session(['cost_id' => $request->id]);
        session(['url_prev' => url()->previous()]);
        $vnp_TmnCode = "3LSHBOQR"; //Mã website tại VNPAY
        $vnp_HashSecret = "ZYNUAZBGAZXMFBWDMUSUXXHAEKSYFENU"; //Chuỗi bí mật
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://la2.test/orderFinal/";
        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toán hóa đơn phí dich vụ";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $carts -> total * 100000;
        $vnp_Locale = 'vn';
        $vnp_IpAddr = request()->ip();

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        return $vnp_Url;
    }

    /*
     * buildCheckoutUrlExpand
     */
    public function buildCheckoutUrlExpand($return_url, $receiver, $transaction_info, $order_code, $price, $currency = 'vnd', $quantity = 1, $tax = 0, $discount = 0, $fee_cal = 0, $fee_shipping = 0, $order_description = '', $buyer_info = '', $affiliate_code = '')
    {
        if ($affiliate_code == "") $affiliate_code = $this->affiliate_code;
        $arr_param = array(
            'merchant_site_code'=>	strval($this->merchant_site_code),
            'return_url'		=>	strval(strtolower($return_url)),
            'receiver'			=>	strval($receiver),
            'transaction_info'	=>	strval($transaction_info),
            'order_code'		=>	strval($order_code),
            'price'				=>	strval($price),
            'currency'			=>	strval($currency),
            'quantity'			=>	strval($quantity),
            'tax'				=>	strval($tax),
            'discount'			=>	strval($discount),
            'fee_cal'			=>	strval($fee_cal),
            'fee_shipping'		=>	strval($fee_shipping),
            'order_description'	=>	strval($order_description),
            'buyer_info'		=>	strval($buyer_info), //"Họ tên người mua *|* Địa chỉ Email *|* Điện thoại *|* Địa chỉ nhận hàng"
            'affiliate_code'	=>	strval($affiliate_code)
        );

        $secure_code ='';
        $secure_code = implode(' ', $arr_param) . ' ' . $this->secure_pass;
        //var_dump($secure_code). "<br/>";
        $arr_param['secure_code'] = md5($secure_code);
        //echo $arr_param['secure_code'];
        /* */
        $redirect_url = $this->nganluong_url;
        if (strpos($redirect_url, '?') === false) {
            $redirect_url .= '?';
        } else if (substr($redirect_url, strlen($redirect_url)-1, 1) != '?' && strpos($redirect_url, '&') === false) {
            $redirect_url .= '&';
        }

        /* */
        $url = '';
        foreach ($arr_param as $key=>$value) {
            $value = urlencode($value);
            if ($url == '') {
                $url .= $key . '=' . $value;
            } else {
                $url .= '&' . $key . '=' . $value;
            }
        }
        //echo $url;
        // die;
        return $redirect_url.$url;
    }
}
