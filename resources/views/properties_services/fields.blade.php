<!-- Property Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('property_id', 'Property Id:') !!}
    {!! Form::text('property_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Service Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_id', 'Service Id:') !!}
    {!! Form::text('service_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('propertiesServices.index') }}" class="btn btn-secondary">Cancel</a>
</div>
