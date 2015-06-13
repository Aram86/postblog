@extends('app')

@section('content')

<article class=" navbar-left col-xs-6">
    <h2>{!! $posts->title !!}</h2>
    <p>
        {!! $posts->excerpt !!}
    </p>
    <p>
        {{ $posts->content  }}
    </p>
    <p>
        published: {{ $posts->published_at  }}
    </p>
</article>

@stop 

