<div class="nav-bar pt-3" style="background: white;z-index: 99;">
    <ul class="nav-bar__menus">
        <li class="nav-bar__menu" id="sidebar_menu">
            <span class="nav-bar__menu-1" id="sidebarCall">Menu</span>
        </li>
        <li class="nav-bar__menu">
            <img src="{{ $logo->value ? Storage::url($logo->value) : asset('assets/images/logo-gundar.png') }}"
                alt="Gunadarma" />
        </li>
        <li class="nav-bar__menu">
            <div class="nav-bar__numberInfo">
                <p>Telephone</p>
                <p>{{$telephone->value}}</p>
            </div>
        </li>
        <li class="nav-bar__menu" style="width: 20%;">
            <div class="nav-bar__addresInfo" style="font-size: 11px;">
                <p>Address</p>
                {!!$location->value!!}
            </div>
        </li>
    </ul>
</div>