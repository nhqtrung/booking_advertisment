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
                <form class="form-horizontal" action="admin/product-booking" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Băng hình</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="focusedinput" name="videotape" placeholder="Nhập vào băng hình">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Thời lượng</label>
                        <div class="col-sm-8">
                            <select class="form-control1" name="duration">
                                <option value="5">5s</option>
                                <option value="10">10s</option>
                                <option value="15">15s</option>
                                <option value="30">30s</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Điều khoản</label>
                        <div class="col-sm-8">
                            <select class="form-control1" name="rule_id">
                                @foreach($rules as $rule)
                                    <option value="{{$rule->id}}">{{$rule->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Nhân viên quản lý</label>
                        <div class="col-sm-8">
                            <select class="form-control1" name="staff_management">
                                @foreach($staffsManagement as $staffManagement)
                                    <option value="{{$staffManagement->id}}">{{$staffManagement->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Sản phẩm</label>
                        <div class="col-sm-8">
                            <select class="form-control1" name="product_id">
                                @foreach($products as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
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