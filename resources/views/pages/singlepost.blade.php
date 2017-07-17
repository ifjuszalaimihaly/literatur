@extends('layouts.app')
@section('content')
	<h1>{{$post->title}}</h1>
	<p>{{ $post->content }}</p>
	<legend>{{ $post->city }}, {{ $post->written_at }}</legend>
	<div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5"></div>
@endsection
