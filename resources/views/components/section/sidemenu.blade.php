@props(['active_menu','active_group'])

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="" class="brand-link">
        <img src="{{ asset('assets/images/logo.webp')}}" alt="Logo" class="brand-image elevation-3">
        <span class="brand-text font-weight-light"></span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('assets/images/user.webp')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    {{ Auth::user()->name }}
                </a>
            </div>
        </div>

        <x-ui.sidemenu-search />

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-collapse-hide-child nav-flat text-sm" data-widget="treeview" role="menu" data-accordion="false">
                <x-ui.sidemenu-item route="{{route('system.dashboard')}}" icon="fa-chart-simple" text="Dashboard" active={{$active_menu}} group="dashboard" />

                <x-ui.sidemenu-dropdown icon="fa-users" text="Member Manager" activeSub="{{$active_group}}" groupSub="members">
                    <x-ui.sidemenu-item route="{{route('MembersController.members.add')}}" text="Add Member" active={{$active_menu}} group="members_add" />
                    <x-ui.sidemenu-item route="{{route('MembersController.members.view')}}" text="View Members" active={{$active_menu}} group="members_view" />
                </x-ui.sidemenu-dropdown>

                <x-ui.sidemenu-dropdown icon="fa-gear" text="Settings" activeSub="{{$active_group}}" groupSub="settings">
                    <x-ui.sidemenu-item route="{{route('FormEditorController.index')}}" text="Form Editor" active={{$active_menu}} group="form_editor" />
                </x-ui.sidemenu-dropdown>

            </ul>
        </nav>
    </div>
</aside>
