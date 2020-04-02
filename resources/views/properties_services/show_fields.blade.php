<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $propertiesService->id }}</p>
</div>

<!-- Property Id Field -->
<div class="form-group">
    {!! Form::label('property_id', 'Property Id:') !!}
    <p>{{ $propertiesService->property_id }}</p>
</div>

<!-- Service Id Field -->
<div class="form-group">
    {!! Form::label('service_id', 'Service Id:') !!}
    <p>{{ $propertiesService->service_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $propertiesService->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $propertiesService->updated_at }}</p>
</div>

