@extends('layout.index')

@section('content')
<section class="p-t-20">
<div class="main-content">
	<H1 style="margin-top: -101px;text-align:  center;font-family: Times New Roman;">THÊM SINH VIÊN</H1>
    <div class="section__content section__content--p30">
        <div class="col-lg-12">
            <div class="row m-t-30">
                <div class="col-md-12">
                	
                    <div class="table-responsive m-b-40">
                        <table class="table table-bordered text-center" align="center">

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
                                <tr style="background: #fff;">
                                	<td>1</td>
                                	<td>
										      <input type="text" class="form-control1" placeholder="Nhập lớp">
									</td>
                                	<td>
										      <input type="text" class="form-control1" placeholder="Nhập họ">
									</td>
									<td>
										      <input type="text" class="form-control1" placeholder="Nhập tên">
									</td>
									<td>
										      <input type="date" id="ngayNhapHoc" name="ngayNhapHoc" class="form-control-file" style="color: #757575;">
									</td>
									<td>
										      <input type="text" class="form-control1" placeholder="Nhập nơi sinh">
									</td>
									<td>
										      <input type="text" class="form-control1" placeholder="Nhập địa chỉ thường trú">
									</td>
									<td>
										      <input type="text" class="form-control1" placeholder="Nhập số điện thoại">
									</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="card-footer" style="background: #f7f7f7;margin: auto;text-align: center;">
				        	<div class="test" style="text-align:center;">
				        	<button type="reset" class="btn btn-danger btn-sm">
				                Thêm dòng
				            </button>
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