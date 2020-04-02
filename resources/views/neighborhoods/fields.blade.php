<!-- Neighborhood Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('neighborhood_name', 'Neighborhood Name:') !!}
    {!! Form::text('neighborhood_name', null, ['class' => 'form-control']) !!}
</div>

<!-- City Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city_id', 'City Id:') !!}
    {!! Form::text('city_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('neighborhoods.index') }}" class="btn btn-secondary">Cancel</a>
</div>
