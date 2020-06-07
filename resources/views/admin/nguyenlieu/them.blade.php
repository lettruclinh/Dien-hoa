@extends('admin.layout.index')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nguyên Liệu
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Mã Nguyên Liệu</label>
                                <input class="form-control" name="txtidNL" placeholder="auto" />
                            </div>
                            <div class="form-group">
                                <label>Tên Nguyên Liệu</label>
                                <input class="form-control" name="txtNameNL" placeholder="Please Enter Name" />
                            </div>
                            <div class="form-group">
                                <label>Kích Thước</label>
                                <input class="form-control" name="txtKiThuoc" placeholder="Please Enter Name" />
                            </div>
                            <div class="form-group">
                                <label>Chất Liệu</label>
                                <input class="form-control" name="txtChatLieu" placeholder="Please Enter Name" />
                            </div>
                            <div class="form-group">
                                <label>Màu Sắc</label>
                                    <select class="form-control">
                                        <option value="0">Please Choose Color</option>
                                        <option value="1">Đỏ</option>
                                        <option value="2">Cam</option>
                                        <option value="3">Vàng</option>
                                        <option value="4">Lục</option>
                                        <option value="5">Lam</option>
                                        <option value="6">Chàm</option>
                                        <option value="7">Tím</option>
                                        <option value="8">Trắng</option>
                                        <option value="9">Đen</option>
                                        <option value="10">Hồng</option>
                                        <option value="11">Không</option>
                                    </select>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm Nguyên Liệu</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection