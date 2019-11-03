@extends('layouts.app')

@section('content')
<div class="container">
@if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
            {{$error}}
          </div>
    @endforeach
    
@endif
<div class="col-md-6 offset-3 my-5">

<form action="{{route('store')}}" method="POST">
  @csrf
    <div class="form-group">
      <input type="text" class="form-control" name="frist_name"  placeholder="Enter Frist name">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="last_name"  placeholder="Enter Last name">
    </div>
    <div class="form-group">
      <input type="email" class="form-control" name="email"  placeholder="Enter email">
    </div>
    <div class="form-group">
      <input type="number" class="form-control" name="phone"  placeholder="Enter Phone numbr">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" name="password"  placeholder="Password">
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>

@endsection