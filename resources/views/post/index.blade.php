@extends('app')

@section('content')
    <div>
        {!! link_to_route('posts', 'published') !!}     {!! link_to_route('posts.unpublished', 'unpublished') !!}
    </div>
@foreach($posts as $post)
<article class=" navbar-left col-xs-6">
    <h2><a href="{{ url('/post/'.$post->id) }}">{!! $post->title !!}</a></h2>
    <p>
        {!! $post->excerpt !!}
    </p>
    <p>
        published: {{ $post->published_at  }}
    </p>
</article>
@endforeach
@stop    