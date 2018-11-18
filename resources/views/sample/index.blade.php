@extends('layouts.user') <!-- TODO -->

@section('content')
<form method="get" action="{{ route('sample.request') }}">
	<input type="text" value="sample">

</form>
@endsection