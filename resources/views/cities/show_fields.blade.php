<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $cities->id }}</p>
</div>

<!-- City Name Field -->
<div class="form-group">
    {!! Form::label('city_name', 'City Name:') !!}
    <p>{{ $cities->city_name }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $cities->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $cities->updated_at }}</p>
</div>

