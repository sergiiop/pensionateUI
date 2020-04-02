<!-- City Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city_name', 'City Name:') !!}
    {!! Form::text('city_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cities.index') }}" class="btn btn-secondary">Cancel</a>
</div>
