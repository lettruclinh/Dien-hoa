@extends('admin.layout.index')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">KHÁCH HÀNG
                            <small>DANH SÁCH</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên Khách Hàng</th>
                                <th>Ngày Sinh</th>
                                <th>SĐT</th>
                                <th>Địa Chỉ</th>
                                <th>E-mail</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($kh as $k)
                            <tr class="odd gradeX" align="center">
                                <td>{{$k->id}}</td>
                                <td>{{$k->HoTen}}</td>
                                <td>{{$k->NgaySinh}}</td>
                                <td>{{$k->SDT}}</td>
                                <td>{{$k->DiaChi}}</td>
                                <td>{{$k->Mail}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/khachhang/xoa/{{$k->id}}"> Xóa</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection