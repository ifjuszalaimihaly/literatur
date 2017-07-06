@extends("layouts.app")
@section("content")
@foreach($posts as $post)
		<h2>{{ $post->title }}</h2>
		<p>
			{{ substr(strip_tags($post->content),0,200) }}{{ strlen(strip_tags($post->content)) > 200 ? "..." : "" }}		</p>
		<legend>
		<div class="row">
			<div class="col-md-5">
				{{ $post->city }}, {{ $post->written_at }}

			</div>
			<div class="col-md-2">
				<a class="btn btn-default btn-block" href="{{ route('singlepost', $post->slug) }}">A teljes bejegyzés</a>
			</div>			
		</div>		
		</legend>
	@endforeach
	
@endsection