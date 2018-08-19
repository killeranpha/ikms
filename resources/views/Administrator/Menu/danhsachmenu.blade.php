@extends('layout.index')

@section('content')
<section class="p-t-20">
<div class="main-content">
	<H1 style="margin-top: -101px;text-align:  center;font-family: Times New Roman;">DANH SÁCH MENU</H1>
    <div class="section__content section__content--p30">
        <div class="">
            <div class="row m-t-30">
                <div class="col-md-12">
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="rs-select2--light rs-select2--md">
                                <select class="js-select2" name="property">
                                    <option selected="selected">Sắp xếp</option>
                                    <option value="">Theo Thứ Tự</option>
                                    <option value="">29CHM</option>
                                    <option value="">29CHS</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <div class="rs-select2--light rs-select2--md">
                                <select class="js-select2" name="property">
                                    <option selected="selected">Chọn buổi</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <button class="au-btn-filter">
                                <i class="zmdi zmdi-filter-list"></i>OK</button>
                        </div>
                        
                            <input class="au-input--w300 au-input--style2" type="text" placeholder="Tìm kiếm">
                            <button class="au-btn--submit2" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        
                    </div>
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table table-bordered">
                            <thead class="thead-dark" style="color: white;background: #34363a;">
                                <tr>
                                    <th></th>
                                    <th>Tên</th>
                                    <th>URL</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($danhSach as $menu)
                                <div class="form-group">
                                    <tr style="background: #fff;">
                                        <td class="text-center" style="    width: 77px;">
                                            @if($menu->level == 1)
                                                <i class="zmdi zmdi-fast-forward"></i>
                                            @endif
                                        </td>
                                        <td>
                                        
                                            @if($menu->level != 1)
                                            <?= str_repeat('|----|',$menu->level)?>
                                            @else
                                            <?= str_repeat('|----',$menu->level)?>
                                            @endif
                                            {{$menu->ten}}
                                            
                                        </td>
                                        <td style="text-align:  center;">{{$menu->url}}</td>
                                        <td>
                                        
                                            <div class="table-data-feature text-center">
                                            
                                                <a href="suamenu/{{$menu->id}}" class="item" data-toggle="tooltip" data-placement="top" title="Sửa">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                                <button onclick="xoa({{$menu->id}});return false;" class="item" data-toggle="tooltip" data-placement="top" title="Xóa">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                            </div>
                                    
                                        </td>
                                    </tr>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="card-footer" style="background: #f2f2f2;margin: auto;text-align: center;margin-top: 15px;">
				        	<div class="test" style="text-align:center;">
				            <button type="submit" class="btn btn-primary btn-sm">
				                Thêm sinh viên
				            </button>
				            <button type="reset" class="btn btn-danger btn-sm">
				                Làm mới
				            </button>
				        	</div>
				        </div>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<script>
    function xoa(id){
        if(confirm('Bạn muốn xóa không ?')){
            document.location.href="xoamenu/"+id+"";
        }
    }
</script>
@endsection