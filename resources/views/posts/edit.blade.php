@extends("layouts.app")
@section('stylesheet')

<link rel="stylesheet" href="{{ URL::to('/') }}/css/bootstrap-datepicker.min.css" />
@endsection
@section('content')
<form method="POST" action="{{ route('posts.update', $post->id) }}">
	 <fieldset>
	{{ csrf_field() }}
	{{ method_field('PUT') }}
	<div class="form-group">
		<label for="title">Cím</label>
		<input type="text" class="form-control" id="title" name="title" placeholder="Cím" value="{{ $post->title }}" disabled="disabled">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Tartalom</label>
		<textarea class="form-control" id="content" name="content" required="required">{{ $post->content }}</textarea>
	</div>
	<div class="form-group">
		<label for="title">Keletkezési hely</label>
		<input type="text" class="form-control" id="city" placeholder="Keletkezési hely" name="city" value="{{ $post->city }}" disabled="disabled">
	</div>
	<div class="form-group">
		<label for="datepicker">Keletkezési dátum</label>
		 <input type="text" class="form-control" id="datepicker" name="written_at" value="{{ $post->written_at }}" disabled="disabled">
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
	 <fieldset>
</form>
@endsection
@section('script')
<script src="{{ URL::to('/') }}/js/bootstrap-datepicker.min.js"></script>
<script src="{{ URL::to('/') }}/js/bootstrap-datepicker.hu.min.js"></script>
<script>
	$("#datepicker").datepicker({
		format: "yyyy-mm-dd",
		language: "hu"
	});
</script>
@endsection