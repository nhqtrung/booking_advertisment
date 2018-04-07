@php 
	$pathBreadcrumb = asset("");
	$pathBreadcrumb = str_replace_last("/", "", $pathBreadcrumb);
@endphp

<ol class="breadcrumb">
    <li class="breadcrumb-item">
		@foreach($arrBreadcrumb as $breadcrumb)
			@php  
				$pathBreadcrumb = $pathBreadcrumb."/".$breadcrumb;
			@endphp
	        <a href="{{ $pathBreadcrumb }}">{{ $breadcrumb }}</a> 
	        <i class="fa fa-angle-right"></i>
		@endforeach
    </li>
</ol>