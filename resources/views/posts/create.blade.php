@extends('app')
@section('stylesheet')

<link rel="stylesheet" href="{{ URL::to('/') }}/css/bootstrap-datepicker.min.css" />
@endsection
@section('content')
<form method="POST">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="title">Cím</label>
		<input type="text" class="form-control" id="title" placeholder="Cím">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Tartalom</label>
		<textarea class="form-control" id="content"></textarea>
	</div>
	<div class="form-group">
		<label for="title">Település</label>
		<input type="text" class="form-control" id="city" placeholder="Keletkezési hely">
	</div>
	<div class="form-group">
		<label for="datepicker">Keletkezési dátum</label>
		 <input type="text" class="form-control" id="datepicker">
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
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