@extends('layouts.master')
@section('content')
<section class="banner pt-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('frontend.sidebar')
            </div>
            <div class="col-md-9">
                <div class="table-responsive">
                    <table class="table table-striped table-inverse">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Stt</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>View</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($ads as $key =>$ad)

                                @endforeach
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>
                                        <img width="130px" src="{{asset('images/'.$ad->feature_image)}}" alt="">
                                    </td>
                                    <td>{{$ad->name}}</td>
                                    <td>{{$ad->price}}</td>
                                    <td>@if ($ad->publisged ==1)
                                        <span class="badge badge-success">Published</span>
                                    @else
                                        <span class="badge badge-danger">Pending</span>
                                    @endif
                                    </td>
                                    <td><a href="" class="btn btn-info">Edit</a></td>
                                    <td><a href="" class="btn btn-danger">Delete</a></td>
                                </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
