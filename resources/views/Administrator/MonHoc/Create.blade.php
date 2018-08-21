@extends('Layout.index') @section('content')

<section class="p-t-20">
	<div class="w-50 container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="title-5 m-b-35">Thêm Môn Học</h3>
				@if(session('thongBao'))
					<div class="alert alert-success">
						{{session('thongBao')}}
					</div>
				@endif
				<!-- Tùy chọn -->
				<div style="margin-top:40px"></div>
				<form action="{{Route('themmonhoc')}}" method="post" id="myForm" name="myForm">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
					<div class="login-form">
						<div class="form-group">
							<label>Mã Môn Học</label>
							<input class="au-input au-input--full" type="" name="ma" id="ma" placeholder="Nhập mã môn học" required>
						</div>
						<div class="form-group">
							<label>Tên Môn Học</label>
							<input class="au-input au-input--full" type="" name="ten" id="ten" placeholder="Nhập tên môn học" required>
						</div>
						<div class="table-data__tool">
							<div class="table-data__tool-left">
								
							</div>
							<div class="table-data__tool-right">
								<button class="au-btn-filter" name="submit" value="submit">
									<i class="fas fa-angle-double-right"></i>
									<i>Thêm Môn Học</i>
									<i class="fas fa-angle-double-left"></i>
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<script>
jQuery.noConflict();
	(function($) {
		$("#myForm").validate({
			rules: {
				ten: {
					required: true, // không được bỏ trống
					minlength: 4 // độ dài min = 4
				},
                ma: {
					required: true, // không được bỏ trống
				}
			},
			messages:{
				ten:{
					required:"Vui lòng nhập tên cấu hình", // thông báo khi bị bỏ trống
					minlength: "Tên cấu hình từ 4 - 16 ký tự" // thông báo khi không đúng độ dài
				},
                ma:{
					required:"Vui lòng nhập tên cấu hình", // thông báo khi bị bỏ trống
				}
			}
		});
})(jQuery);
</script>
@endsection