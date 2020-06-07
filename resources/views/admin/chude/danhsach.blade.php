@extends('admin.layout.index')  
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Chủ đề
                            <small>Danh Sách</small>
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
                                <th>Mã CD</th>
                                <th>Tên Chủ Đề</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($chude as $cde)
                            <tr class="odd gradeX" align="center">
                                <td>{{$cde->id}}</td>
                                <td>{{$cde->TenChuDe}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/chude/xoa/{{$cde->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/chude/sua/{{$cde->id}}">Edit</a></td>
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