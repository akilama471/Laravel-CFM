<div class="{{$col ?? ''}}">
    <div class="form-group">
        <label for="{{$id ?? ''}}">{{$lable ?? ''}} :</label>
        <input type="text" name="{{$name ?? ''}}" class="form-control" id="{{$id ?? ''}}" placeholder="{{$placeholder ?? ''}}" {{$attr ?? ''}}>
        <span id="{{$name ?? ''}}_error" class="text-danger text-bold"></span>
    </div>
</div>
