@extends('layouts.master')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/'.$advertisement->feature_image) }}" alt="" />
                <img src="{{ asset('images/'.$advertisement->first_image) }}" alt="" />
                <img src="{{ asset('images/'.$advertisement->second_image) }}" alt="" />
                <div class="card p-3">
                    {!! $advertisement->description !!}
                </div>
                <div class="card p-3">
                    <p>Country: {{ $advertisement->country->name }}</p>
                    <p>State: {{ $advertisement->city->name }}</p>
                    <p>City:{{ $advertisement->state->name }}</p>
                    <p>Product Video <a href="{{ $advertisement->link }}">Click here</a>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item">{{ $advertisement->name }}</li>
                    <li class="list-group-item">Price: {{ $advertisement->price }} USD, {{ $advertisement->price_status }}</li>
                    <li class="list-group-item disabled">Posted: {{ $advertisement->created_at->diffForHumans() }}</li>
                    <hr>
                    <li class="list-group-item">{{ $advertisement->user->name }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
