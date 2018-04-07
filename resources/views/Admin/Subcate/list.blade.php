@extends('Admin.Extend.index')

@section('admin-content')

<div class="agile-grids">
    <!-- tables -->
    <div class="agile-tables">
        <div class="w3l-table-info">
            <h2>Sub Category List</h2>
            <table id="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listSubcate as $subcate)
                    <tr>
                        <td data-th="Name"><span class="bt-content">{{$subcate->name}}</span></td>
                        <td data-th="Age"><span class="bt-content">{{$subcate->Category->name}}</span></td>
                        <td data-th="Gender"><span class="bt-content"><a href="admin/subcate/edit/{{$subcate->id}}">Edit</a></span></td>
                        <td data-th="Height"><span class="bt-content"><a href="admin/subcate/delete/{{$subcate->id}}">Delete</a></span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
