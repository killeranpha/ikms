@extends('admin.layout.index')

@section('content')
<section class="p-t-20">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="admin.layout.taomoi">
                                            <h3 class="title-5 m-b-35">Gần đây</h3>
                                            <div class="table-data__tool">
                                                @include('admin.congcu.selectleft')
                                                @include('admin.congcu.selectright')
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="col-md-12">
                                <div class="table-responsive m-b-40">
                                    @include('admin.congcu.danhsach.ganday')
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                            @include('admin.congcu.phantrang')
@endsection