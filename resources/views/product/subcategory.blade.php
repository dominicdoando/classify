@extends('layouts.master')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card p-3">
                        <div class="list-group">
                            @foreach ($filterByChildCategories as $ad)
                            <a href="{{ url()->current()}}/{{($ad->childcategory->slug)??'' }}" class="list-group-item">{{$ad->childcategory->name??''}}</a>
                            @endforeach
                        </div>
                        <br>
                        <form action="{{ url()->current() }}" method="get">
                            <div class="form-group">
                              <label for="">Minumum Price</label>
                              <input type="text"
                                class="form-control" name="minPrice" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Maximum Price</label>
                                <input type="text"
                                  class="form-control" name="maxPrice" placeholder="">
                              </div>
                              <div class="form-group">
                                <button class="btn btn-danger">Search</button>
                              </div>
                        </form>
                  </div>
            </div>
            <div class="col-md-9">
                <div class="row list-product">
                    @forelse ($advertisements as $advertisement)
                        <div class="col-md-3 list-product__item">
                            <a href="{{ route('product.show', [$advertisement->id, $advertisement->slug]) }}">
                                <img src="{{ asset('images/'.$advertisement->feature_image) }}" alt="" />
                                <p>{{ $advertisement->price }}</p>
                            </a>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
