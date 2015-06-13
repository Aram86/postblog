<div class="form-group">
    {!! Form::label('title') !!}
    {!! Form::text('title', isset($posts) ? $posts->title : null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::label('slug') !!}
    {!! Form::text('slug', isset($posts) ? $posts->slug : null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::label('excerpt') !!}
    {!! Form::textarea('excerpt', isset($posts) ? $posts->excerpt : null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::label('content') !!}
    {!! Form::textarea('content', isset($posts) ? $posts->content : null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::label('published_at') !!}
    {!! Form::input('date', 'published_at',isset($posts) ? $posts->published_at : date('Y-m-d'), ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::label('published') !!}
    {!! Form::checkbox('published', '1', isset($posts) ? $posts->published : false) !!}
</div>
<div class="form-group">
    @if(isset($posts))
    {!! Form::submit('Edit', ['class'=>'btn btn-primary']) !!}
    @else
    {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
    @endif
</div>