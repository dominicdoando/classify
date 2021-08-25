<div class="container">
        <div class="navbar">
          <ul class="menu">
              @foreach ($menus as $menu)
                <li>
                    <a class="" href="#">
                    {{$menu->name}}
                    </a>
                    <ul>
                        @foreach ($menu->subcategories as $submenu)
                        <li>
                            <a class="" href="{{ route('subcategory.show',[$menu->slug,$submenu->slug]) }}" >{{ $submenu->name }}</a>
                            <ul>
                                @foreach ($submenu->childcategories as $childmenu)
                                <li>
                                    <a href="">{{$childmenu->name}}</a>
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
</div>

