@extends('layouts.master_admin')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @include('backend.inc.message')
        <h4 class="card-title">All Child Category</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($childcategories as $childcategory)
                <tr>
                    <td>{{ $childcategory->category->name }}</td>
                    <td>{{ $childcategory->name }}</td>
                    <td>
                        <a href="{{ route('childcategory.edit', [$childcategory->id]) }}" class="btn btn-info">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('childcategory.destroy', [$childcategory->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
                        </form>

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
