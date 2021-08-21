@extends('layouts.master_admin')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Category</h4>
        <form class="forms-sample" method="post" action="{{ route('category.update', [$category->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" class="form-control" placeholder="Name" value="{{ $category->name }}">
          </div>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

          <div class="form-group">
            <label>Images</label>
            <input name="image" type="file" class="form-control" placeholder="Email">
          </div>
          <img width="50px" src="{{ asset('images/'.$category->image) }}" alt=""> <br><br>
          @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
          <button type="submit" class="btn btn-primary mr-2">Save</button>
        </form>
      </div>
    </div>
  </div>
@endsection
