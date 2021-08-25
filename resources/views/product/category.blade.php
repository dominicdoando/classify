@extends('layouts.master')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card p-3">
                        <div class="list-group">
                            @foreach ($filterBySubcategories as $subcategory)
                            <a href="" class="list-group-item">{{$subcategory->name??''}}</a>
                            @endforeach
                        </div>
                  </div>
            </div>
            <div class="col-md-9">
                <div class="row list-product">
                    @forelse ($advertisements as $advertisement)
                        <div class="col-md-3 list-product__item">
                            <img src="{{ asset('images/'.$advertisement->feature_image) }}" alt="" />
                            <p>{{ $advertisement->price }}</p>
                        </div>
                    @empty

                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
