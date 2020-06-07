    
@extends('admin.layout.index')  
@section('content')
            <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản Phẩm
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID SP</th>
                                <th>ID CD</th>
                                <th>ID ĐV</th>
                                <th>ID KD</th>
                                <th>ID KM</th>
                                <th>Tên SP</th>
                                <th>Ý Tưởng</th>
                                <th>Mô Tả</th>
                                <th>Hình</th>
                                <th>Giá</th>
                                <th>Giá KM</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($sanpham as $sp)
                            <tr class="odd gradeX" align="center">
                            <td>{{$sp->id}}</td>
                            <td>{{$sp->idCD}}</td>
                            <td>{{$sp->idDV}}</td>
                            <td>{{$sp->idKD}}</td>
                            <td>{{$sp->idKM}}</td>
                            <td>{{$sp->TenSP}}</td>
                            <td >{{$sp->Y_Tuong}}</td>
                            <td>{{$sp->Mota}}</td>
                                <td>
                                    <img width="200px" height="300px" src="home-page/image/product/{{$sp->Hinh}}">
                                </td>
                                <td>{{$sp->Gia}}</td>
                                <td>{{$sp->Gia_KM}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sanpham/xoa/{{$sp->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/sanpham/sua/{{$sp->id}}">Edit</a></td>
                            </tr>
                            @endforeach    
                            <!--
                            <tr class="even gradeC" align="center">
                                <td>2</td>
                                <td>Áo Thun Polo</td>
                                <td>250.000 VNĐ</td>
                                <td>1 Hours Age</td>
                                <td>Ẩn</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            -->
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection