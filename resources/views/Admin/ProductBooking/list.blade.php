@extends('Admin.Extend.index')

@section('admin-content')

<div class="agile-grids">
    <!-- tables -->
    <div class="agile-tables">
        <div class="w3l-table-info">
            <h2>Sẩn phẩm lên lịch</h2>
            @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
            @endif
            <table id="table">
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Điều khoản</th>
                        <th>Băng hình</th>
                        <th>Thời lượng</th>
                        <th>Bắt đầu</th>
                        <th>Kết thúc</th>
                        <th>Ghi chú</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productsBooking as $productBooking)
                    <tr>
                        <td><span class="bt-content">{{$productBooking->getProduct->name}}</span></td>
                        <td><span class="bt-content">{{$productBooking->getRule->name}}</span></td>
                        <td><span class="bt-content">{{$productBooking->videotape}}</span></td>
                        <td><span class="bt-content">{{$productBooking->duration}}s</span></td>
                        <td><span class="bt-content">{{ date("d/m/Y", strtotime($productBooking->start_from)) }}</span></td>
                        <td><span class="bt-content">{{ date("d/m/Y", strtotime($productBooking->end_at)) }}</span></td>
                        <td><span class="bt-content">{{$productBooking->desciption}}</span></td>
                        <td><span class="bt-content"><a href="admin/product-booking/{{$productBooking->id}}/edit">Sửa</a></span></td>
                        <td><span class="bt-content"><a class="btn-delete" href="admin/product-booking/{{$productBooking->id}}">Xóa</a></span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection