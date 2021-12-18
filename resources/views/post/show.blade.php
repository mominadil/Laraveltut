@extends('layout.app')

@section('title',$post['title'])
    
@show


@section('content')
 <h1>{{$post['title'] }}</h1>   
@endsection