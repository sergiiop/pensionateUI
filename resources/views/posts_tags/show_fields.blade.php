<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $postsTags->id }}</p>
</div>

<!-- Posts Id Field -->
<div class="form-group">
    {!! Form::label('posts_id', 'Posts Id:') !!}
    <p>{{ $postsTags->posts_id }}</p>
</div>

<!-- Tags Id Field -->
<div class="form-group">
    {!! Form::label('tags_id', 'Tags Id:') !!}
    <p>{{ $postsTags->tags_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $postsTags->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $postsTags->updated_at }}</p>
</div>

