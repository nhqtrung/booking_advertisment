@extends('Admin.Extend.index')

@section('admin-content')

<!--inner block start here-->
<div class="inner-block">
    <div class="grid-form1">
        <h3>{{$Series->name}} : Episode {{$Episode->episode}}</h3> 
        @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                <form class="form-horizontal" action="admin/series/{{$Series->id}}/episode/edit/{{$Episode->id}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Episode</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="focusedinput" name="episode" placeholder="Episode" value="{{$Episode->episode}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Duration</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="focusedinput" name="duration" placeholder="Duration" value="{{$Episode->duration}}">
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