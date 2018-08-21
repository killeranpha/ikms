@extends('layout.index')
@section('content')
<section class="p-t-20">
   <form action="/suanhomkpi/action" method="post" enctype="multipart/form-data" class="form-horizontal" name="formSuaChua" id="formSuaChua">
      {!! csrf_field() !!}
      <div class="container">
         <div class="row m-t-30">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header" style="text-align:center;">
                     <strong>SỬA NHÓM KPI</strong>
                  </div>
                  <div class="card-body card-block">
                     <div class="row form-group">
                        <div class="col col-md-3">
                           <label class=" form-control-label" for="tenKpi">Tên nhóm KPI</label>
                        </div>
                        <div class="col-12 col-md-9">
                           <input type="hidden" id="idNhomKpi" name="idNhomKpi" value='{{$idNhomKpiSua["id"]}}'>
                           <input type="text" id="tenNhomKpi" name="tenNhomKpi" placeholder="" class="form-control" value='{{$idNhomKpiSua["ten"]}}'>
                        </div>
                     </div>
                     <div class="row form-group">
                        <div class="col col-md-3">
                           <label for="nhomCha" class=" form-control-label">Thuộc cấp</label>
                        </div>
                        <div class="col-12 col-md-9">
                           <select name="nhomCha" id="nhomCha" class="form-control">
                            @foreach($NhomKpi as $value)
                                @if($idNhomKpiSua["nhomCha"] == $value->id){
                                    <option value="{{$value->id}}"><?=str_repeat('---',$value->level)?>{{$value->ten}}</option>                    
                                }
                                @endif
                            @endforeach
                            @foreach($danhSach as $value)
                            <option value="{{$value->id}}"><?=str_repeat('---',$value->level)?>{{$value->ten}}</option>
                            @endforeach
                           </select>
                        </div>
                     </div>
                     <!-- Submit -->
                     <div class="form-group">
                        <div class="test" style="text-align:center;">
                           <button type="submit" class="btn btn-primary btn-sm">
                           Xác nhận
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form>
</section>
@endsection