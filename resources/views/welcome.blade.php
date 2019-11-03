@extends('layouts.app')
@section('content')
<div class="container">

    @if (session('successMeg'))
    <div class="alert alert-success" role="alert">
       {{session('successMeg')}}
      </div>
    @endif

    <table class="table">
      <h2>Student all list</h2>
      
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email </th>
      <th scope="col">Phone </th>
      <th scope="col">Password </th>
      <th scope="col" class="text-center"> Action </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach ($students as $student)
          
      
    <th scope="row">{{$student->id}}</th>
    <td>{{$student->frist_name}}</td>
    <td>{{$student->last_name}}</td>
    <td>{{$student->email}}</td>
    <td>{{$student->phone}}</td>
    <td >{{$student->password}}</td>
    <td class="text-center">
    <a href="{{route('edit', $student->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
    <form action="{{route('delete', $student->id)}}" id="delete-form-{{$studen->$id}}" method="POST" style="display:none;">
      @csrf
      {{method('delete')}}
    </form> 
        <button onclick="@if(  confirm(Are you sure you want delte this')){
          event.preveventDefault();
          document.getElementById('delete-form-{{$student->id}}').submit();
        }else{
          event.preveventDefault();

        }" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
    </td>
      
    </tr>
    @endforeach
   
  </tbody>
</table>
  </div>
    
@endsection