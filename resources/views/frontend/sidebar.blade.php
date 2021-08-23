<div class="card">
    <div class="card-body">
      <img class="card-img-top" src="{{ asset('images/user.png') }}" alt="">
      <p class="text-center">
          <b>Dominic Doan</b>
      </p>
    </div>
    <hr>
  <div class="list-group">
      <a href="" class="list-group-item list-group-item-action">Dashboard</a>
      <a href="#" class="list-group-item list-group-item-action">Profile</a>
      <a href="{{route('ads.create')}}" class="list-group-item list-group-item-action {{ request()->is('ads/create')?'active':'' }}">Create ads</a>
      <a href="{{ route('ads.index') }}" class="list-group-item list-group-item-action {{ request()->is('ads')?'active':'' }}">Pulished ads</a>
      <a href="" class="list-group-item list-group-item-action">Pending ads</a>
      <a href="#" class="list-group-item list-group-item-action">Dashboard</a>
  </div>
  </div>
