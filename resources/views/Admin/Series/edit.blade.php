@extends('Admin.Extend.index')

@section('admin-content')

<!--inner block start here-->
<div class="inner-block">
	<div class="grid-form1">
		<h3>Series</h3>
		@if(session('success'))
			<div class="alert alert-success">
				{{session('success')}}
			</div>
		@endif
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" action="admin/series/edit/{{ $series->id }}" method="POST" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" id="focusedinput" name="name" placeholder="Video Name" value="{{ $series->name }}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Category</label>
						<div class="col-sm-8">
							<select class="form-control1" name="idCategory" id="idCategory">
								@foreach($listCategory as $category)
									<option value="{{$category->id}}"
                                    @if($series->Subcategory->Category->id == $category->id)
                                        selected="selected"
                                    @endif
                                    >{{$category->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Subcate</label>
						<div class="col-sm-8">
							<select class="form-control1" name="idSubcate" id="idSubcate">

							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Total Episode</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="total_episode" placeholder="Total Episode" value="{{ $series->total_episode }}">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Content</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="content" placeholder="Content Video" value="{{ $series->content }}">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Is Enable</label>
						<div class="col-sm-8">
							<div class="radio-inline">
								<label>
									<input type="radio" name="isEnableSlide" value="1"
									@if($series->isEnableSlide == 1)
										checked
									@endif
									>
									Enable
								</label>
							</div>
							<div class="radio-inline">
								<label>
									<input type="radio" name="isEnableSlide" value="0"
									@if($series->isEnableSlide == 0)
										checked
									@endif
									>
									Disable
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Cover</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="cover" placeholder="Cover" value="{{ $series->cover }}">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Thumbnail</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" name="thumbnail" placeholder="Thumbnail" value="{{ $series->thumbnail }}">
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