<li class="nav-item {{ $activeSub == $groupSub ? 'menu-open' : '' }}" role="menuitem">
    <a href="#" class="nav-link {{ $activeSub == $groupSub ? 'active' : '' }}">
        <i class="nav-icon fa-sharp fa-regular {{$icon ?? ''}}"></i>
        <p>
            {{$text ?? ''}}
            <i class="right fas fa-angle-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        {{$slot}}
    </ul>
</li>
