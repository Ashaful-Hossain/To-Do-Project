@extends('layouts.app')
@section('content')
<div class="container p-5 my-5 bg-primary text-white">
<div class="m-5">
    <form action="{{route('task.store')}}" method="POST">
      @csrf

    {{-- <div class="mb-3 mt-3">
      <label for="date" class="form-label">Date:</label>
      <input type="date" class="form-control" id="date" name="date">
    </div> --}}
  <div class="mb-3 mt-3">
    <label for="name" class="form-label"><h4>Name</h4></label>
    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
  </div>
  <div class="mb-3">
    <label for="daily_work" class="form-label bold">Daily Work</label>
    <input type="text" class="form-control" id="task" placeholder="Enter Daily Work" name="daily_work">
  </div>
    <div class="mb-3">
    <label for="project_id" class="form-label"><h4>Select a Project</h4></label>
    <select class="form-select form-control" id="project_id" name="project_id">
      @foreach ($proData as $pd)
      <option value="{{$pd->id}}">{{$pd->name}}</option>
          
      @endforeach
</select>
  </div>
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember">Remember
    </label>
  </div>
  <button type="submit" class="btn btn-warning">Submit</button>
</form>
</div>
</div>
@endsection