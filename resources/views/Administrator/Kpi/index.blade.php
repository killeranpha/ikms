@extends('layout.index') @section('content')
<form>
    <input type="hidden" name="tenTruongSapXep" id="tenTruongSapXep">
	<input type="hidden" name="kieuSapXep" id="kieuSapXep">
    <div class="container">
        <!-- title -->
        <div class="card-header" style="text-align:center;margin-bottom:40px">
            <strong>DANH SÁCH KPI</strong>
        </div>
        <!-- end title -->
        <!-- search,loc -->
        <div class="table-responsive m-b-40" style="margin: 0px">
            <div class="table-data__tool" style="margin-bottom: 20px;">
                <!-- part left -->
                <div class="table-data__tool-left">
                    <div class="rs-select2--light rs-select2--sm">
                        <select class="js-select2" name="hienThi">
                            <option value="5" selected="selected">Hiển thị</option>
                            <option value="10" @if($hienThi==10 ) {{ ' selected = "selected" ' }} @endif>10</option>
                            <option value="20" @if($hienThi==22 ) {{ ' selected = "selected" ' }} @endif>20</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <button class="au-btn-filter mr-2">
                    <i class="far fa-thumbs-up"></i>Chấp nhận</button>
                    <a class="au-btn-filter" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fas fa-search"></i>Tìm kiếm
                    </a>
                </div>
                <!-- End part left -->

                <!-- part right -->
                <div class="table-data__tool-right">
                    <a class="au-btn-filter" href="/danhsachkpi">
                        <i class="fas fa-sync"></i>Reset
                    </a>
                </div>
                <!-- end part right -->
            </div>
        </div>
        <!-- end search,loc -->
         <!-- Hiển thị tìm kiếm -->
         <div id="collapseExample" class="collapse">
            <table style="margin-bottom:20px">
                <tr align="center">
                    <td></td>
                    <td colspan="2">
                        <h3>TÌM KIẾM</h3>
                    </td>
                </tr>
                <tr align="center">
                    <td>Tên KPI : </td>
                    <td>
                        <input name='ten' @if($ten !='' ) value='{{$ten}}' @endif style="margin: 10px;" class="au-input--w300 au-input--style2"
                        type="text" placeholder="Tên khóa">
                    </td>
                </tr>
                <tr align="center">
                    <td>Mã : </td>
                    <td>
                        <input name='ma' @if($ma !='' ) value='{{$ma}}' @endif style="margin: 10px;" class="au-input--w300 au-input--style2"
                        type="text" placeholder="Mã">
                    </td>
                </tr>
                <tr align="center">
                    <td></td>
                    <td>
                        <button class="au-btn-filter">Tìm kiếm</button>
                    </td>
                </tr>
            </table>
        </div>
        <!-- End hiển thị tìm kiếm -->
        <div class="table-data__tool-left">
            <span>Có {{$countDanhSach}} kết quả</span>
        </div>
        <!-- start table -->
        <table class="table table-bordered">
            <thead class="thead-dark" align=center>
                <tr>
                <th scope="col">Thứ tự
                    @if($kieuSapXep == 1)
                    <button onclick="SapXepFunction(0,0)">
                        <i class="fa fa-sort text-white ml-3"></i>
                    </button>
                    @else
                    <button onclick="SapXepFunction(0,1)">
                        <i class="fa fa-sort text-white ml-3"></i>
                    </button>
                    @endif
                </th>
                <th scope="col">Tên KPI
                    @if($kieuSapXep == 1)
                    <button onclick="SapXepFunction(0,0)">
                        <i class="fa fa-sort text-white ml-3"></i>
                    </button>
                    @else
                    <button onclick="SapXepFunction(0,1)">
                        <i class="fa fa-sort text-white ml-3"></i>
                    </button>
                    @endif
                </th>
                <th scope="col">MÃ</th>
                <th scope="col">Nhóm KPI</th>
                </tr>
            </thead>
            <tbody align=center> 
                @foreach($danhSach as $value)
                    <div class="form-group">
                        <tr>
                            <td>{{$value->thuTu}}</td>
                            <td>{{$value->ten}}</td>
                            <td>{{$value->ma}}</td>
                            <td>{{$value->nhomKpi}}</td>
                            <td>
                                <div class="table-data-feature text-center" style="justify-content: center;">
                                    <a class="item" data-toggle="tooltip" data-placement="top" href="" title="Sửa">
                                        <i class="fas fa-pencil-alt"></i></a>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Xóa" name="idXoa" value="">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </div>
                @endforeach
                </tbody>
        </table>
        <!-- end table -->
        <!-- phân trang -->
        <div class="text-center">
            <div class="pagination">
                <ul class="pagination-list">
                    {{$danhSach->appends(Request::only('hienThi','tenTruongSapXep','kieuSapXep'))->links()}}
                </ul>
            </div>
        </div>
        <!-- end phân trang -->
    </div>
</form>
<script>
	function SapXepFunction(tenTruongSapXep, kieuSapXep) {
		$('#tenTruongSapXep').val(tenTruongSapXep);
		$('#kieuSapXep').val(kieuSapXep);
	}
</script>
@endsection