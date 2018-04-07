@extends('Admin.Extend.index')

@section('admin-content')

<div class="agile-grids">
    <!-- tables -->
    <div class="agile-tables">
        <div class="w3l-table-info">
            <h2>Hợp đồng</h2>
            @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
            @endif
            <table id="table">
                <thead>
                    <tr>
                        <th>Tên hợp đồng</th>
                        <th>Ngày ký</th>
                        <th>Bắt đầu</th>
                        <th>Kết thúc</th>
                        <th>Loại hợp đồng</th>
                        <th>Khách hàng</th>
                        <th>Nhân viên quản lý</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contracts as $contract)
                    <tr>
                        <td><span class="bt-content">{{$contract->name}}</span></td>
                        <td><span class="bt-content">{{ date("d/m/Y", strtotime($contract->date_of_contract)) }}</span></td>
                        <td><span class="bt-content">{{ date("d/m/Y", strtotime($contract->start_from)) }}</span></td>
                        <td><span class="bt-content">{{ date("d/m/Y", strtotime($contract->end_at)) }}</span></td>
                        <td><span class="bt-content">{{$contract->getContractType->name}}</span></td>
                        <td><span class="bt-content">{{$contract->getClient->name}}</span></td>
                        <td><span class="bt-content">{{$contract->getStaffManagement->name}}</span></td>
                        <td><span class="bt-content"><a href="admin/contract/{{$contract->id}}/edit">Sửa</a></span></td>
                        <td><span class="bt-content"><a class="btn-delete" href="admin/contract/{{$contract->id}}">Xóa</a></span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection