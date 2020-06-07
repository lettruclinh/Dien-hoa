@extends('admin.layout.index')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">KHÁCH HÀNG
                            <small>THÊM</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Tên Khách Hàng</label>
                                <input class="form-control" name="txtTên Khách Hàng" placeholder="Vui lòng nhập User" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="txtPass" placeholder="Vui lòng nhập Password" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="txtEmail" placeholder="Vui lòng nhập Email" />
                            </div>
                            <div class="form-group">
                                <label>Số Điện thoại</label>
                                <input type="email" class="form-control" name="txtSố Điện thoại" />
                            </label>
                            </div>
                            <div class="form-group">
                                <label>Địa Chỉ</label>
                                <input type="email" class="form-control" name="txtĐịa Chỉ" />
                            </label>
                        </div>
                            <div class="form-group">
                                <label>Quyền</label>
                                <label class="radio-inline">
                                    <input name="rdoLevel" value="1" checked="" type="radio">Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoLevel" value="2" type="radio">Member
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">User Thêm</button>
                            <button type="reset" class="btn btn-default">Quay Lại</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection