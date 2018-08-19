@extends('layout.index') @section('content')
<section class="p-t-20">
<div class="main-content">
<H1 style="margin-top: -101px;text-align:  center;font-family: Times New Roman;">THÊM MỚI MENU</H1>
<form action="/themmenu" id="formThemMenu" name="formThemMenu" method="post">
    <!-- Với form có method post thì phải them token -->
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="">
        <div class="row m-t-30">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body card-block" style="margin: 30px;">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Tên Menu</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="tenMenu" name="tenMenu" placeholder="Nhập tên menu" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">URL</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="url" name="url" placeholder="Nhập url" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Thuộc cấp</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="chaId" id="chaId" class="form-control">
                                    <option value="0">Chọn cấp</option>
                                    @foreach($danhSach as $value)
                                    <option value="{{$value->id}}"><?=str_repeat('---',$value->level)?>{{$value->ten}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="test" style="text-align:center;">
                            @if(isset($Success))
                            <div class="alert alert-success text-center">
                                <b style="color : red">{{$Success}}</b>
                            </div>
                            @endif 
                            <button type="submit" class="btn btn-primary btn-sm">
                                Thêm Menu
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
</section>
<script>
jQuery.noConflict();
	(function($) {
		$("#formThemMenu").validate({
			rules: {
				tenMenu: {
					required: true, // không được bỏ trống
					minlength: 4 // độ dài min = 4
				},
                url: {
					required: true, // không được bỏ trống
					minlength: 4 // độ dài min = 4
				}
			},
			messages:{
				tenMenu:{
					required:"Vui lòng nhập tên cấu hình", // thông báo khi bị bỏ trống
					minlength: "Tên cấu hình từ 4 - 16 ký tự" // thông báo khi không đúng độ dài
				},
                url:{
					required:"Vui lòng nhập tên cấu hình", // thông báo khi bị bỏ trống
					minlength: "Tên cấu hình từ 4 - 16 ký tự" // thông báo khi không đúng độ dài
				}
			}
		});
})(jQuery);
</script>
@endsection