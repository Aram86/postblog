@extends('app')

@section('content')
{!! link_to_route('post.create', 'Add', [],['class' => 'btn btn-primary']) !!}
<div class="panel-body">
    {!! link_to_route('home', 'published') !!}     {!! link_to_route('home.unpublished', 'unpublished') !!}
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Excerpt</th>
                <th>Published</th>
                <th>Function</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{!! $post->title !!}</td>
                <td>{!! $post->excerpt !!}</td>
                <td>{!! $post->published_at !!}</td>
                <td>
                    {!! link_to_route('post.edit', 'Edit', $post->id,['class' => 'btn btn-success']) !!}
                    {!! link_to_route('post.destroy', 'Delete', $post->id,['class' => 'btn btn-danger']) !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
