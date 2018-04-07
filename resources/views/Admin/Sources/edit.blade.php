@extends('Admin.Extend.index')

@section('admin-content')

<!--inner block start here-->
<div class="inner-block">
    <div class="grid-form1">
        <h3>Category</h3> @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                <form class="form-horizontal" action="admin/series/{{$sources->Video_detail->Series->id}}/episode/{{$sources->Video_detail->id}}/sources/edit/{{$sources->id}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Link</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="focusedinput" name="link" placeholder="Link" value="{{$sources->link}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Type</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="focusedinput" name="type" placeholder="Type" value="{{$sources->type}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Encode</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="focusedinput" name="encode" placeholder="Type" value="{{$sources->encode}}">
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