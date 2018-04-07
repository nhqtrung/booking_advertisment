@extends('Admin.Extend.index')

@section('admin-content')

<div class="agile-grids">
    <!-- tables -->
    <div class="agile-tables">
        <div class="w3l-table-info">
            <h2>{{ $Episode->Series->name }} : {{ $Episode->episode }}</h2>
            <table id="table">
                <thead>
                    <tr>
                        <th>Link</th>
                        <th>Type</th>
                        <th>Encode</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Episode->Sources as $source)
                    <tr>
                        <td data-th="Name"><span class="bt-content">{{$source->link}}</span></td>
                        <td data-th="Slug"><span class="bt-content">{{$source->type}}</span></td>
                        <td data-th="Source"><span class="bt-content">{{$source->encode}}</span></td>
                        <td data-th="Edit"><span class="bt-content"><a href="admin/series/{{ $Episode->Series->id }}/episode/{{ $Episode->id }}/sources/edit/{{$source->id}}">Edit</a></span></td>
                        <td data-th="Delete"><span class="bt-content"><a href="admin/series/{{ $Episode->Series->id }}/episode/{{ $Episode->id }}/sources/delete/{{$source->id}}">Delete</a></span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection