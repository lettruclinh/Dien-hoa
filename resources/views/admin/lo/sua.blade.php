@extends('admin.layout.index')  
@section('content')
	
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản Phẩm
                            <small>Sửa</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Mã Sản Phẩm</label>
                                <input class="form-control" name="txtidSP" placeholder="Default_Don't Touch" />
                            </div>
                            <div class="form-group">
                                <label>Mã Chủ Đề</label>
                                <select class="form-control">
                                    <option value="0">Please Choose ID</option>
                                    <option value="">000</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mã Đơn Vị</label>
                                <select class="form-control">
                                    <option value="0">Please Choose ID</option>
                                    <option value="">111</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mã Kiểu Dáng</label>
                                <select class="form-control">
                                    <option value="0">Please Choose ID</option>
                                    <option value="">222</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên Sản Phẩm</label>
                                <input class="form-control" name="txtNameSP" placeholder="Please Enter Name" />
                            </div>
                            <div class="form-group">
                                <label>Mô Tả</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="txtPrice" placeholder="Please Enter Price" />
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" name="fImages">
                            </div>
                            <!--
                            <div class="form-group">
                                <label>Từ Khóa Sản Phẩm</label>
                                <input class="form-control" name="txtOrder" placeholder="Please Enter Category Keywords" />
                            </div>
                            -->
                            
                            <div class="form-group">
                                <label>Product Status</label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="1" checked="" type="radio">Hiện
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="2" type="radio">Ẩn
                                </label>
                            </div>
                            <button type="submit" class="{{'admin/sanpham/sua'}}">Sửa Sản Phẩm</button>
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