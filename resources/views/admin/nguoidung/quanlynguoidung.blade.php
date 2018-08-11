@extends('layout.index')

@section('content')
<div class="row">
                            <div class="col-lg-12">
                                <!-- USER DATA-->
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>Quản lý người dùng</h3>
                                    <div class="filters m-b-45">
                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">Tất cả</option>
                                                <option value="">User</option>
                                                <option value="">VIP</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                            <select class="js-select2 au-select-dark" name="time">
                                                <option selected="selected">Tất cả</option>
                                                <option value="">Tuần trước</option>
                                                <option value="">Hơn 1 tuần trước</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>Tên</td>
                                                    <td>Địa chỉ</td>
                                                    <td>Số điện thoại</td>
                                                    <td>Cấp bậc</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @include('admin.congcu.danhsachnguoidung.quanlynguoidung')
                                                @include('admin.congcu.danhsachnguoidung.quanlynguoidung')
                                                @include('admin.congcu.danhsachnguoidung.quanlynguoidung')
                                                @include('admin.congcu.danhsachnguoidung.quanlynguoidung')
                                                @include('admin.congcu.danhsachnguoidung.quanlynguoidung')
                                            </tbody>
                                        </table>
                                    </div>
                                    @include('admin.congcu.phantrang')
                                </div>
                                <!-- END USER DATA-->
                            </div>
</div>
@endsection