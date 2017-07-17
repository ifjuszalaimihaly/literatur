@extends('layouts.app')
@section('content')
  <form action="{{url('contact')}}" method="POST">
    {{ csrf_field() }}
            <div class="form-group">
              <label name="name">Név</label>
              <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label name="email">Email</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label name="subject">Tárgy</label>
                <input type="text" id="subject" name="subject" class="form-control">
            </div>
            <div class="form-group">
                <label name="message">Üzenet</label>
                <textarea id="message" name="message" class="form-control"></textarea>
            </div>
            <input type="submit"  value="Send message" class="btn btn-success">
  </form
@endsection
