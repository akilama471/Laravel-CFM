<li class="nav-item" role="menuitem" {{$attr ?? ''}}>
    <a id="{{$id ?? ''}}" href="{{$route ?? '#'}}" class="nav-link {{ $active == $group ? 'active' : '' }}">
        <i class="nav-icon fa-sharp fa-regular {{$icon ?? ''}}"></i>
        <p>
            {{$text ?? ''}}
            <i class="right fas fa-angle-right"></i>
        </p>
    </a>
</li>
