
<div id="sidebar" class="active">

    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="/admin"><img src="{{asset("assets/images/logo/logo.png")}}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ Request::path() === 'admin' ? 'active' : '' }}">
                    <a href="/admin" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Painel de controle</span>
                    </a>
                </li>

                @if (Request::path() === "admin/homepage"  || Request::path() === "admin/artists" )
                <li class="sidebar-item active has-sub">
                    @else
                    <li class="sidebar-item has-sub">
                @endif
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-globe"></i>
                        <span>site</span>
                    </a>

                    <ul class="submenu">

                        <li class="submenu-item {{ Request::path() === "admin/homepage" ? "active" : "" }}">
                            <a href="{{route("admin_home")}}">Home</a>
                        </li>

                        <li class="submenu-item {{ Request::path() === "admin/artists" ? "active" : "" }}">
                            <a href="{{route("admin_artists")}}">Artistas</a>
                        </li>
                        
                        <li class="submenu-item {{ Request::path() === "admin/label" ? "active" : "" }}">
                            <a href="{{route("artists_label")}}">Label</a>
                        </li>
                    </ul>

                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>

</div>
