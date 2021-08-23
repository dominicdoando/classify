@extends('layouts.master')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('frontend.sidebar')
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        Update Profile
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Change Password
                    </div>
                    <div class="card-body">
                        <form action="post">@csrf
                            <div class="form-group">
                                <label for="">Current Password:</label>
                                <input type="password"
                                  class="form-control" name="current_password" placeholder="">
                              </div>
                              <div class="form-group">
                                  <label for="">New Password:</label>
                                  <input type="password"
                                    class="form-control" name="password" placeholder="">
                                </div>
                                <div class="form-group">
                                  <label for="">Confirm Password:</label>
                                  <input type="password"
                                    class="form-control" name="password_confirmation" placeholder="">
                                </div>
                                <button type="submit" class="btn btn-info">Update Password</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
