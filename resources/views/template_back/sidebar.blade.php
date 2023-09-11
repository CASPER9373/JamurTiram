<!-- main-sidebar opened -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="main-sidebar app-sidebar sidebar-scroll">
    <div class="main-sidebar-header">
        <a class="desktop-logo logo-light active" href="index.html" class="text-center mx-auto"><img
                src="{{ asset('') }}assets/img/brand/logo.png" class="main-logo"></a>
        <a class="desktop-logo icon-logo active"href="index.html"><img
                src="{{ asset('') }}assets/img/brand/favicon.png" class="logo-icon"></a>
        <a class="desktop-logo logo-dark active" href="index.html"><img
                src="{{ asset('') }}assets/img/brand/logo-white.png" class="main-logo dark-theme"
                alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="index.html"><img
                src="{{ asset('') }}assets/img/brand/favicon-white.png" class="logo-icon dark-theme"
                alt="logo"></a>
    </div>
    <!-- /logo -->
    <div class="main-sidebar-loggedin">
        <div class="app-sidebar__user">
            <div class="dropdown user-pro-body text-center">
                <div class="user-pic">
                    <img src="{{ asset('') }}assets/img/faces/6.jpg" alt="user-img"
                        class="rounded-circle mCS_img_loaded">
                </div>
                <div class="user-info">
                    <h6 class=" mb-0 text-dark">{{ auth()->user()->username }}</h6>
                    <span class="text-muted app-sidebar__user-name text-sm">{{ auth()->user()->role }}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /user -->

    <div class="sidebar-navs">
        <ul class="nav  nav-pills-circle">
            <li class="nav-item" data-toggle="tooltip" data-placement="top" title=""
                data-original-title="Settings" aria-describedby="tooltip365540">
                <a class="nav-link text-center m-2">
                    <i class="fe fe-settings"></i>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat">
                <a class="nav-link text-center m-2">
                    <i class="fe fe-mail"></i>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout">
                <a class="nav-link text-center m-2">
                    <i class="fe fe-power"></i>
                </a>
            </li>
        </ul>
    </div>



    <div class="main-sidebar-body">
        <ul class="side-menu ">
            <li class="slide">
                <a class="side-menu__item" href="dashboard"><i class="side-menu__icon fe fe-airplay"></i><span
                        class="side-menu__label">Dashboard</span></a>
            </li>


            <li class="slide">
                <a class="side-menu__item" href="{{ route('dataproduksi.index') }}"><i
                        class="side-menu__icon fe fe-award"></i><span class="side-menu__label">data produksi</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><i
                        class="side-menu__icon fe fe-map-pin menu-icon"></i><span class="side-menu__label">stok
                        barang</span><span class="badge badge-pink side-badge">1</span><i
                        class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="stokhasilproduksi">stok hasil produksi</a></li>
                </ul>
            </li>

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><i
                        class="side-menu__icon fe fe-layout"></i><span class="side-menu__label">Hasil
                        Pemasaran</span><span class="badge badge-pink side-badge">1</span><i
                        class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="table-basic.html">jumlah sisa Pemasaran</a></li>
                </ul>
            </li>

        </ul>
    </div>
</aside>
<!-- /main-sidebar -->
