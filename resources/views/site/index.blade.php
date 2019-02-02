@extends('site.layout.site')

@section('content')

	<div class="fh5co-loader"></div>
	<div id="page">
    @include("site.layout.menu")
  

    @include("site.partials.section-one")
    @include("site.partials.section-two")
    @include("site.partials.footer")

	</div>

@endsection