@extends('layouts.master_admin')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Sub Category</h4>
        <form class="forms-sample" method="post" action="{{ route('subcategory.update', [$subcategory->id]) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Choose Category</label>
                <select name="category_id" class="form-control">
                    <option value="" selected disabled>Select Category</option>
                    @foreach (App\Models\Category::all() as $category)
                        <option value="{{$category->id}}" {{$subcategory->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

          <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" class="form-control" placeholder="Name Sub Category" value="{{$subcategory->name}}">
          </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          <button type="submit" class="btn btn-primary mr-2">Update</button>
        </form>
      </div>
    </div>
  </div>
@endsection
