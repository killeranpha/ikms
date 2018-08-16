@extends('layout.index')
@section('content')
<section class="p-t-20">
   <div class="container">
      <div class="row m-t-30">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header" style="text-align:center;">
                  <strong>THÊM MỚI NHÓM KPI</strong>
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
                  </form>
               </div>
               <div class="card-footer">
                  <div class="test" style="text-align:center;">
                     <button type="submit" class="btn btn-primary btn-sm">
                     Thêm
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
</section>
@endsection