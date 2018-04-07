@extends('Admin.Extend.index')

@section('admin-content')

<!--inner block start here-->
<div class="inner-block">
    <div class="grid-form1">
        <h3>Sub Category</h3> @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                <form class="form-horizontal" action="admin/subcate/edit/{{$subCategory->id}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="focusedinput" name="name" placeholder="Sub Category" value="{{$subCategory->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Category</label>
                        <div class="col-sm-8">
                            <select class="form-control1" name="idCategory">
                                @foreach($listCategory as $category)
                                    <option value="{{$category->id}}"
                                    @if($category->id == $subCategory->idCategory)
                                        selected="selected"
                                    @endif    
                                    >{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--inner block end here-->

@endsection