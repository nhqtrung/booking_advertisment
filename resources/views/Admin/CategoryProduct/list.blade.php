@extends('Admin.Extend.index')

@section('admin-content')

<div class="agile-grids">
    <!-- tables -->
    <div class="agile-tables">
        <div class="w3l-table-info">
            <h2>Danh mục sản phẩm</h2>
            <table id="table">
                <thead>
                    <tr>
                        <th>Danh mục</th>
                        <th>Ghi Chú</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categoriesProduct as $categoryProduct)
                    <tr>
                        <td><span class="bt-content">{{$categoryProduct->name}}</span></td>
                        <td><span class="bt-content">{{$categoryProduct->description}}</span></td>
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