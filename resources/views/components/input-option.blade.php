<div class="form-group">
    <label for="{{$title}}">{{$title}}</label>
    <select name="{{$name}}" class="form-control" id="{{$title}}">
        <option value="" selected disabled>--Pilih--</option>
        {{$slot}}
    </select>
</div>