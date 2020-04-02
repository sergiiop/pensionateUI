<!-- Badrooms Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('badrooms_number', 'Badrooms Number:') !!}
    {!! Form::text('badrooms_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Rooms Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rooms_number', 'Rooms Number:') !!}
    {!! Form::text('rooms_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Space Available Field -->
<div class="form-group col-sm-6">
    {!! Form::label('space_available', 'Space Available:') !!}
    {!! Form::text('space_available', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_id', 'Type Id:') !!}
    {!! Form::text('type_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Neighborhood Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('neighborhood_id', 'Neighborhood Id:') !!}
    {!! Form::text('neighborhood_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('properties.index') }}" class="btn btn-secondary">Cancel</a>
</div>
