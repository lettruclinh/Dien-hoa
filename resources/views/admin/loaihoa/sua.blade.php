@extends('admin.layout.index')
@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại Hoa
                            <small>{{$loaihoa->tenLHoa}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/loaihoa/sua/{{$loaihoa->id}}" method="POST">
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
                                <label>Tên Loại Hoa</label>
                                <input class="form-control" name="tenLHoa" placeholder="Please Enter Name" />
                            </div>
                            <div class="form-group">
                                <label>Màu sắc</label>
                                <input class="form-control" name="Mausac" placeholder="Please Enter Name" />
                            </div>
                       <button type="submit" class="btn btn-default">Sửa Loại Hoa</button>
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