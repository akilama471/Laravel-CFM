<a id="{{$id ?? ''}}" href="{{$href ?? '#'}}" class="dropdown-item {{$class ?? ''}}" {!! $modal ? "data-toggle='modal' data-target=$modal" : '' !!}>
    <i class="fa-solid {{$icon ?? ''}} mr-2"></i> {{$title ?? ''}}
</a>
<div class="dropdown-divider"></div>
