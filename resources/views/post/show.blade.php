@extends('layout.app')

@section('title',$post['title'])
    



@section('content')
 @if($post['is_new'])
 <div>A new blog post! Using if  </div>
 @else(!$post['is_new'])
 <div>Blog post is old! using elseif</div>
 @endif
 <h1>{{ $post['title'] }}</h1>
 <p>{{ $post['content'] }}</p>   
@endsection