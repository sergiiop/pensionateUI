<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $properties->id }}</p>
</div>

<!-- Badrooms Number Field -->
<div class="form-group">
    {!! Form::label('badrooms_number', 'Badrooms Number:') !!}
    <p>{{ $properties->badrooms_number }}</p>
</div>

<!-- Rooms Number Field -->
<div class="form-group">
    {!! Form::label('rooms_number', 'Rooms Number:') !!}
    <p>{{ $properties->rooms_number }}</p>
</div>

<!-- Space Available Field -->
<div class="form-group">
    {!! Form::label('space_available', 'Space Available:') !!}
    <p>{{ $properties->space_available }}</p>
</div>

<!-- Type Id Field -->
<div class="form-group">
    {!! Form::label('type_id', 'Type Id:') !!}
    <p>{{ $properties->type_id }}</p>
</div>

<!-- Neighborhood Id Field -->
<div class="form-group">
    {!! Form::label('neighborhood_id', 'Neighborhood Id:') !!}
    <p>{{ $properties->neighborhood_id }}</p>
</div>

