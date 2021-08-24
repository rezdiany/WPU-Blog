@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Blog</h1>
  </div>
  <div class="table-responsive col-lg-10">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($blog as $b)
        <tr>
          <td>{{ $loop->iteration }} </td>
          <td>{{ $b->title }}</td>
          <td>{{ $b->category->name }}</td>
          <td>
            <a href="/dashboard/blog/{{ $b->slug }}" class="badge bg-info"><span data-feather="eye"> </span></a>
            <a href="#" class="badge bg-warning"><span data-feather="edit"> </span></a>
            <a href="#" class="badge bg-danger"><span data-feather="trash"> </span></a>
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>
@endsection