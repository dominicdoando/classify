@extends('layouts.master_admin')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Child Category</h4>
        <form class="forms-sample" method="post" action="{{ route('childcategory.store') }}">
            @csrf
            <div class="form-group">
                <label>Choo Category</label>
                <select name="subcategory_id" class="form-control">
                    <option value="" selected disabled>Select Category</option>
                    @foreach (App\Models\Subcategory::all() as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @error('subcategory_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

          <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" class="form-control" placeholder="Name Child Category">
          </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          <button type="submit" class="btn btn-primary mr-2">Save</button>
        </form>
      </div>
    </div>
  </div>
@endsection
