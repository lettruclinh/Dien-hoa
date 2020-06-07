@extends('admin.layout.index')
@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">PHIẾU ĐẶT HÀNG
                            <small>Chỉnh sửa</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>ID Phiếu</label>
                                <input class="form-control" name="txtID Phiếu" />
                            </div>
                            <div class="form-group">
                                <label>Thời Gian Đặt</label>
                                <input class="form-control" name="txtPrice" placeholder="Vui lòng điền ngày/tháng/năm" />
                            </div>
                           <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="txtGiá" placeholder="vnđ" />
                            </div>
                            <div class="form-group">
                                <label>Lời Nhắn</label>
                                <textarea class="form-control" rows="3"></textarea> 
                            </div>
                            <div class="form-group">
                                <label>Địa Chỉ</label>
                                <input class="form-control" rows="3" name="txtĐịa chỉ" />
                            </div>
                            <div class="form-group">
                                <label>Ghi Chú</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Trạng Thái</label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="1" checked="" type="radio">Hiện
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="2" type="radio">Ẩn
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa Phiếu</button>
                            <button type="reset" class="btn btn-default">Cài Lại</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection