@extends('layouts.user') <!-- TODO -->

@section('content')

	{!! $getContents->contents !!}
	<div class="row">
	  <div class="col-8 offset-2">
	    <img src="{{ asset($getContents->img_file) }}">
	  </div>  
	</div>	
@endsection
