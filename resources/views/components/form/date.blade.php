<div class="{{$col ?? ''}}">
    <div class="form-group">
        <label for="{{$id ?? ''}}">{{$lable ?? ''}} :</label>
        <div class="input-group date datenowPicker" id="{{$name}}" data-target-input="nearest">
            <input id="{{$id ?? ''}}" name="{{$name}}" type="text" class="form-control datetimepicker-input" data-target="#{{$name}}" />
            <div class="input-group-append" data-target="#{{$name}}" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
</div>
