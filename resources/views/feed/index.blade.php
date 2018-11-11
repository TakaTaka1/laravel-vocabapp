@extends('layouts.user') <!-- TODO -->

@section('content')
<br><br>
<div class="row">
<div class="col-8 offset-2">
<form class="form-inline" method="POST" action="{{ route('user.edit')}}">
  @csrf
  <label class="sr-only" for="inlineFormInputGroupUsername2">Get Your Feed!!!</label>
  <div class="input-group mb-2 mr-sm-2 col-md-8">
    <input type="text" name="feed" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Get Your Feed!!!">
  </div>

  <button type="submit" class="btn btn-primary mb-2">Regist</button>
</form>
</div>
</div>

<br><br>
<div class="row">
<div class="col-8 offset-2">
<form class="form-inline" method="POST" action="{{ route('static.create') }}" enctype="multipart/form-data">
  @csrf
  <div class="input-group mb-2 mr-sm-2 col-md-2">
    <input type="file" name="img_file" class="form-control">
  </div>

  <div class="input-group mb-2 mr-sm-2 col-md-2">
    <input type="text" name="slug" class="form-control" id="slug" placeholder="Link">
  </div>
  <div class="input-group mb-2 mr-sm-2 col-md-2">
    <input type="text" name="name" class="form-control" placeholder="name">
  </div>
  <div class="input-group mb-2 mr-sm-2 col-md-3">
    <textarea name="contents" class="form-control"></textarea> 
  </div>
  <button type="submit" class="btn btn-primary mb-2">RegistPage</button>
</form>
</div>
</div>

@if( $errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif




@foreach($getAll as $all)
<div class="row">
	<div class="col-8 offset-2">
		<a href="{{ route('static.show'  ,$all->id)}}">{{ $all->name }}</a>
	</div>	
</div>

@endforeach
@endsection