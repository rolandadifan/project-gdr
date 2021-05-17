<div class="nav-bar pt-3 pb-4" style="background: white;z-index: 99;">
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
        <li class="nav-bar__menu">
            <div class="nav-bar__addresInfo">
                <p>Address</p>
                <div class="row">
                    <div class="col-md-10">
                        <p>{{$location->value}}</p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>