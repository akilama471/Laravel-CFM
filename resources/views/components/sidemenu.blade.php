@props(['active_menu'])

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="" class="brand-link">
        <img src="{{ asset('assets/images/logo.webp')}}" alt="Logo" class="brand-image elevation-3">
        <span class="brand-text font-weight-light">N.A.S</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">
                    {{ Auth::user()->name }}
                </a>
            </div>
        </div>

        <x-sidemenu.menu-search/>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-collapse-hide-child nav-flat" data-widget="treeview" role="menu" data-accordion="false">

            </ul>
        </nav>
    </div>
</aside>
