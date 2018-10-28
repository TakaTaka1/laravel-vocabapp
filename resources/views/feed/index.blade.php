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
@endsection