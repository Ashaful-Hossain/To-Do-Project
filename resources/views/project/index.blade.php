@extends('layouts.app');
@section('content')
<div class="container p-5 my-5 bg-success text-red">
<div class="container mt-3 text-red">
  <table class="table">
    <thead>
      <tr>
        <th class="colspan-3"><h1>Project</h1></th>
      </tr>
      <tr>
          <th>SL</th>
          <th>Name</th>

      </tr>
    </thead>
    <tbody>
    
        @foreach ($data as $key => $dd)
           <tr>
        <td>{{++$key}}</td>
        <td>{{$dd->name}}</td>
        <td>
            <a href="{{route('project.edit',$dd->id)}}">Edit</a>

            <form action="{{route('project.destroy',$dd->id)}}" method="post">
              @csrf
              @method('DELETE')
              <input type="submit" value="Delete">
            </form>
        </td>
      </tr>
        @endforeach
    </tbody>
  </table>
  <button class="bg-red border-rudius"><a href="{{route('project.create',)}}">Add Project</a></button>
  <button class="bg-red border-rudius"><a href="{{route('task.create',)}}">Add new Task</a></button>
</div>
</div>

@endsection

