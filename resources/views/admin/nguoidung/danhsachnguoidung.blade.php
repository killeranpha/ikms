@extends('admin.layout.index')

@section('content')

            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Danh sách người dùng</h3>
                            
                            <div class="table-data__tool">
                                <div class="filters m-b-45">
                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">Tất cả</option>
                                                <option value="">User</option>
                                                <option value="">VIP</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                            <select class="js-select2 au-select-dark" name="time">
                                                <option selected="selected">Tất cả</option>
                                                <option value="">Tuần trước</option>
                                                <option value="">Hơn 1 tuần trước</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                            </div>
                            
                            <div class="table-responsive table-responsive-data2">
                                @include('admin.congcu.danhsachnguoidung.danhsachnguoidung')
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            @include('admin.congcu.phantrang')
@endsection