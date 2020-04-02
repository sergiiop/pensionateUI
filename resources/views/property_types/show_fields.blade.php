<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $propertyType->id }}</p>
</div>

<!-- Type Name Field -->
<div class="form-group">
    {!! Form::label('type_name', 'Type Name:') !!}
    <p>{{ $propertyType->type_name }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $propertyType->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $propertyType->updated_at }}</p>
</div>

