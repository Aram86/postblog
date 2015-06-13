@extends('app')

@section('content')
    <h1>Create</h1>
    @include('errors.list')
    {!! Form::open(['route' => 'post.store']) !!}
        @include('post._form')
    {!! Form::close()!!}
@endsection