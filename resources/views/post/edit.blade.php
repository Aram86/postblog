@extends('app')

@section('content')
    <h1>Edit</h1>
    @include('errors.list')
    {!! Form::open(['route' => ['post.update',$id]]) !!}
        @include('post._form')
    {!! Form::close()!!}
@endsection