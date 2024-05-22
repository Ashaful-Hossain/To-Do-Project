@extends('layouts.app')
@section('content')
<div class="container p-5 my-5 bg-primary text-white">
<div class="m-5">
    <form action="{{route('project.store')}}" method="POST">
      @csrf

    {{-- <div class="mb-3 mt-3">
      <label for="date" class="form-label">Date:</label>
      <input type="date" class="form-control" id="date" name="date">
    </div> --}}
  <div class="mb-3 mt-3">
    <label for="name" class="form-label"><h4>Project Name</h4></label>
    <input type="text" class="form-control" id="name" placeholder="Enter Project Name" name="name">
  </div>
  
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember">Remember
    </label>
  </div>
  <button type="submit" class="btn btn-warning">Submit</button>
</form>
</div>
</div>
@endsection