@extends('layout.index')

@section('content')
<div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Tổng quan</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>Tạo event</button>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1036</h2>
                                                <span>Đang Online</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>688</h2>
                                                <span>Đã Bán Tuần Này</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>2,086</h2>
                                                <span>Hơn 1 Tuần Trước</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>$60,386</h2>
                                                <span>Tổng Thu Nhập</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Thống kê</h3>
                                        <div class="chart-info">
                                            <div class="chart-info__left">
                                                <div class="chart-note">
                                                    <span class="dot dot--blue"></span>
                                                    <span>products</span>
                                                </div>
                                                <div class="chart-note mr-0">
                                                    <span class="dot dot--green"></span>
                                                    <span>services</span>
                                                </div>
                                            </div>
                                            <div class="chart-info__right">
                                                <div class="chart-statis">
                                                    <span class="index incre">
                                                        <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                                                    <span class="label">products</span>
                                                </div>
                                                <div class="chart-statis mr-0">
                                                    <span class="index decre">
                                                        <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                                    <span class="label">services</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recent-report__chart">
                                            <canvas id="recent-rep-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5">Biểu đồ</h3>
                                        <div class="row no-gutters">
                                            <div class="col-xl-6">
                                                <div class="chart-note-wrap">
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--blue"></span>
                                                        <span>Số liệu thực</span>
                                                    </div>
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--red"></span>
                                                        <span>Số liệu dự kiến</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="percent-chart">
                                                    <canvas id="percent-chart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Gần đây</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Thời gian</th>
                                                <th>Mã số</th>
                                                <th>Tên</th>
                                                <th class="text-right">Giá</th>
                                                <th class="text-right">Số lượng</th>
                                                <th class="text-right">Tổng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>100398</td>
                                                <td>Uống nước mía giá rẻ</td>
                                                <td class="text-right">$15</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$15</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 03:22</td>
                                                <td>100397</td>
                                                <td>Lễ hội pháo hoa châu á</td>
                                                <td class="text-right">$200</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$200</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 02:12</td>
                                                <td>100396</td>
                                                <td>Uống nước mía giá rẻ</td>
                                                <td class="text-right">$15</td>
                                                <td class="text-right">2</td>
                                                <td class="text-right">$30</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 00:59</td>
                                                <td>100395</td>
                                                <td>Lễ hội pháo hoa châu á</td>
                                                <td class="text-right">$200</td>
                                                <td class="text-right">5</td>
                                                <td class="text-right">$1000</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 00:52</td>
                                                <td>100393</td>
                                                <td>Lễ hội pháo hoa châu á</td>
                                                <td class="text-right">$200</td>
                                                <td class="text-right">3</td>
                                                <td class="text-right">$600</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 00:45</td>
                                                <td>100392</td>
                                                <td>Lễ hội pháo hoa châu á</td>
                                                <td class="text-right">$200</td>
                                                <td class="text-right">6</td>
                                                <td class="text-right">$1200</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 00:43</td>
                                                <td>100391</td>
                                                <td>Lễ hội pháo hoa châu á</td>
                                                <td class="text-right">$200</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$200</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 00:43</td>
                                                <td>100393</td>
                                                <td>Lễ hội pháo hoa châu á</td>
                                                <td class="text-right">$200</td>
                                                <td class="text-right">3</td>
                                                <td class="text-right">$600</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>Sắp Diễn Ra</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Lễ hội ABC</a>
                                                    </h5>
                                                    <span class="time">10:00 AM Ngày 12/10/2018</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Giao lưu sinh viên Việt - Nhật</a>
                                                    </h5>
                                                    <span class="time">11:00 AM NGÀY 15/10/2018</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--primary">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Giao lưu văn hóa Việt - Nhật</a>
                                                    </h5>
                                                    <span class="time">02:00 PM NGÀY 22/10/2018</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--success">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Hội chợ</a>
                                                    </h5>
                                                    <span class="time">03:30 PM NGÀY 24/10/2018</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--danger js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Lễ hội pháo hoa châu á lần 2</a>
                                                    </h5>
                                                    <span class="time">10:00 AM NGÀY 29/10/2018</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Lễ hội pháo hoa châu á lần 3</a>
                                                    </h5>
                                                    <span class="time">11:00 AM NGÀY 12/11/2018</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-task__footer">
                                            <button class="au-btn au-btn-load js-load-btn">Thêm nữa</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>       
@endsection