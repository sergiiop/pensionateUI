<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $neighborhood->id }}</p>
</div>

<!-- Neighborhood Name Field -->
<div class="form-group">
    {!! Form::label('neighborhood_name', 'Neighborhood Name:') !!}
    <p>{{ $neighborhood->neighborhood_name }}</p>
</div>

<!-- City Id Field -->
<div class="form-group">
    {!! Form::label('city_id', 'City Id:') !!}
    <p>{{ $neighborhood->city_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $neighborhood->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $neighborhood->updated_at }}</p>
</div>

