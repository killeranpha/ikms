@extends('layout.index')

@section('content')
<div class="container">
<div class="row m-t-30">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header" style="text-align:center;">
            <strong>THÊM MỚI SINH VIÊN</strong>
        </div>
        <div class="card-body card-block">
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" name="formThemMoi" id="formThemMoi">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Tên Sinh Viên</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="tenSinhVien" name="tenSinhVien" placeholder="Nhập tên sinh viên" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Mã sinh viên</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="maSinhVien" name="maSinhVien" placeholder="Nhập mã sinh viên" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Thư điện tử</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="email" id="thuDienTu" name="thuDienTu" placeholder="Nhập thư điện tử" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Quê quán</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="queQuan" name="queQuan" placeholder="Nhập quê quán" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Số CMND</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="soCMND" name="soCMND" placeholder="Nhập số CMND" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Số điện thoại</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="soDienThoai" name="soDienThoai" placeholder="Nhập số điện thoại" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Thuộc khóa</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="chonKhoa" id="chonKhoa" class="form-control">
                            <option value="0">Chọn Khóa</option>
                            <option value="1">Khóa 28</option>
                            <option value="2">Khóa 29</option>
                            <option value="3">Khóa 30</option>
                        </select>     
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Môn học đăng ký</label>
                    </div>
                    <div class="col col-md-9">
                        <div class="form-check-inline form-check" name="monHoc" id="monHoc">
                            <label class="form-check-label ">
                                <input type="checkbox" id="monHoc" name="monHoc" value="option1" class="form-check-input">Lập Trình
                            </label>
                            <label class="form-check-label ">
                                <input type="checkbox" id="monHoc" name="monHoc" value="option2" class="form-check-input">Quản Trị Mạng
                            </label>
                            <label class="form-check-label ">
                                <input type="checkbox" id="monHoc" name="monHoc" value="option3" class="form-check-input">Sửa Chữa
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="row form-group">
                	<div class="col col-md-3">
                		<label for="date-start" class="form-control-label">Ngày nhập học</label>
                	</div>
                	<div class="col-12 col-md-3">
                        <input type="date" id="ngayNhapHoc" name="ngayNhapHoc" class="form-control-file">
                    </div>
                </div>
                <div class="row form-group">
                	<div class="col col-md-3">
                		<label for="date-start" class="form-control-label">Ngày kết thúc</label>
                	</div>
                	<div class="col-12 col-md-3">
                        <input type="date" id="ngayKetThuc" name="ngayKetThuc" class="form-control-file">
                    </div>
                </div>
                <!-- Upload Ảnh -->
				<!--<div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Upload ảnh</label>
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="file" id="file-input" name="file-input" class="form-control-file">
                    </div>
                </div> -->
            </form>
        </div>
        <div class="card-footer">
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
</div>
</div>
</div>
<script>
jQuery.noConflict();
	(function($) {
		$("#formThemMoi").validate({
			rules: {
				tenSinhVien: {
					required: true
				},
				maSinhVien:{
					required:true
				},
				thuDienTu:{
					required:true,
					email:true
				},
				queQuan:{
					required:true
				},
				soCMND:{
					required:true,
					minlength:9,
					maxlength:12
				},
				soDienThoai:{
					minlength:9,
					maxlength:11
				}
			},
			messages:{
				tenSinhVien:{
					required:"Vui lòng nhập tên sinh viên"
				},
				maSinhVien:{
					required:"Vui lòng nhập mã sinh viên"
				},
				thuDienTu:{
					required:"Vui lòng nhập thư điện tử",
					email:"Không đúng định dạng"
				},
				queQuan:{
					required:"Vui lòng nhập quê quán"
				},
				soCMND:{
					required:"Vui lòng nhập số CMND",
					minlength:"Số CMND phải từ 9 - 12 ký tự",
					maxlength:"Số CMND phải từ 9 - 12 ký tự"
				},
				soDienThoai:{
					minlength:"Số điện thoại phải từ 9 - 12 ký tự",
					maxlength:"Số điện thoại phải từ 9 - 12 ký tự"
				}
			}
		});
})(jQuery);
</script>
@endsection