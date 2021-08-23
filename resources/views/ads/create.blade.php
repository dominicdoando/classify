@extends('layouts.master')

@section('content')
<section class="banner pt-5 mt-5">
    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <img class="card-img-top" src="{{ asset('images/user.png') }}" alt="">
                    <p class="text-center">
                        <b>Dominic Doan</b>
                    </p>
                  </div>
                  <hr>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
                    <a href="#" class="list-group-item list-group-item-action">Profile</a>
                    <a href="#" class="list-group-item list-group-item-action disabled">Create ads</a>
                    <a href="#" class="list-group-item list-group-item-action disabled">Pulished ads</a>
                    <a href="#" class="list-group-item list-group-item-action disabled">Pending ads</a>
                    <a href="#" class="list-group-item list-group-item-action disabled">Dashboard</a>
                </div>
                </div>
            </div>
            <div class="col-md-9">
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        <button style="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        @foreach ($errors->all() as $errorMessage)
                            <li>{{ $errorMessage }}</li>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('ads.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header text-white" style="background:red;">
                          post your ads
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 mb-3"><h1 class="">Upload 3 Images</h1></div>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <feature-image />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <first-image />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <second-image />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3"><h1 class="">Upload 3 Images</h1></div>
                                <div class="col-12">
                                    <category-dropdown />
                                </div>
                                <div class="form-group col-md-12 mb-3">
                                  <label for="">Name Product</label>
                                  <input type="text"
                                    class="form-control" name="name" placeholder="">
                                </div>
                                <div class="form-group col-md-12 mb-3">
                                    <label for="">Description</label>
                                    <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
                                  </div>
                                  <div class="form-group col-md-12 mb-3">
                                    <label for="">Price Product</label>
                                    <input type="text"
                                      class="form-control" name="price" placeholder="">
                                  </div>
                                  <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                      <label for="">Price Status</label>
                                      <select class="form-control" name="price_status">
                                        <option selected disabled>Select Price Status</option>
                                        <option value="negoitable">negoitable</option>
                                        <option value="fixed">fixed</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                      <label for="">Product Condition</label>
                                      <select class="form-control" name="product_condition">
                                        <option selected disabled>Select Product Condition</option>
                                        <option value="likenew">Look like new</option>
                                        <option value="heavilyused">Heavy Used</option>
                                        <option value="new">New</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                      <label for="">Listing Location</label>
                                      <input type="text" class="form-control" name="listing_location">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                      <label for="">Country</label>
                                      <select class="form-control" name="country_id">
                                        <option selected disabled>Select Country</option>
                                        @foreach (App\Models\Country::all() as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                      <label for="">State</label>
                                      <select class="form-control" name="city_id">
                                        <option selected disabled>Select State</option>
                                        @foreach (App\Models\State::all() as $state)
                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                      <label for="">City</label>
                                      <select class="form-control" name="state_id">
                                        <option selected disabled>Select City</option>
                                        @foreach (App\Models\City::all() as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                      <label for="">Phone Number</label>
                                      <input type="tel" class="form-control" name="phone_number">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                      <label for="">Link of Product (ex:yoytube)</label>
                                      <input type="link" class="form-control" name="link">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                      <input type="submit" class="btn btn-success" value="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
