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
                <form class="form-horizontal" action="admin/time-booking" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Time Slot</label>
                        <div class="col-sm-8">
                            <select class="form-control1" name="time_slot">
                                <option value="8h-9h30">8h-9h30</option>
                                <option value="9h30-10h30">9h30-10h30</option>
                                <option value="10h30-11h">10h30-11h</option>
                                <option value="11h-12h">11h-12h</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Mã quảng cáo</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="focusedinput" name="ad_code" placeholder="Nhập vào mã quảng cáo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Gross/Net</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="focusedinput" name="gorss/net" placeholder="Gross/Net">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Ưu tiên</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="focusedinput" name="priority" placeholder="Ưu tiên">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Sản phẩm</label>
                        <div class="col-sm-8">
                            <select class="form-control1" name="product_booking_id">
                                @foreach($productsBooking as $productBooking)
                                    <option value="{{$productBooking->id}}">{{$productBooking->getProduct->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-primary" value="Thêm">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--inner block end here-->

@endsection