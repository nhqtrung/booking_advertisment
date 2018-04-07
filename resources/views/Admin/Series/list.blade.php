@extends('Admin.Extend.index')

@section('admin-content')

<div class="agile-grids">
    <!-- tables -->
    <div class="agile-tables">
        <div class="w3l-table-info">
            <h2>Series</h2>
            <table id="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Total Episode</th>
                        <th>Content</th>
                        <th>SubCategory</th>
                        <th>Detail</th>
                        <th>Thumbnail</th>
                        <th>Cover</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listSeries as $series)
                    <tr>
                        <td data-th="Name"><span class="bt-content"><a href="{{$series->Subcategory->Category->slug}}/{{$series->Subcategory->slug}}/{{$series->slug}}">{{$series->name}}</a></span></td>
                        <td data-th="Total Episode"><span class="bt-content">{{$series->total_episode}}</span></td>
                        <td data-th="Content"><span class="bt-content">{{$series->content}}</span></td>
                        <td data-th="SubCategory"><span class="bt-content">{{$series->Subcategory->name}}</span></td>
                        <td data-th="Detail"><span class="bt-content"><a href="admin/series/{{$series->id}}/episode">Detail</a></span></td>
                        <td data-th="Thumbnail"><span class="bt-content"><a href="{{$series->getPathImg('thumbnail')}}">{{$series->thumbnail}}</a></span></td>
                        <td data-th="Cover"><span class="bt-content"><a href="{{$series->getPathImg('cover')}}">{{$series->cover}}</a></span></td>
                        <td data-th="Edit"><span class="bt-content"><a href="admin/series/edit/{{$series->id}}">Edit</a></span></td>
                        <td data-th="Delete"><span class="bt-content"><a href="admin/series/delete/{{$series->id}}">Delete</a></span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection