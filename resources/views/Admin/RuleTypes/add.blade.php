@extends('Admin.Extend.index')

@section('admin-content')

<!--inner block start here-->
<div class="inner-block">
    <div class="grid-form1">
        <h3>Loại điều khoản</h3> 
        @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                <form class="form-horizontal" action="admin/rule-types" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Loại điều khoản</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="focusedinput" name="name" placeholder="Nhập vào loại điều khoản">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Ghi chú</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" name="description" placeholder="Ghi chú/Mô tả">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Giảm giá</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control1" name="discount" placeholder="Đơn vị %">
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