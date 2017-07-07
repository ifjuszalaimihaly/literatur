@extends("layouts.app")
@section('stylesheet')

<link rel="stylesheet" href="{{ URL::to('/') }}/css/bootstrap-datepicker.min.css" />
@endsection
@section('content')
<form method="POST" action="{{ route('posts.store') }}">
	 <fieldset>
	{{ csrf_field() }}
	<div class="form-group">
		<label for="title">Cím</label>
		<input type="text" class="form-control" id="title" name="title" placeholder="Cím" required="required">
	</div>
	<div class="form-group">
		<label for="title">Ketegória</label>
		<select id="category_id" name="category_id" class="form-control">
			@foreach($categories as $category)
				<option value="{{ $category->id }}">{{ $category->name }}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Tartalom</label>
		<textarea class="form-control" id="content" name="content" required="required"></textarea>
	</div>
	<div class="form-group">
		<label for="title">Keletkezési hely</label>
		<input type="text" class="form-control" id="city" placeholder="Keletkezési hely" name="city" required="required">
	</div>
	<div class="form-group">
		<label for="datepicker">Keletkezési dátum</label>
		 <input type="text" class="form-control" id="datepicker" name="written_at" required="required">
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
		language: "hu",
	});
</script>
@endsection