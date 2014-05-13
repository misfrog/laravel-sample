@extends('layouts.default')

@section('content')	
<h1>Posts</h1>
@foreach ($posts as $post)
  <a href="{{ action('PostController@show', $post->id) }}">{{{ $post->title }}}</a> {{ $post->created_at }}<br />
@endforeach
@stop
