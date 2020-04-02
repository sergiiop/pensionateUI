<!-- Posts Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('posts_id', 'Posts Id:') !!}
    {!! Form::text('posts_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tags Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tags_id', 'Tags Id:') !!}
    {!! Form::text('tags_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('postsTags.index') }}" class="btn btn-secondary">Cancel</a>
</div>
