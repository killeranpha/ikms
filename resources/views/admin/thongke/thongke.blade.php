@extends('admin.layout.index')

@section('content')

<section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Thống kê</h3>
                        </div>
                    </div>
                    <div class="row">
                        @include('admin.congcu.thongke.thongkehangthang')
                        @include('admin.congcu.thongke.top')
                        @include('admin.congcu.thongke.bieudo')
                    </div>
                </div>
            </section>

@endsection