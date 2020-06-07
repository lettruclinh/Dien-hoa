@extends('admin.layout.index')
@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thanh Lý
                            <small>Sửa - Phiếu thanh lý</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Mã Phiếu Thanh Lý</label>
                                <input class="form-control" name="txtidThanhLy" placeholder="auto" />
                            </div>
                            
                            <div class="form-group">
                                <label>Ngày Thanh Lý</label>
                                <input class="form-control" name="txtNgThanhLy" type="date" />
                            </div>
                            
                            <div class="form-group">
                                <label>Mã Lô</label>
                                <select class="form-control">
                                    <option value="0">Please Choose ID</option>
                                    <option value="">000</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mã Nguyên Liệu</label>
                                <select class="form-control">
                                    <option value="0">Please Choose ID</option>
                                    <option value="">111</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mã Loại Hoa</label>
                                <select class="form-control">
                                    <option value="0">Please Choose ID</option>
                                    <option value="">222</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Lý Do</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>                            
                            
                            <button type="submit" class="btn btn-default">Thêm Phiếu Thanh Lý</button>
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