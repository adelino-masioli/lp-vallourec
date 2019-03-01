@extends('site.layout.site')

@section('content')

	<div class="fh5co-loader"></div>
	<div id="page">
    @include("site.layout.menu")
  

    @include("site.partials.section-one-download")

    @include("site.partials.section-download-success")

    @include("site.partials.section-three")
    @include("site.partials.footer")

	</div>

@endsection