@extends('Layout.index') @section('content')

<section class="p-t-20">
	<form action="/suamenu" method="post">  
    <!-- Với form có method post thì phải them token -->
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <input type="hidden" name="id" value="{{$getMenuGroup['id']}}">
    <div class="container">
        <div class="row m-t-30">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header" style="text-align:center;">
                        <a href="{{Route('danhsachmenu')}}" class="btn btn-primary btn-sm" style="float:left">
                            Quay lại
                        </a>
                        <strong>SỬA MENU</strong>
                    </div>
                    <div class="card-body card-block">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Tên Menu</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="ten" name="ten" value="{{$getMenuGroup['ten']}}" placeholder="Nhập tên menu" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">URL</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="url" name="url" value="{{$getMenuGroup['url']}}" placeholder="Nhập url" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Thuộc cấp</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="chaId" id="chaId" class="form-control">
                                    @foreach($getMenu as $value)
                                        @if($value->id == $getMenuGroup['chaId'])
                                        <option value="{{$value->id}}">{{$value->ten}}</option>
                                        @endif
                                    @endforeach
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
                                Sửa Menu
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</form>
</section>
@endsection