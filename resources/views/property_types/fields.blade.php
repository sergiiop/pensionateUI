<!-- Type Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_name', 'Type Name:') !!}
    {!! Form::text('type_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('propertyTypes.index') }}" class="btn btn-secondary">Cancel</a>
</div>
