@extends('layout.index')

@section('content')
<section class="p-t-20">
<div class="main-content">
	<H1 style="margin-top: -101px;text-align:  center;font-family: Times New Roman;">ĐIỂM DANH</H1>
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
                                                <option selected="selected">Chọn buổi</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>OK</button>
                                    </div>
                                    
                                </div>
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table table-bordered text-center">

                            <thead class="thead-dark">
                                <tr>
                                    <th>Thứ tự</th>
                                    <th>Tên sinh viên</th>
                                    <th>Điểm danh</th>
                                    <th>Lý do</th>
                                </tr>
                            </thead>
                            <tbody>
                                <div class="form-group">
                                    <tr style="background: #fff;">
                                        <td>1</td>
                                        <td>PHP là gì</td>
                                        <td>
                                            <div class="form-check-inline form-check">
                                                <label>
                                                    <input type="radio" name="inline-radios" value="1" class="form-check-input">Có
                                                </label>
                                                <label>
                                                    <input type="radio" name="inline-radios" value="2" class="form-check-input">Vắng
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                              <input type="text" class="form-control1" placeholder="Nhập lý do">
                                        </td>
                                    </tr>
                                </div>
                                <div class="form-group">
                                    <tr style="background: #fff;">
                                        <td>1</td>
                                        <td>PHP là gì</td>
                                        <td>
                                            <div class="form-check-inline form-check">
                                                <label>
                                                    <input type="radio" name="inline-radios" value="1" class="form-check-input">Có
                                                </label>
                                                <label>
                                                    <input type="radio" name="inline-radios" value="2" class="form-check-input">Vắng
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                              <input type="text" class="form-control1" placeholder="Nhập lý do">
                                        </td>
                                    </tr>
                                </div>
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