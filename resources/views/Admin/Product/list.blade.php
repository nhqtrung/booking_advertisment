@extends('Admin.Extend.index')

@section('admin-content')

<div class="agile-grids">
    <!-- tables -->
    <div class="agile-tables">
        <div class="w3l-table-info">
            <h2>Danh sách sản phẩm</h2>
            <table id="table">
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Ghi chú</th>
                        <th>Danh mục</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td><span class="bt-content">{{$product->name}}</span></td>
                        <td><span class="bt-content">{{$product->description}}</span></td>
                        <td><span class="bt-content">{{$product->getCategory->name}}</span></td>
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