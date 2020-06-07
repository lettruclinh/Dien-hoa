@extends('admin.layout.index')
@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">THÔNG TIN VẬN CHUYỂN
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên Hình Thức Vận Chuyển</th>
                                <th>Phí Vận Chuyển</th>
                                <th>Phạm Vi</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($hinhthuc as $ht)
                         <tr class="odd gradeX" align="center">
                                <td>{{$ht->id}}</td>
                                <td>{{$ht->tenHTVC}}</td>
                                <td>{{$ht->phiVC}}</td>
                                <td>{{$ht->phamvi}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{'admin/vanchuyen/sua'}}"> Sửa</a></td>
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