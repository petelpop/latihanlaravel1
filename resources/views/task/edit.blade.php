@extends('layouts.app')
@section('main')

<div class="mt-5 mx-auto" style="width: 380px">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <div class="card">
      <div class="card-body">
          <form action="{{url("/tasks/$task->id")}}" method="POST">
            @csrf
            @method('PATCH')
              <div class="mb-3">
                  <label for="" class="form-label">User</label>
                  <input name="user" type="text" class="form-control" value="{{$task->user}}">
                  @error('user')
                  <span class="text-danger">
                    {{ $message }}
                  </span>
              @enderror
              </div>
              <div class="mb-3">
                  <label for="" class="form-label">Task</label>
                  <textarea name="tasks" class="form-control" id="" rows="3">{{$task->tasks}}</textarea>
                  @error('tasks')
                  <span class="text-danger">
                    {{ $message }}
                  </span>
              @enderror
              </div>
              <button type="submit" class="btn btn-primary">Edit</button>
          </form>
      </div>
  </div>
</div>

@endsection