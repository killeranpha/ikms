@extends('layout.index')

@section('content')
<style>
    .pagination li{
        float:left;
    }
</style>
<section class="p-t-20">
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            @if(session('thongBao'))
					<div class="alert alert-success text-center">
						{{session('thongBao')}}
					</div>
			@endif
                <h3 class="title-5 m-b-35">Danh sách cấu hình</h3>
        <form action="{{Route('danhsachmonhoc')}}" method="GET">
                <input type="hidden" name="tenTruongSapXep" id="tenTruongSapXep">
				<input type="hidden" name="kieuSapXep" id="kieuSapXep">
                <div class="table-data__tool">
                    <div class="filters m-b-45">
                        <div class="rs-select2--light rs-select2--md m-r-10 rs-select2--border" style="background:#fff;">
                            <select class="js-select2 au-select-light" name="phanTrang" >
                                <option value="5" @if ($phanTrang == 5) selected="selected"  @endif >Trang Hiển Thị</option>
                                <option value="10" @if ($phanTrang == 10) selected="selected"  @endif>10</option>
                                <option value="20" @if ($phanTrang == 20) selected="selected"  @endif>20</option>
                                <option value="50" @if ($phanTrang == 50) selected="selected"  @endif>50</option>
                            </select>
                            <div class="dropDownSelect2">
                            </div>
                        </div>
                        <button class="au-btn-filter">
                            <i class="zmdi zmdi-filter-list"></i>Lọc</button>
                        <a class="au-btn-filter" href="{{Route('danhsachmonhoc')}}">
                            <i class="zmdi zmdi-filter-list"></i>Reset</a>
                    </div>
                    <div class="float-right au-form-icon--sm">
                            <input class="au-input--w300 au-input--style2" type="text" name="timkiem" placeholder="Tìm kiếm" @isset($timKiem) value={{$timKiem}} @endisset>
                            <button class="au-btn--submit2" type="submit" name="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                            @csrf
                    </div>
                </div>
                            
                <div class="table-responsive table-responsive-data2">
               
                    <div class="float-left">
                        <p class="pl-5">Có {{$count}} Kết Quả</p>
                    </div>
                    <div class="float-right">
                        {!! $monHoc->links() !!}
                    </div>
                    <table class="table table-borderless table-data3">
					    <thead>
					        <tr>
                            <th>Mã Môn Học @if($kieuSapXep==0)
										<button onclick="SapXepFunction(0,1)">
											<i class="fas fa-sort text-white ml-5"></i>
										</button>
										@else
										<button  onclick="SapXepFunction(0,0)">
											<i class="fas fa-sort text-white ml-5"></i>
											<button>
										@endif
									</th>
									<!-- Tên -->
									<th>Tên Môn Học @if($kieuSapXep==0)
										<button  onclick="SapXepFunction(1,1)">
											<i class="fas fa-sort  text-white ml-5"></i>
										</button>
										@else
										<button onclick="SapXepFunction(1,0)">
											<i class="fas fa-sort text-white ml-5"></i>
											<button>
										@endif
									</th>
					            <th>Chức Năng</th>
                            
					        </tr>
					    </thead>
					    <tbody>
                        @foreach($monHoc as $value)
					        <tr>
							    <td>{{$value->ma}}</td>
							    <td>{{$value->ten}}</td>
							    <td>
                                    <div class="table-data-feature">
                                    <a class="item" data-toggle="tooltip" data-placement="top" href="suamonhoc/{{$value["id"]}}" title="Sửa">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                    <button class="item" onclick="xoa({{$value->id}});return false;" data-toggle="tooltip" data-placement="top" title="Xóa">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                    </div>
                                </td>
							</tr>
                        @endforeach
					    </tbody>
					</table>
                    <div class="text-center mt-2">
                        {!! $monHoc->links() !!}
                    </div> 
                    <div class="card-footer" style="background: #f2f2f2;margin: auto;text-align: center;">
				        <div class="test" style="text-align:center;">
				            <a type="submit" class="btn btn-primary btn-sm" href="{{Route('themmonhoc')}}">
				                Thêm môn học
				            </a>
				            <a type="reset" class="btn btn-danger btn-sm" href="{{Route('danhsachmonhoc')}}">
				                Làm mới
				            </a>
				        </div>
				    </div>
        </form>                           
                </div>
            </div>
        </div>         
    </div>
</section>
<script>
	function SapXepFunction(tenTruong,kieuSapXep){
		$('#tenTruongSapXep').val(tenTruong);
		$('#kieuSapXep').val(kieuSapXep);
	}
    function xoa(id){
        if(confirm('Bạn muốn xóa không ?')){
            document.location.href="/xoamonhoc/"+id+"";
        }
    }
</script>
@endsection