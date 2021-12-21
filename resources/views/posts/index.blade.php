@extends('layout.app')

@section('title','Blog post')
    
@section('content')
    
    @forelse ($posts as $key => $post)
    @include('post.partials.post')
    @empty
        No post found!
    @endempty
    
@endsection