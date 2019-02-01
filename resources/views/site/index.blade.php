@extends('site.layout.site')

@section('content')

	<div class="fh5co-loader"></div>
	<div id="page">
    @include("site.layout.menu")
  

    @include("site.partials.section-one")
    @include("site.partials.section-two")
    @include("site.partials.section-three")
    @include("site.partials.section-fuor")
    @include("site.partials.section-five")
    @include("site.partials.section-six")
    @include("site.partials.footer")

	</div>

@endsection