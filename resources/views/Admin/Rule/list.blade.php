@extends('Admin.Extend.index')

@section('admin-content')

<div class="agile-grids">
    <!-- tables -->
    <div class="agile-tables">
        <div class="w3l-table-info">
            <h2>Điều khoản</h2>
            @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
            @endif
            <table id="table">
                <thead>
                    <tr>
                        <th>Tên điều khoản</th>
                        <th>Bắt đầu</th>
                        <th>Kết thúc</th>
                        <th>Trạng thái</th>
                        <th>Loại điều khoản</th>
                        <th>Hợp đồng</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rules as $rule)
                    <tr>
                        <td><span class="bt-content">{{$rule->name}}</span></td>
                        <td><span class="bt-content">{{ date("d/m/Y", strtotime($rule->start_from)) }}</span></td>
                        <td><span class="bt-content">{{ date("d/m/Y", strtotime($rule->end_at)) }}</span></td>
                        <td><span class="bt-content">{{$rule->status}}</span></td>
                        <td><span class="bt-content">{{$rule->getRuleType->name}}</span></td>
                        <td><span class="bt-content">{{$rule->getContract->name}}</span></td>
                        <td><span class="bt-content"><a href="admin/contract/{{$rule->id}}/edit">Sửa</a></span></td>
                        <td><span class="bt-content"><a class="btn-delete" href="admin/rule/{{$rule->id}}">Xóa</a></span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection