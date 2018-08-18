@extends('layout.index')
@section('content')
<section class="p-t-20">
   <div class="main-content">
      <h1>DANH SÁCH NHÓM KPI</h1>
      <form>
         <input type="hidden" name="kieuSapXep" id="kieuSapXep">
         <div class="section__content section__content--p30">
            <div class="row m-t-30">
               <div class="col-md-12">
                  @include('Administrator.NhomKpi.layout.breadcrumb')
                  <!-- DATA TABLE-->
                  <div class="table-responsive m-b-40">
                     <table class="table table-bordered ">
                        <thead class="thead-dark">
                           <tr>
                              <th></th>
                              <th>Tên</th>
                              <th>Chức năng</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($danhSach as $value)
                           <div class="form-group">
                              <tr>
                                 <td>
                                    @if($value["level"]==0)
                                    <i class="zmdi zmdi-fast-forward"></i>
                                    @endif
                                 </td>
                                 <td> {{str_repeat("------",$value["level"]).$value["ten"]}} </td>
                                 <td>
                                    <div class="table-data-feature text-center" style="justify-content: center;">
                                       <a href="/suanhomkpi/{{$value->id}}" class="item" data-toggle="tooltip" data-placement="top"
                                          title="Sửa">
                                       <i class="zmdi zmdi-edit"></i>
                                       </a>
                                       <a href="" class="item" data-toggle="tooltip" data-placement="top"
                                          title="Xóa">
                                       <i class="zmdi zmdi-delete"></i>
                                       </a>
                                    </div>
                                 </td>
                              </tr>
                           </div>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
                  <!-- END DATA TABLE-->
               </div>
            </div>
         </div>
      </form>
   </div>
</section>
<style>
   .main-content h1 {
   margin-top: -101px;
   margin-bottom: 40px;
   text-align: center;
   font-family: Times New Roman;
   }
</style>
<script>
   function SapXepFunction(kieuSapXep) {
       $('#kieuSapXep').val(kieuSapXep);
   }
</script>
@endsection