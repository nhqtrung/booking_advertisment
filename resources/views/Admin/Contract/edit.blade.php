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
                <form class="form-horizontal" action="admin/contract/{{$contract->id}}" method="POST">
                    {{csrf_field()}}
                    @method('PUT')
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Hợp đồng</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="focusedinput" name="name" placeholder="Nhập vào tên hợp đồng" value="{{$contract->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Khách hàng</label>
                        <div class="col-sm-8">
                            <select class="form-control1" name="client_id">
                                @foreach($clients as $client)
                                    <option value="{{$client->id}}"
                                        @if($client->id === $contract->client_id)
                                            selected="selected"
                                        @endif
                                    >{{$client->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Nhân viên quản lý</label>
                        <div class="col-sm-8">
                            <select class="form-control1" name="staff_management">
                                @foreach($staffManagements as $staff)
                                    <option value="{{$staff->id}}"
                                        @if($staff->id === $contract->staff_management)
                                            selected="selected"
                                        @endif
                                    >{{$staff->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Loại hợp đồng</label>
                        <div class="col-sm-8">
                            <select class="form-control1" name="contract_type">
                                @foreach($contractTypes as $contractType)
                                    <option value="{{$contractType->id}}"
                                        @if($contractType->id === $contract->contract_type)
                                            selected="selected"
                                        @endif    
                                    >{{$contractType->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Ngày ký</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control1" name="date_of_contract" value="{{$contract->date_of_contract}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Từ ngày</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control1" name="start_from" value="{{$contract->start_from}}">
                        </div>                        
                        <label for="focusedinput" class="col-sm-2 control-label">Đến ngày</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control1" name="end_at" value="{{$contract->end_at}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-primary" value="Sửa">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--inner block end here-->

@endsection