@extends('layout.index')

@section('content')
<section class="p-t-20">
<div class="main-content">
	<H1 style="margin-top: -101px;text-align:  center;font-family: Times New Roman;">DANH SÁCH SINH VIÊN</H1>
    <div class="section__content section__content--p30">
        <div class="container">
            <div class="row m-t-30">
                <div class="col-md-12">
                	<div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">Chọn lớp</option>
                                                <option value="">29CHLT</option>
                                                <option value="">29CHM</option>
                                                <option value="">29CHS</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">Sắp xếp</option>
                                                <option value="">Theo Tên</option>
                                                <option value="">Theo Lớp</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>OK</button>
                                    </div>
                                    <form class="au-form-icon--sm" action="" method="post">
                            <input class="au-input--w300 au-input--style2" type="text" placeholder="Tìm kiếm">
                            <button class="au-btn--submit2" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                                    
                                </div>
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table table-bordered text-center">

                            <thead class="thead-dark">
                                <tr>
                                    <th>Thứ tự</th>
                                    <th>Lớp</th>
                                    <th>Họ</th>
                                    <th>Tên</th>
                                    <th>Ngày sinh</th>
                                    <th>Nơi sinh</th>
                                    <th>Địa chỉ thường trú</th>
                                    <th>Điện thoại</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>29CHLT</td>
                                    <td>Nguyễn Hữu Thành</td>
                                    <td>Nhân</td>
                                    <td>13/10/1998</td>
                                    <td>Quảng Ngãi</td>
                                    <td>Nhà Nghỉ 98</td>
                                    <td>0961291380</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>29CHLT</td>
                                    <td>Võ Bá</td>
                                    <td>Chúc</td>
                                    <td>13/10/1998</td>
                                    <td>Quảng Ngãi</td>
                                    <td>Nhà Nghỉ 98</td>
                                    <td>0961291380</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>29CHLT</td>
                                    <td>Đào Duy</td>
                                    <td>Toàn</td>
                                    <td>13/10/1998</td>
                                    <td>Quảng Ngãi</td>
                                    <td>Nhà Nghỉ 98</td>
                                    <td>0961291380</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>29CHLT</td>
                                    <td>Nguyễn Đức</td>
                                    <td>Hiếu</td>
                                    <td>13/10/1998</td>
                                    <td>Quảng Ngãi</td>
                                    <td>Nhà Nghỉ 98</td>
                                    <td>0961291380</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="card-footer" style="background: #f2f2f2;margin: auto;text-align: center;">
				        	<div class="test" style="text-align:center;">
				            <button type="submit" class="btn btn-primary btn-sm">
				                Thêm sinh viên
				            </button>
				            <button type="reset" class="btn btn-danger btn-sm">
				                Làm mới
				            </button>
				        	</div>
				        </div>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection