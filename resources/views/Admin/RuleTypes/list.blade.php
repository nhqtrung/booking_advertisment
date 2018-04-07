@extends('Admin.Extend.index')

@section('admin-content')

<div class="agile-grids">
    <!-- tables -->
    <div class="agile-tables">
        <div class="w3l-table-info">
            <h2>Danh sách loại điều khoản</h2>
            <table id="table">
                <thead>
                    <tr>
                        <th>Loại điều khoản</th>
                        <th>Ghi Chú</th>
                        <th>Giảm giá</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ruleTypes as $ruleType)
                    <tr>
                        <td><span class="bt-content">{{$ruleType->name}}</span></td>
                        <td><span class="bt-content">{{$ruleType->description}}</span></td>
                        <td><span class="bt-content">{{$ruleType->discount}} %</span></td>
                        <td><span class="bt-content"><a href="#">Edit</a></span></td>
                        <td><span class="bt-content"><a href="#">Delete</a></span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection