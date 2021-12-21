@extends('layout.app')

@section('title',$post['title'])
    



@section('content')
 @if($post['is_new'])
 <div>A new blog post! Using if  </div>
 @else(!$post['is_new'])
 <div>Blog post is old! using elseif <br></div>
 @endif
@unless ($post['is_new'])
<div>It is an old post ... using unless <br></div>
@endunless




 <h1>{{ $post['title'] }}</h1>
 <p>{{ $post['content'] }}</p>   

@isset($post['has_comments'])
<div>The post has some comment.... using isset</div>

@endisset


@for ($i = 0; $i < 10; $i++)
<div>  The current value is {{ $i }} <br><br></div>
@endfor

@endsection