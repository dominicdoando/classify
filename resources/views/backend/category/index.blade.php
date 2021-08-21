@extends('layouts.master_admin')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">All Category</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td><img src="{{ asset('images/'.$category->image)}}" alt=""></td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('category.edit', [$category->id]) }}" class="btn btn-info">Edit</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                {{-- @empty
                <td>No category</td> --}}
                @endforeach

            </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
