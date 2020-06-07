@extends('admin.layout.index')
@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">THÔNG TIN KHUYẾN MÃI
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên khuyến mãi</th>
                                <th>Mô tả</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($khuyenmai as $km)
                         <tr class="odd gradeX" align="center">
                                <td>{{$km->id}}</td>
                                <td>{{$km->TenKM}}</td>
                                <td>{{$km->Mota}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/khuyenmai/xoa/{{$km->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/khuyenmai/sua/{{$km->id}}"> Edit</a></td>
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