<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">MENU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              @foreach ($menus as $menu)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{$menu->name}}
                    </a>
                    <ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
                        @foreach ($menu->subcategories as $submenu)
                        <li class="dropdown-submenu">
                            <a class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">{{ $submenu->name }}</a>
                            <ul class="dropdown-menu border-0 shadow">
                                @foreach ($submenu->childcategories as $childmenu)
                                <li>
                                    <a href="" class="dropdown-item">{{$childmenu->name}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach

                    </ul>
                </li>
              @endforeach

          </ul>
        </div>
      </nav>
</div>

