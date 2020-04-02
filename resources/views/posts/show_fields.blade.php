<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $posts->id }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $posts->title }}</p>
</div>

<!-- Post Date Field -->
<div class="form-group">
    {!! Form::label('post_date', 'Post Date:') !!}
    <p>{{ $posts->post_date }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $posts->description }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $posts->status }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $posts->user_id }}</p>
</div>

<!-- Property Id Field -->
<div class="form-group">
    {!! Form::label('property_id', 'Property Id:') !!}
    <p>{{ $posts->property_id }}</p>
</div>

<!-- Typeproperty Id Field -->
<div class="form-group">
    {!! Form::label('typeproperty_id', 'Typeproperty Id:') !!}
    <p>{{ $posts->typeproperty_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $posts->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $posts->updated_at }}</p>
</div>

