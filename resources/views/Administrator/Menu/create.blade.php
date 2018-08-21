@extends('layout.index') @section('content')
<form action="/themmenu" id="formThemMenu" name="formThemMenu" method="post">
    <!-- Với form có method post thì phải them token -->
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="container">
        <div class="row m-t-30">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header" style="text-align:center;">
                        <strong>THÊM MENU</strong>
                    </div>
                    <div class="card-body card-block">
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
                                    <option value="">Chọn cấp</option>
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
                                <b style="color : blue">{{$Success}}</b>
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
<script>
jQuery.noConflict();
	(function($) {
		$("#formThemMenu").validate({
			rules: {
				tenMenu: {
					required: true, // không được bỏ trống
				},
                url: {
					required: true, // không được bỏ trống
				},
                chaId: {
					required: true, // không được bỏ trống
				},
			},
			messages:{
				tenMenu:{
					required:"Vui lòng nhập tên menu", // thông báo khi bị bỏ trống
				},
                url:{
					required:"Vui lòng nhập url", // thông báo khi bị bỏ trống
				},
                chaId:{
					required:"Vui lòng chọn cấp", // thông báo khi bị bỏ trống
				},
			}
		});
})(jQuery);
</script>
@endsection