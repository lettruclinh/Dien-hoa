@extends('admin.layout.index')  
@section('content')
	        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Lô Hàng
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Mã Lô Hàng</label>
                                <input class="form-control" name="txtidCD" placeholder="auto" />
                            </div>
                            <div class="form-group">
                                <label>Ngày Nhập</label>
                                <input class="form-control" name="txtNgNhap" type="date" />
                            </div>
                            <div class="form-group">
                                <label>Ngày Sản Xuất</label>
                                <input class="form-control" name="txtNSX" type="date" />
                            </div>
                            <div class="form-group">
                                <label>Hạn Sử Dụng</label>
                                <input class="form-control" name="txtHSD" type="date" />
                            </div>
                            <button type="submit" class="btn btn-default">Thêm Lô Hàng</button>
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