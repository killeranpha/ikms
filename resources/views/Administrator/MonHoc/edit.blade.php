@extends('layout.index') @section('content')
<form action="{{Route('suamonhoc')}}" id="myForm" name="myForm" method="post">
    <!-- Với form có method post thì phải them token -->
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
	<input type="hidden" name="id" value="{{$getMonHoc['id']}}">
    <div class="container">
        <div class="row m-t-30">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header" style="text-align:center;">
                        <strong>THÊM MÔM HỌC</strong>
                    </div>
                    <div class="card-body card-block">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Mã Môn Học</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="ma" value="{{$getMonHoc['ma']}}" placeholder="Nhập mã môn học" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Tên Môn Học</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="ten" value="{{$getMonHoc['ten']}}" placeholder="Nhập tên môn học" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="test" style="text-align:center;">
                            <button type="submit" class="btn btn-primary btn-sm">
                                Sửa Môn Học
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
jQuery.noConflict();
	(function($) {
		$("#myForm").validate({
			rules: {
				ma: {
					required: true, // không được bỏ trống
					minlength: 2 // độ dài min = 4
				},
                ten: {
					required: true, // không được bỏ trống
					minlength: 4 // độ dài min = 4
				}
			},
			messages:{
				ma:{
					required:"Vui lòng nhập tên cấu hình", // thông báo khi bị bỏ trống
					minlength: "Tên cấu hình từ 2 - 16 ký tự" // thông báo khi không đúng độ dài
				},
                ten:{
					required:"Vui lòng nhập tên cấu hình", // thông báo khi bị bỏ trống
					minlength: "Tên cấu hình từ 4 - 16 ký tự" // thông báo khi không đúng độ dài
				}
			}
		});
})(jQuery);
</script>
@endsection