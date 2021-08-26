@extends('layouts.master')
@section('content')
<section class="banner pt-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('frontend.sidebar')
            </div>
            <div class="col-md-9">
                @include('backend.inc.message')
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
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>
                                              <div class="swiper-slide">
                                                <img src="{{asset('images/'.$ad->feature_image)}}" alt="">
                                              </div>
                                              <div class="swiper-slide">
                                                <img src="{{asset('images/'.$ad->first_image)}}" alt="">
                                              </div>
                                              <div class="swiper-slide">
                                                <img src="{{asset('images/'.$ad->second_image)}}" alt="">
                                              </div>
                                    </td>
                                    <td>{{$ad->name}}</td>
                                    <td>{{$ad->price}}</td>
                                    <td>@if ($ad->publisged ==1)
                                        <span class="badge badge-success">Published</span>
                                    @else
                                        <span class="badge badge-danger">Pending</span>
                                    @endif
                                    </td>
                                    <td><a href="{{ route('ads.edit', $ad->id) }}" class="btn btn-info">Edit</a></td>
                                    <td><a href="{{ route('product.show', [$ad->id, $ad->slug]) }}" class="btn btn-success">View</a></td>
                                    <td><a href="{{ route('ads.destroy', $ad->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a></td>
                                </tr>
                                @if($ads->isEmpty())
                                <td>No Advertisement</td>
                                @endif

                                @endforeach

                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
