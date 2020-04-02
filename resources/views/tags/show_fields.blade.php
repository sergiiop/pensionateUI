<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $tags->id }}</p>
</div>

<!-- Tag Name Field -->
<div class="form-group">
    {!! Form::label('tag_name', 'Tag Name:') !!}
    <p>{{ $tags->tag_name }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tags->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tags->updated_at }}</p>
</div>

