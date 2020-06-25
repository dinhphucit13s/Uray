<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Order;
use App\Models\OrderDetail;

class MailOrderConfirm extends Mailable
{
    use Queueable, SerializesModels;

    public $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $orders)
    {
        $this->order = $orders;
        $detail = OrderDetail::where('order_id', $this->order->getAttribute('ID'))->get();
        $this->detail = $detail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->view('backend.email.mail')->with([
            'order' => $this->order,
            'details' => $this->detail,
        ]);
    }
}
