@extends('Admin.Extend.index')

@section('admin-content')

<!--inner block start here-->
<div class="inner-block">
    <div class="grid-form1">
        <h3>Contracts</h3> 
        @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                <form class="form-horizontal" action="admin/rule" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="status" value="0">
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Điều khoản</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="focusedinput" name="name" placeholder="Nhập vào tên điều khoản">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Hợp đồng</label>
                        <div class="col-sm-8">
                            <select class="form-control1" name="contract_id">
                                @foreach($contracts as $contract)
                                    <option value="{{$contract->id}}">{{$contract->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Loại điều khoản</label>
                        <div class="col-sm-8">
                            <select class="form-control1" name="rule_type">
                                @foreach($ruleTypes as $ruleType)
                                    <option value="{{$ruleType->id}}">{{$ruleType->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Từ ngày</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control1" name="start_from">
                        </div>                        
                        <label for="focusedinput" class="col-sm-2 control-label">Đến ngày</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control1" name="end_at">
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