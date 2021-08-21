@extends('layouts.master_admin')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Category</h4>
        <form class="forms-sample" method="post" action="{{ route('category.store') }}" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" class="form-control" placeholder="Name">
          </div>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
          <div class="form-group">
            <label>Images</label>
            <input name="image" type="file" class="form-control" placeholder="Email">
          </div>
          @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
          <button type="submit" class="btn btn-primary mr-2">Save</button>
        </form>
      </div>
    </div>
  </div>
@endsection
