@extends('Layouts.backend')
@section('content')
<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="breadcome-heading">
                                <form role="search" class="">
									<input type="text" placeholder="Search..." class="form-control">
									<a href=""><i class="fa fa-search"></i></a>
								</form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="breadcome-menu">
                                <li><a href="#">Thống kê</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Danh sách</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcome End-->
<!-- Breadcome start-->
<div class="breadcome-area des-none mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcome-heading">
                                <form role="search" class="">
									<input type="text" placeholder="Search..." class="form-control">
									<a href=""><i class="fa fa-search"></i></a>
								</form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <ul class="breadcome-menu">
                                <li><a href="#">Thống kê</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Danh sách</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcome End-->
<!-- income order visit user Start -->
<div class="income-order-visit-user-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                    <div class="income-title">
                        <div class="main-income-head">
                            <h2>Income</h2>
                            <div class="main-income-phara">
                                <p>Monthly</p>
                            </div>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span>$</span><span class="counter">60888200</span></h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline1"></span>
                            </div>
                        </div>
                        <div class="income-range">
                            <p>Total income</p>
                            <span class="income-percentange">98% <i class="fa fa-bolt"></i></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="income-dashone-total orders-monthly shadow-reset nt-mg-b-30">
                    <div class="income-title">
                        <div class="main-income-head">
                            <h2>Orders</h2>
                            <div class="main-income-phara order-cl">
                                <p>Annual</p>
                            </div>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span class="counter">72320</span></h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline6"></span>
                            </div>
                        </div>
                        <div class="income-range order-cl">
                            <p>New Orders</p>
                            <span class="income-percentange">66% <i class="fa fa-level-up"></i></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="income-dashone-total visitor-monthly shadow-reset nt-mg-b-30">
                    <div class="income-title">
                        <div class="main-income-head">
                            <h2>Visitor</h2>
                            <div class="main-income-phara visitor-cl">
                                <p>Today</p>
                            </div>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span class="counter">7888200</span></h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline2"></span>
                            </div>
                        </div>
                        <div class="income-range visitor-cl">
                            <p>New Visitor</p>
                            <span class="income-percentange">55% <i class="fa fa-level-up"></i></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="income-dashone-total user-monthly shadow-reset nt-mg-b-30">
                    <div class="income-title">
                        <div class="main-income-head">
                            <h2>User activity</h2>
                            <div class="main-income-phara low-value-cl">
                                <p>Low Value</p>
                            </div>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span class="counter">88200</span></h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline5"></span>
                            </div>
                        </div>
                        <div class="income-range low-value-cl">
                            <p>In first month</p>
                            <span class="income-percentange">33% <i class="fa fa-level-down"></i></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- income order visit user End -->
<div class="dashtwo-order-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="dashtwo-order-list shadow-reset">
                    <div class="row">
                        <div class="col-lg-9">
                           <div class="wrapper">
								<canvas id="myChartsrs" width="400" height="100"></canvas>
							</div>
                        </div>
                        <div class="col-lg-3">
                            <div class="skill-content-3">
                                <div class="skill">
                                    <div class="progress">
                                        <div class="lead-content">
                                            <h3>2,346</h3>
                                            <p>Total orders in period</p>
                                        </div>
                                        <div class="progress-bar wow fadeInLeft" data-progress="95%" style="width: 95%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> <span>95%</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="lead-content">
                                            <h3>9,346</h3>
                                            <p>Orders in last month</p>
                                        </div>
                                        <div class="progress-bar wow fadeInLeft" data-progress="85%" style="width: 85%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>85%</span> </div>
                                    </div>
                                    <div class="progress progress-bt">
                                        <div class="lead-content">
                                            <h3>2,34,600</h3>
                                            <p>Monthly income from order</p>
                                        </div>
                                        <div class="progress-bar wow fadeInLeft" data-progress="93%" style="width: 93%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>93%</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="feed-mesage-project-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="sparkline11-list shadow-reset mg-tb-30">
                    <div class="sparkline11-hd">
                        <div class="main-sparkline11-hd">
                            <h1>Your daily feed</h1>
                            <div class="sparkline11-outline-icon">
                                <span class="sparkline11-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                <span><i class="fa fa-wrench"></i></span>
                                <span class="sparkline11-collapse-close"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline11-graph dashone-comment dashtwo-comment comment-scrollbar">
                        <div class="daily-feed-list">
                            <div class="daily-feed-img">
                                <a href="#"><img src="img/notification/1.jpg" alt="" />
                                </a>
                            </div>
                            <div class="daily-feed-content">
                                <h4><span class="feed-author">Monica Smith</span> posted blog on <span class="feed-author">John Smith</span>.</h4>
                                <p class="res-ds-n-t">Today 5:60 pm - 12.06.2014</p>
                                <span class="feed-ago">1m ago</span>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="daily-feed-list">
                            <div class="daily-feed-img">
                                <a href="#"><img src="img/notification/2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="daily-feed-content">
                                <h4><span class="feed-author">Joy Khan</span> posted message on <span class="feed-author">Joli Ray</span>.</h4>
                                <p class="res-ds-n-t">Today 5:60 pm - 12.06.2014</p>
                                <span class="feed-ago">5m ago</span>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="daily-feed-list">
                            <div class="daily-feed-img">
                                <a href="#"><img src="img/notification/3.jpg" alt="" />
                                </a>
                            </div>
                            <div class="daily-feed-content">
                                <h4><span class="feed-author">Mamun</span> share 1 photo on <span class="feed-author">Sohag</span>. </h4>
                                <p class="res-ds-n-t">Today 5:60 pm - 12.06.2014</p>
                                <span class="feed-ago">5m ago</span>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="daily-feed-list">
                            <div class="daily-feed-img">
                                <a href="#"><img src="img/notification/4.jpg" alt="" />
                                </a>
                            </div>
                            <div class="daily-feed-content">
                                <h4><span class="feed-author">Saliya</span> started following on <span class="feed-author">Jay</span>.</h4>
                                <p class="res-ds-n-t">Today 5:60 pm - 12.06.2014</p>
                                <span class="feed-ago">5m ago</span>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="daily-feed-list">
                            <div class="daily-feed-img">
                                <a href="#"><img src="img/notification/5.jpg" alt="" />
                                </a>
                            </div>
                            <div class="daily-feed-content">
                                <h4><span class="feed-author">Holika</span> posted message on <span class="feed-author">Smith</span>.</h4>
                                <p class="res-ds-n-t">Today 5:60 pm - 12.06.2014</p>
                                <p class="message-feed-single">If you earn a BS in Justice of the Studies at GCU, you may be on able to pursue a career in an exciting field! Check out some future career options by reading our blog.</p>
                                <div class="feed-like-bt">
                                    <a class="btn btn-xs btn-white-like"><i class="fa fa-thumbs-up"></i> Like </a>
                                    <a class="btn btn-xs btn-white-like"><i class="fa fa-heart"></i> Love </a>
                                </div>
                                <span class="feed-ago">5m ago</span>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="daily-feed-list">
                            <div class="daily-feed-img">
                                <a href="#"><img src="img/notification/6.jpg" alt="" />
                                </a>
                            </div>
                            <div class="daily-feed-content">
                                <h4><span class="feed-author">Monica Smith</span> posted a new blog. </h4>
                                <p class="res-ds-n-t">Today 5:60 pm - 12.06.2014</p>
                                <span class="feed-ago">5m ago</span>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="daily-feed-list daily-feed-bbm">
                            <div class="daily-feed-img">
                                <a href="#"><img src="img/notification/1.jpg" alt="" />
                                </a>
                            </div>
                            <div class="daily-feed-content daily-feed-cbbm">
                                <h4><span class="feed-author">Monica Smith</span> posted a new blog. </h4>
                                <p class="res-ds-n-t">Today 5:60 pm - 12.06.2014</p>
                                <span class="feed-ago">5m ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sparkline9-list shadow-reset mg-tb-30">
                    <div class="sparkline9-hd">
                        <div class="main-sparkline9-hd">
                            <h1>User project list</h1>
                            <div class="sparkline9-outline-icon">
                                <span class="sparkline9-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                <span><i class="fa fa-wrench"></i></span>
                                <span class="sparkline9-collapse-close"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline9-graph dashone-comment">
                        <div class="datatable-dashv1-list custom-datatable-overright dashtwo-project-list-data">
                            <div id="toolbar1">
                                <select class="form-control">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table1" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-resizable="true" data-cookie="true" data-page-size="5" data-page-list="[5, 10, 15, 20, 25]" data-cookie-id-table="saveId" data-show-export="true">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">ID</th>
                                        <th data-field="status" data-editable="true">Status</th>
                                        <th data-field="date" data-editable="true">Date</th>
                                        <th data-field="phone" data-editable="true">User</th>
                                        <th data-field="company" data-editable="true">Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td>Pending</td>
                                        <td>1:20pm</td>
                                        <td>John</td>
                                        <td>20%</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>2</td>
                                        <td class="complete-project-dashtwo">Complete</td>
                                        <td>2:30pm</td>
                                        <td>khan</td>
                                        <td>25%</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>3</td>
                                        <td>Complete</td>
                                        <td>4:50pm</td>
                                        <td>hok</td>
                                        <td>50%</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>4</td>
                                        <td class="canceled-project-dashtwo">Canceled</td>
                                        <td>5:30pm</td>
                                        <td>dogi</td>
                                        <td>80%</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>5</td>
                                        <td>Complete</td>
                                        <td>6:20pm</td>
                                        <td>joyi</td>
                                        <td>30%</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>6</td>
                                        <td>Pending</td>
                                        <td>7:40pm</td>
                                        <td>joy</td>
                                        <td>40%</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>7</td>
                                        <td>Complete</td>
                                        <td>9:40pm</td>
                                        <td>ulla</td>
                                        <td>90%</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>8</td>
                                        <td>Pending</td>
                                        <td>11:20pm</td>
                                        <td>don</td>
                                        <td>95%</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>9</td>
                                        <td>Pending</td>
                                        <td>5:20am</td>
                                        <td>dali</td>
                                        <td>85%</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>10</td>
                                        <td>Complete</td>
                                        <td>6:20am</td>
                                        <td>poli</td>
                                        <td>77%</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>11</td>
                                        <td>Pending</td>
                                        <td>7:30am</td>
                                        <td>payel</td>
                                        <td>55%</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>12</td>
                                        <td>Complete</td>
                                        <td>8:22am</td>
                                        <td>flat</td>
                                        <td>36%</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>13</td>
                                        <td>Pending</td>
                                        <td>9:25am</td>
                                        <td>alit</td>
                                        <td>49%</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>14</td>
                                        <td>Complete</td>
                                        <td>10:30am</td>
                                        <td>win</td>
                                        <td>87%</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>15</td>
                                        <td>Pending</td>
                                        <td>11:11am</td>
                                        <td>back</td>
                                        <td>97%</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>16</td>
                                        <td>Canceled</td>
                                        <td>11:12am</td>
                                        <td>koy</td>
                                        <td>58%</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>17</td>
                                        <td>Complete</td>
                                        <td>11:20pm</td>
                                        <td>khy</td>
                                        <td>22%</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>18</td>
                                        <td>Pending</td>
                                        <td>12:20pm</td>
                                        <td>fat</td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>19</td>
                                        <td>Pending</td>
                                        <td>1:20pm</td>
                                        <td>pof</td>
                                        <td>65%</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>20</td>
                                        <td>Complete</td>
                                        <td>11:20pm</td>
                                        <td>elit</td>
                                        <td>46%</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>21</td>
                                        <td>Pending</td>
                                        <td>5:20pm</td>
                                        <td>John</td>
                                        <td>57%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sparkline8-list shadow-reset mg-tb-30">
                    <div class="sparkline8-hd">
                        <div class="main-sparkline8-hd">
                            <h1>Messages</h1>
                            <div class="sparkline8-outline-icon">
                                <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                <span><i class="fa fa-wrench"></i></span>
                                <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline8-graph dashone-comment messages-scrollbar dashtwo-messages">
                        <div class="comment-phara">
                            <div class="comment-adminpr">
                                <a class="dashtwo-messsage-title" href="#">Toman Alva</a>
                                <p class="comment-content">Start each day with a prayer and end your day with a prayer and thank God for a another day.</p>
                            </div>
                            <div class="admin-comment-month">
                                <p class="comment-clock"><i class="fa fa-clock-o"></i> 1 minuts ago</p>
                                <button class="comment-setting" data-toggle="collapse" data-target="#adminpro-demo1">...</button>
                                <ul id="adminpro-demo1" class="comment-action-st collapse">
                                    <li><a href="#">Add</a>
                                    </li>
                                    <li><a href="#">Report</a>
                                    </li>
                                    <li><a href="#">Hide Message</a>
                                    </li>
                                    <li><a href="#">Turn on Message</a>
                                    </li>
                                    <li><a href="#">Turn off Message</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="comment-phara">
                            <div class="comment-adminpr">
                                <a class="dashtwo-messsage-title" href="#">William Jon</a>
                                <p class="comment-content">Simple & easy online tools to increase the website visitors, improve SEO, marketing & sales, automatic blog!</p>
                            </div>
                            <div class="admin-comment-month">
                                <p class="comment-clock"><i class="fa fa-clock-o"></i> 5 minuts ago</p>
                                <button class="comment-setting" data-toggle="collapse" data-target="#adminpro-demo2">...</button>
                                <ul id="adminpro-demo2" class="comment-action-st collapse">
                                    <li><a href="#">Add</a>
                                    </li>
                                    <li><a href="#">Report</a>
                                    </li>
                                    <li><a href="#">Hide Message</a>
                                    </li>
                                    <li><a href="#">Turn on Message</a>
                                    </li>
                                    <li><a href="#">Turn off Message</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="comment-phara">
                            <div class="comment-adminpr">
                                <a class="dashtwo-messsage-title" href="#">Mexicano</a>
                                <p class="comment-content">Soy cursi, twitteo frases pedorras y vendo antojitos mexicanos. Santa Rosa, La Pampa, Argentina</p>
                            </div>
                            <div class="admin-comment-month">
                                <p class="comment-clock"><i class="fa fa-clock-o"></i> 15 minuts ago</p>
                                <button class="comment-setting" data-toggle="collapse" data-target="#adminpro-demo3">...</button>
                                <ul id="adminpro-demo3" class="comment-action-st collapse">
                                    <li><a href="#">Add</a>
                                    </li>
                                    <li><a href="#">Report</a>
                                    </li>
                                    <li><a href="#">Hide Message</a>
                                    </li>
                                    <li><a href="#">Turn on Message</a>
                                    </li>
                                    <li><a href="#">Turn off Message</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="comment-phara">
                            <div class="comment-adminpr">
                                <a class="dashtwo-messsage-title" href="#">Bhadkamkar</a>
                                <p class="comment-content">News love and follow Jesus and my family and friends l hope God bless you always.</p>
                            </div>
                            <div class="admin-comment-month">
                                <p class="comment-clock"><i class="fa fa-clock-o"></i> 20 minuts ago</p>
                                <button class="comment-setting" data-toggle="collapse" data-target="#adminpro-demo4">...</button>
                                <ul id="adminpro-demo4" class="comment-action-st collapse">
                                    <li><a href="#">Add</a>
                                    </li>
                                    <li><a href="#">Report</a>
                                    </li>
                                    <li><a href="#">Hide Message</a>
                                    </li>
                                    <li><a href="#">Turn on Message</a>
                                    </li>
                                    <li><a href="#">Turn off Message</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="comment-phara">
                            <div class="comment-adminpr">
                                <a class="dashtwo-messsage-title" href="#">SHAKHAWAT</a>
                                <p class="comment-content">Make the Best Use of What You Have.You Never Know When & Where You Find Yourself..</p>
                            </div>
                            <div class="admin-comment-month">
                                <p class="comment-clock"><i class="fa fa-clock-o"></i> 25 minuts ago</p>
                                <button class="comment-setting" data-toggle="collapse" data-target="#adminpro-demo5">...</button>
                                <ul id="adminpro-demo5" class="comment-action-st collapse">
                                    <li><a href="#">Add</a>
                                    </li>
                                    <li><a href="#">Report</a>
                                    </li>
                                    <li><a href="#">Hide Message</a>
                                    </li>
                                    <li><a href="#">Turn on Message</a>
                                    </li>
                                    <li><a href="#">Turn off Message</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="comment-phara comment-bd-phara">
                            <div class="comment-adminpr">
                                <a class="dashtwo-messsage-title" href="#">Sarah</a>
                                <p class="comment-content">A 'Power Chick' committed to using my superpowers for good. Author, speaker, radio host.</p>
                            </div>
                            <div class="admin-comment-month">
                                <p class="comment-clock"><i class="fa fa-clock-o"></i> 27 minuts ago</p>
                                <button class="comment-setting" data-toggle="collapse" data-target="#adminpro-demo6">...</button>
                                <ul id="adminpro-demo6" class="comment-action-st collapse">
                                    <li><a href="#">Add</a>
                                    </li>
                                    <li><a href="#">Report</a>
                                    </li>
                                    <li><a href="#">Hide Message</a>
                                    </li>
                                    <li><a href="#">Turn on Message</a>
                                    </li>
                                    <li><a href="#">Turn off Message</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Transitions Start-->
<div class="transition-world-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="transition-world-list shadow-reset">
                    <div class="sparkline7-list">
                        <div class="sparkline7-hd">
                            <div class="main-spark7-hd">
                                <h1>Transitions <span class="res-ds-n">Worldwide</span></h1>
                                <div class="sparkline7-outline-icon">
                                    <span class="sparkline7-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    <span><i class="fa fa-wrench"></i></span>
                                    <span class="sparkline7-collapse-close"><i class="fa fa-times"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline7-graph">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="datatable-dashv1-list custom-datatable-overright dashtwo-project-list-data">
                                        <div id="toolbar">
                                            <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                        </div>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-resizable="true" data-cookie="true" data-page-size="5" data-page-list="[5, 10, 15, 20, 25]" data-cookie-id-table="saveId" data-show-export="true">
                                            <thead>
                                                <tr>
                                                    <th data-field="state" data-checkbox="true"></th>
                                                    <th data-field="id">No</th>
                                                    <th data-field="method" data-editable="true">Method</th>
                                                    <th data-field="date" data-editable="true">Date</th>
                                                    <th data-field="country" data-editable="true">Country</th>
                                                    <th data-field="amount" data-editable="true">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>1</td>
                                                    <td>Paypal</td>
                                                    <td>11:20pm</td>
                                                    <td>United State</td>
                                                    <td>$2413</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>2</td>
                                                    <td>Payoneer</td>
                                                    <td>5:20am</td>
                                                    <td>Canada</td>
                                                    <td>$4565</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>3</td>
                                                    <td>Skill</td>
                                                    <td>1 day Ago</td>
                                                    <td>China</td>
                                                    <td>$6888</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>4</td>
                                                    <td>Credit Card</td>
                                                    <td>2 day Ago</td>
                                                    <td>France</td>
                                                    <td>$8789</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>5</td>
                                                    <td>Master Card</td>
                                                    <td>5 days ago</td>
                                                    <td>Brazil</td>
                                                    <td>$4565</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>6</td>
                                                    <td>Visa</td>
                                                    <td>10 days ago</td>
                                                    <td>United Kingdom</td>
                                                    <td>$4554</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>7</td>
                                                    <td>Pizza</td>
                                                    <td>15 days ago</td>
                                                    <td>Germany</td>
                                                    <td>$8789</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>8</td>
                                                    <td>Master Card</td>
                                                    <td>20 days ago</td>
                                                    <td>Brazil</td>
                                                    <td>$1232</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>9</td>
                                                    <td>Skill</td>
                                                    <td>22 days ago</td>
                                                    <td>India</td>
                                                    <td>$5465</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>10</td>
                                                    <td>Payoneer</td>
                                                    <td>29 days ago</td>
                                                    <td>Australia</td>
                                                    <td>$7887</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>11</td>
                                                    <td>Credit Card</td>
                                                    <td>31 days ago</td>
                                                    <td>Saudi</td>
                                                    <td>$8782</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>12</td>
                                                    <td>Master Card</td>
                                                    <td>40 days ago</td>
                                                    <td>Netherlands</td>
                                                    <td>$1569</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>13</td>
                                                    <td>Pizza</td>
                                                    <td>50 days ago</td>
                                                    <td>Brazil</td>
                                                    <td>$8456</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>14</td>
                                                    <td>Skill</td>
                                                    <td>60 days ago</td>
                                                    <td>United State</td>
                                                    <td>$3654</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>15</td>
                                                    <td>Master Card</td>
                                                    <td>70 days ago</td>
                                                    <td>India</td>
                                                    <td>$6541</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>16</td>
                                                    <td>Credit Card</td>
                                                    <td>75 days ago</td>
                                                    <td>United Kingdom</td>
                                                    <td>$9865</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>17</td>
                                                    <td>Pizza</td>
                                                    <td>80 days ago</td>
                                                    <td>United State</td>
                                                    <td>$4587</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>18</td>
                                                    <td>Payoneer</td>
                                                    <td>82 days ago</td>
                                                    <td>Netherlands</td>
                                                    <td>$6587</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>19</td>
                                                    <td>Credit Card</td>
                                                    <td>85 days ago</td>
                                                    <td>United Kingdom</td>
                                                    <td>$1478</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>20</td>
                                                    <td>Master Card</td>
                                                    <td>87 days ago</td>
                                                    <td>India</td>
                                                    <td>$568</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>21</td>
                                                    <td>Payoneer</td>
                                                    <td>90 days ago</td>
                                                    <td>United State</td>
                                                    <td>$2547</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="vectorjsmarp" id="world-map"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection