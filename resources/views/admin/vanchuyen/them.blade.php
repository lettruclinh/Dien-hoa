@extends('admin.layout.index')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">THÔNG TIN VẬN CHUYỂN
                            <small>THÊM</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>ID Vận Đơn</label>
                                <input class="form-control" name="txtID Vận Đơn" />
                            </div>
                            <div class="form-group">
                                <label>Hình Thức Thanh Toán</label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="1" checked="" type="radio">Giao Hàng Khi Nhận Tiền
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="2" type="radio">Chuyển Khoản
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Phí Vận Chuyển</label>
                                <input class="form-control" name="txtPhí Vận Chuyển" />
                            </div>
                            <div class="form-group">
                                <label>Đơn Vị Vận Chuyển</label>
                                <textarea class="form-control" name="txtĐơn Vị Vận Chuyển" ></textarea>
                            </div>
                            <div class="form-group">
                                <label>Phí Thu Hộ</label>
                               <input class="form-control" name="txtPhí Thu Hộ" placeholder="vnđ" />
                            </div>
                            <div class="form-group">
                                <label>Tổng Tiền Phải Trả</label>
                                <input class="form-control" name="txtTổng Tiền Phải Trả" placeholder="vnđ" />
                            </div>
                            <div class="form-group">
                                <label>Ghi Chú</label>
                                <textarea class="form-control" rows="3" name="Ghi Chú" ></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">THÊM</button>
                            <button type="reset" class="btn btn-default">HỦY</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection