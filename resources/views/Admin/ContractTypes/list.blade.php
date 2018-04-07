@extends('Admin.Extend.index')

@section('admin-content')

<div class="agile-grids">
    <!-- tables -->
    <div class="agile-tables">
        <div class="w3l-table-info">
            <h2>Danh sách loại hợp đồng</h2>
            <table id="table">
                <thead>
                    <tr>
                        <th>Loại hợp đồng</th>
                        <th>Ghi Chú</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contractTypes as $contractType)
                    <tr>
                        <td><span class="bt-content">{{$contractType->name}}</span></td>
                        <td><span class="bt-content">{{$contractType->description}}</span></td>
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