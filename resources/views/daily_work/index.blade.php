@extends('layouts.app');
@section('content')
<div class="container p-5 my-5 bg-success text-white">
<div class="container mt-3">
  <table class="table">
    <thead>
      <tr>
        <th class="colspan-3"><h1>To Do List</h1></th>
      </tr>
      <tr>
          <th>Date</th>
          <th>Name</th>
          <th>Project</th>
          <th>Daily Task</th>
          <th>Action</th>
      </tr>
    </thead>
    <tbody>
    
        @foreach ($data as $key => $d)
        <tr>
          <td>{{$d->created_at}}</td>
          <td>{{$d->name}}</td>
          @foreach ($proData as $dt)
          <td>{{$dt->name}}</td>
        @endforeach
        <td>{{$d->task}}</td>
        <td>
            <a href="{{route('task.edit',$d->id)}}">Edit</a>

            <form action="{{route('task.destroy',$d->id)}}" method="post">
              @csrf
              @method('DELETE')
              <input type="submit" value="Delete">
            </form>
        </td>
      </tr>
        @endforeach
    </tbody>
  </table>
  <div class="btn-group">
  <button class="btn btn-light text-decoration-none"><a href="{{route('task.create',)}}">Add New Task</a></button><br>
  <button class="btn btn-danger"><a href="{{route('project.create',)}}">Add a Project</a></button>
</div>
</div>
</div>

@endsection

