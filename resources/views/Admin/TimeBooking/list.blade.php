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
                        <th>Time Slot</th>
                        <th>AdCode</th>
                        <th>Gross/Net</th>
                        <th>Ưu tiên</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($timeBooking as $time)
                    <tr>
                        <td><span class="bt-content">{{$time->time_slot}}</span></td>
                        <td><span class="bt-content">{{$time->ad_code}}</span></td>
                        <td><span class="bt-content">{{$time->priority}}</span></td>
                        <td><span class="bt-content"><a href="admin/time-booking/{{$time->id}}/edit">Sửa</a></span></td>
                        <td><span class="bt-content"><a class="btn-delete" href="admin/time-booking/{{$time->id}}">Xóa</a></span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection