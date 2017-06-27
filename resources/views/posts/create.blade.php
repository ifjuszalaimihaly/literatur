@extends('app')
@section('content')
<form>
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
	<button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection