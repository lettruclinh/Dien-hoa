@extends('admin.layout.index')  
@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">KHUYẾN MÃI
                            <small>{{$khuyenmai->TenKM}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="admin/khuyenmai/sua/{{$khuyenmai->id}}" method="POST">
                            @csrf
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
                            <div class="form-group">
                                <label>Tên Khuyến Mãi</label>
                                <input class="form-control" name="TenKM" placeholder="Please Enter Name" value="{{$khuyenmai->TenKM}}"/>
                            </div>
                            <div class="form-group">
                                <label>Mô Tả</label>
                                <textarea name="Mota" id="demo" class="form-control" rows="3">{{$khuyenmai->Mota}}</textarea>
                            </div>  
                            <button type="submit" class="btn btn-default">Sửa Khuyến Mãi</button>
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