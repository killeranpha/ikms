@extends('layout.index')
@section('content')
<section class="p-t-20">
   <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" name="formSuaChua" id="formThemMoi">
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
                           @foreach($idNhomKpiSua as $value)
                           <input type="text" id="tenKpi" name="tenKpi" placeholder="{{$value->ten}}" class="form-control">
                           @endforeach
                        </div>
                     </div>
                     <div class="row form-group">
                        <div class="col col-md-3">
                           <label class=" form-control-label">Thuộc cấp</label>
                        </div>
                        <div class="col-12 col-md-9">
                           <select name="nhomCha" id="nhomCha" class="form-control">
                              <option value="0">Chọn cấp</option>
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
<script>
   jQuery.noConflict();
   (function($) {
         $("#formSuaChua").validate({
            rules: {
                tenKpi: {
                    required: true,
                },
                nhomCha:{
                     min: 0
                }
            },
            messages:{
                tenKpi:{
                    required: "Vui lòng nhập tên nhóm Kpi",
                
                },
                nhomCha:{
                    min: "Vui lòng chọn cấp của nhóm kpi"
                }
            },
            errorElement: "em",
            errorPlacement: function(error,element){
                //Thêm help-block vào label khi bị lỗi
                error.addClass("help-block");
                //Thêm has-feedback vào div.form-group
                element.parents(".col-md-9").addClass("has-feedback");
                if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
				}else{
						error.insertAfter( element );
				}
                if ( !element.next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
					}

            },
            success: function ( label, element ) {
					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !$( element ).next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-md-9" ).addClass( "has-error" ).removeClass( "has-success" );
					$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
				},
				unhighlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-md-9" ).addClass( "has-success" ).removeClass( "has-error" );
					$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
				}

             });
   })(jQuery);
</script>
</section>
@endsection