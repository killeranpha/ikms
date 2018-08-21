@extends('layout.index')
@section('content')
<section class="p-t-20">
   <div class="main-content">
   <H1 style="margin-top: -101px;text-align:  center;font-family: Times New Roman;">THÊM MỚI NHÓM KPI</H1>
      <form action="{{Route('themnhomkpi')}}" method="post" enctype="multipart/form-data" class="form-horizontal" name="formThemMoi" id="formThemMoi">
         {!! csrf_field() !!}
         <div class="container">
            <div class="row m-t-30">
               <div class="col-lg-12">
                  <div class="card">
                     <div class="card-body card-block">
                        <div class="row form-group">
                           <div class="col col-md-3">
                              <label class=" form-control-label" for="tenKpi">Tên nhóm KPI</label>
                           </div>
                           <div class="col-12 col-md-9">
                              <input type="text" id="tenKpi" name="tenKpi" placeholder="" class="form-control">
                           </div>
                        </div>
                        <div class="row form-group">
                           <div class="col col-md-3">
                              <label for="nhomCha" class=" form-control-label">Thuộc cấp</label>
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
                        <div class="card-footer">
                           <div class="test" style="text-align:center;">
                              @if(isset($Success))
                              <div class="alert alert-success text-center">
                                 <p>{{$Success}}</p>
                              </div>
                              @endif
                              <button type="submit" class="btn btn-primary btn-sm">
                              Back
                              </button>
                              <button type="submit" class="btn btn-primary btn-sm">
                              Thêm
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </div>
   </form>
   </div>
   <script>
      jQuery.noConflict();
      (function($) {
            $("#formThemMoi").validate({
               rules: {
                    tenKpi: {
                        required: true,
                        minlength: 4
                   },
                   nhomCha:{
                        min: 1
                   }
               },
               messages:{
                   tenKpi:{
                       required: "Vui lòng nhập tên nhóm Kpi",
                       minlength: "Vui lòng nhập tên ít nhất là 4 kí tự"
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
      			$( "<span class='glyphicon glyphicon-ok form-control-feedback' ></span>" ).insertAfter( $( element ) );
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
   </div>
</section>
@endsection