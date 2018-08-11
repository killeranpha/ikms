@extends('admin.layout.index')

@section('content')

            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Danh sách event</h3>
                            <form action="admin.event.taomoi" method="post">
                            <div class="table-data__tool">
                                @include('admin.congcu.selectleft')
                                @include('admin.congcu.selectright')
                            </div>
                            </form>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th>
                                            <th>Tên Event</th>
                                            <th>Nhà tài trợ</th>
                                            <th>Dữ liệu</th>
                                            <th>Bắt đầu</th>
                                            <th>Kết thúc</th>
                                            <th>Tình trạng</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @include('admin.congcu.danhsach.thongtindanhsach')
                                    @include('admin.congcu.danhsach.thongtindanhsach')
                                    @include('admin.congcu.danhsach.thongtindanhsach')
                                    @include('admin.congcu.danhsach.thongtindanhsach')
                                    @include('admin.congcu.danhsach.thongtindanhsach')
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            @include('admin.congcu.phantrang')
@endsection