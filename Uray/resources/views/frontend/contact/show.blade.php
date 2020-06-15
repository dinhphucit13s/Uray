@extends('Layouts.frontend')
@section('content')
<!--end header-->
<div class="contact-us">
    <div class="iframe-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d329.2481485251613!2d108.24175922922288!3d16.056727136607204!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142177dc3877eaf%3A0xfcf15bdfa60852ee!2sUnishipping!5e0!3m2!1svi!2s!4v1592021434485!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"
               height="450" width="600" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="container">
        <div class="content-contact-us">
            <div class="row">
                <div class="col-md-6">
                    <h1>Liên hệ với chúng tôi</h1>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-inline">
                                <li><p>Đà Nẵng</p></li>
                                <li>K122/65 , An Hải Đông, Sơn Trà, Thành Phố Đà Nẵng
                                </li>
                                <li>Email: dinhphucit13s@gmail.com
                                    Phone: 0983 233 095
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-inline">
                                <li><p>Quảng Nam</p></li>
                                <li>Gò Nổi, Thị Xã Điện Bàn, Tỉnh Quảng Nam
                                </li>
                                <li>Email: VuPA@fsoft.com.vn
                                    Phone: 0379 123 765
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-md-6">
                    <form action="#" method="post">
                        <textarea placeholder="Tin nhắn"></textarea>
                        <div class="row">
                            <div class="col-md-6"><input type="text" placeholder="Tên của bạn"></div>
                            <div class="col-md-6"><input type="text" placeholder="Email của bạn"></div>
                        </div>
                        <button type="submit">Gửi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection