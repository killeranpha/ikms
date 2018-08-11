@extends('layout.index')

@section('content')
<section class="p-t-20">
<div class="main-content">
	<H1 style="margin-top: -101px;text-align:  center;font-family: Times New Roman;">ĐÁNH GIÁ TASK</H1>
    <div class="section__content section__content--p30">
        <div class="container">
            <div class="row m-t-30">
                <div class="col-md-12">
                	<h3 class="title-5 m-b-35">Cơ bản về PHP</h3>
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table table-bordered text-center">

                            <thead class="thead-dark">
                                <tr>
                                    <th>Task</th>
                                    <th>Tiêu đề</th>
                                    <th>Mục tiêu</th>
                                    <th>Mức độ</th>
                                    <th>Xác nhận</th>
                                </tr>
                            </thead>
                            <tbody>
                                <div class="form-group">
                                    <tr>
                                        <td>1</td>
                                        <td>PHP là gì</td>
                                        <td>Hiểu được PHP là gì?</td>
                                        <td>
                                            <div class="form-check-inline form-check">
                                                <label>
                                                    <input type="radio" name="inline-radios" value="1" class="form-check-input">Làm tốt
                                                </label>
                                                <label>
                                                    <input type="radio" name="inline-radios" value="2" class="form-check-input">Làm được
                                                </label>
                                                <label>
                                                    <input type="radio" name="inline-radios" value="3" class="form-check-input">Chưa được
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                        	<button type="submit" class="btn btn-primary btn-sm">
    							                Gửi
    							            </button>
                                        </td>
                                    </tr>
                                </div>
                                <div class="form-group">
                                    <tr>
                                        <td>1</td>
                                        <td>PHP là gì</td>
                                        <td>Hiểu được PHP là gì?</td>
                                        <td>
                                            <div class="form-check-inline form-check">
                                                <label>
                                                    <input type="radio" name="inline-radios-1" value="4" class="form-check-input">Làm tốt
                                                </label>
                                                <label>
                                                    <input type="radio" name="inline-radios-1" value="5" class="form-check-input">Làm được
                                                </label>
                                                <label>
                                                    <input type="radio" name="inline-radios-1" value="6" class="form-check-input">Chưa được
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                Gửi
                                            </button>
                                        </td>
                                    </tr>
                                </div>
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection