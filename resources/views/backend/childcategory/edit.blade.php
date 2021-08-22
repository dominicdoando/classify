@extends('layouts.master_admin')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Child Category</h4>
        <form class="forms-sample" method="post" action="{{ route('childcategory.update', [$childcategory->id]) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Choose Sub Category</label>
                <select name="subcategory_id" class="form-control">
                    <option value="" selected disabled>Select Sub Category</option>
                    @foreach (App\Models\Subcategory::all() as $subcategory)
                        <option value="{{$subcategory->id}}" {{$childcategory->subcategory_id == $subcategory->id ? 'selected' : ''}}>{{$subcategory->name}}</option>
                    @endforeach
                </select>
                @error('subcategory_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

          <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" class="form-control" placeholder="Name Child Category" value="{{$childcategory->name}}">
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
