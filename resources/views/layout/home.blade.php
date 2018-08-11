@extends('layout.index')

@section('content')<!-- Modal -->

<section class="statistic">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item">
                        <h2 class="number">10,368</h2>
                        <span class="desc">Sinh Viên</span>
                        <div class="icon">
                            <i class="zmdi zmdi-mood-bad" style="margin:47px;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item">
                        <h2 class="number">688</h2>
                        <span class="desc">Giảng Viên</span>
                        <div class="icon">
                            <i class="zmdi zmdi-mood"style="margin:47px;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item">
                        <h2 class="number">1,086</h2>
                        <span class="desc">Khóa</span>
                        <div class="icon">
                            <i class="zmdi zmdi-view-list-alt"style="margin:47px;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item">
                        <h2 class="number">386</h2>
                        <span class="desc">KPI</span>
                        <div class="icon">
                            <i class="zmdi zmdi-lock"style="margin:47px;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END STATISTIC-->

<section>
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8">
                    <!-- RECENT REPORT 2-->
                    <div class="recent-report2">
                        <h3 class="title-3">recent reports</h3>
                        <div class="chart-info">
                            <div class="chart-info__left">
                                <div class="chart-note">
                                    <span class="dot dot--blue"></span>
                                    <span>Tốt Nghiệp</span>
                                </div>
                                <div class="chart-note">
                                    <span class="dot dot--green"></span>
                                    <span>Nhập Học</span>
                                </div>
                            </div>
                            <div class="chart-info-right">
                                <div class="rs-select2--dark rs-select2--md m-r-10">
                                    <select class="js-select2" name="property">
                                        <option selected="selected">Tất Cả</option>
                                        <option value="">Tốt Nghiệp</option>
                                        <option value="">Nhập Học</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <div class="rs-select2--dark rs-select2--md m-r-10">
                                    <select class="js-select2 au-select-dark" name="time">
                                        <option selected="selected">Chọn Thời Gian</option>
                                        <option value="theoNgay">Theo Ngày</option>
                                        <option value="theoThang">Theo Tháng</option>
                                        <option value="theoNam">Theo Năm</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="recent-report__chart">
                            <canvas id="recent-rep2-chart"></canvas>
                        </div>
                    </div>
                    <!-- END RECENT REPORT 2             -->
                </div>
                
                <div class="col-xl-4">
                    <!-- TASK PROGRESS-->
                    <div class="task-progress">
                        <h3 class="title-3">Thống Kê</h3>
                        <div class="au-skill-container">
                            <div class="au-progress">
                                <span class="au-progress__title">PHP</span>
                                <div class="au-progress__bar">
                                    <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="90">
                                        <span class="au-progress__value js-value"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="au-progress">
                                <span class="au-progress__title">HTML5/CSS3</span>
                                <div class="au-progress__bar">
                                    <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="85">
                                        <span class="au-progress__value js-value"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="au-progress">
                                <span class="au-progress__title">Mạng</span>
                                <div class="au-progress__bar">
                                    <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="95">
                                        <span class="au-progress__value js-value"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="au-progress">
                                <span class="au-progress__title">Sửa Chữa</span>
                                <div class="au-progress__bar">
                                    <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="95">
                                        <span class="au-progress__value js-value"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END TASK PROGRESS-->
                </div>
            </div>
        </div>
    </div>
</section>



@endsection