 @extends('admin.layout.index')
 @section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản Phẩm
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err }}<br>
                                @endforeach
                            </div>
                        @endif
                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <form action="admin/sanpham/them" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>Mã Chủ Đề</label>
                                <select class="form-control" name="TenChuDe" id="TenChuDe">
                                    <option value="0">Chọn Chủ Đề</option>
                                   @foreach($chude as $cd)
                                   <option value="{{$cd->id}}">{{$cd->TenChuDe}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mã Đơn Vị</label>
                                <select class="form-control" name="TenDonVi" id="TenDonVi"> 
                                <option value="0">Chọn Đơn Vị</option>
                                   @foreach($donvi as $dv)
                                   <option value="{{$dv->id}}">{{$dv->TenDonVi}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mã Kiểu Dáng</label>
                                <select class="form-control" name="TenKD" id="TenKD">
                                <option value="0">Chọn Kiểu Dáng</option>
                                   @foreach($kieudang as $kd)
                                   <option value="{{$kd->id}}">{{$kd->TenKD}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mã khuyến Mãi</label>
                                <select class="form-control" name="TenKM" id="TenKM">
                                <option value="0">Chọn Khuyến mãi</option>
                                   @foreach($khuyenmai as $km)
                                   <option value="{{$km->id}}">{{$km->TenKM}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên Sản Phẩm</label>
                                <input class="form-control" name="TenSP" placeholder="Please Enter Name" />
                            </div>
                            <div class="form-group">
                                <label>Ý Tưởng</label>
                                <textarea name="Y_Tuong" id="demo" class="form-control ckeditor" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Mô Tả</label>
                                <textarea name="Mota" id="demo" class="form-control ckeditor" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" name="Hinh" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="Gia" placeholder="Please Enter Price" />
                            </div>
                            <div class="form-group">
                                <label>Giá khuyến mãi</label>
                                <input class="form-control" name="Gia_KM" placeholder="Please Enter Price" />
                            </div>
                            <!--
                            <div class="form-group">
                                <label>Từ Khóa Sản Phẩm</label>
                                <input class="form-control" name="txtOrder" placeholder="Please Enter Category Keywords" />
                            </div>
                            -->
                            <div class="form-group">
                                <label>Nổi bật (Sản Phẩm Mới)</label>
                                <label class="radio-inline">
                                    <input name="New" value="0" checked="" type="radio">Không
                                </label>
                                <label class="radio-inline">
                                    <input name="New" value="1" type="radio">Có
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm Sản Phẩm</button>
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