@extends('admin.layout.index')
 @section('content')
 	        <!-- Page Content -->
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
                        <form action="admin/sanpham/sua/{{$sanpham->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Mã Chủ Đề</label>
                                <select class="form-control" name="TenChuDe" id="TenChuDe">
                                    <option value="0">Chọn Chủ Đề</option>
                                   @foreach($chude as $cd)
                                    <option 
                                    @if($sanpham->chude->id == $cd->id)
                                        {{"selected"}}
                                    @endif

                                    value="{{$cd->id}}">{{$cd->TenChuDe}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mã Đơn Vị</label>
                                <select class="form-control" name="TenDonVi" id="TenDonVi"> 
                                <option value="0">Chọn Đơn Vị</option>
                                    @foreach($donvi as $dv)
                                    <option 
                                    @if($sanpham->donvi->id == $dv->id)
                                        {{"selected"}}
                                    @endif
                                    value="{{$dv->id}}">{{$dv->TenDonVi}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mã Kiểu Dáng</label>
                                <select class="form-control" name="TenKD" id="TenKD">
                                <option value="0">Chọn Kiểu Dáng</option>
                                    @foreach($kieudang as $kd)
                                    <option 
                                    @if($sanpham->kieudang->id == $kd->id)
                                        {{"selected"}}
                                    @endif
                                    value="{{$kd->id}}">{{$kd->TenKD}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mã khuyến Mãi</label>
                                <select class="form-control" name="TenKM" id="TenKM">
                                <option value="0">Chọn Khuyến mãi</option>
                                    @foreach($khuyenmai as $km)
                                    <option
                                    @if($sanpham->khuyenmai->id == $km->id)
                                        {{"selected"}}
                                    @endif     
                                    value="{{$km->id}}">{{$km->TenKM}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên Sản Phẩm</label>
                                <input class="form-control" name="TenSP" value="{{$sanpham->TenSP}}" />
                            </div>
                            <div class="form-group">
                                <label>Ý Tưởng</label>
                                <textarea name="Y_Tuong" id="demo" class="form-control ckeditor" rows="3" >{{$sanpham->Y_Tuong}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Mô Tả</label>
                                <textarea name="Mota" id="demo" class="form-control ckeditor" rows="5" >{{$sanpham->Mota}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <p><img src="home-page/image/product/{{$sanpham->Hinh}}" width="300px" height="360px"></p>
                                <input type="file" name="Hinh" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="Gia" value="{{$sanpham->Gia}}" />
                            </div>
                            <div class="form-group">
                                <label>Giá khuyến mãi</label>
                                <input class="form-control" name="Gia_KM" value="{{$sanpham->Gia_KM}}" />
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
                            <button type="submit" class="btn btn-default">Sửa Sản Phẩm</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bình luận
                            <small>Danh sách</small>
                        </h1>
                        @if(session('thongbao'))
                                <div class="alert alert-success">
                                    {{session('thongbao')}}
                                </div>
                            @endif
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Người dùng</th>
                                <th>Nội dung</th>
                                <th>Ngày đăng</th>
                                <th>Deletes</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sanpham->comment as $cm)
                            <tr class="odd gradeX" align="center">
                                <td>{{$cm->id}}</td>
                                <td>{{$cm->user->name}}</td>
                                <td>{{$cm->NoiDung}}</td>
                                <td>{{$cm->created_at}}</td>
                                
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/comment/xoa/{{$cm->id}}/{{$sanpham->id}}"> Delete</a></td>
                            
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- end row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection
@section('script')

    <script type="text/javascript" language="javascript" src="admin_asset/ckeditor/ckeditor.js" ></script>
@endsection