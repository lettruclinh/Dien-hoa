@extends('admin.layout.index')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Đơn Hàng
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Ngày Lập</th>
                                <td>Lời nhắn</td>
                                <th>Giờ giao</th>
                                <th>Ngày giao</th>
                                <th>Địa Chỉ</th>
                                <th>Khách hàng</th>
                                <th>Hình thức thanh toán</th>
                                <th>Tổng</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($order as $or)
                            <tr class="odd gradeX" align="center">
                                <td>{{$or->id}}</td>
                                <td>{{$or->NgLap}}</td>
                                <td>{{$or->Loinhan_chuc}}</td>
                                <td>{{$or->GioGiao}}</td>
                                <td>{{$or->NgayGiao}}</td>
                                <td>{{$or->DChi}}</td>
                                <td>{{$or->khachhang->HoTen}}</td>
                                <td>{{$or->hinhthucthanhtoan->tenHTTT}}</td>
                                <td>{{$or->Tong}}</td>
                           <!--     <td>
                                    <select class="form-control">
                                        <option value="0">Chờ xác nhận</option>
                                        <option value="">Đã chấp nhận</option>
                                        <option value="">Đang giao</option>
                                        <option value="">Hoàn thành</option>
                                        <option value="">Hủy</option>
                                        <option value="">Hoàn tiền</option>
                                    </select>
                                </td>  -->
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="'admin/donhang/sua/{{$or->id}}'"> Sửa</a></td>
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