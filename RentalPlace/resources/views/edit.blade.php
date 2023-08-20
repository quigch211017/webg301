@extends('layouts.app')
@section('title', 'Edit place')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Edit place</h1>
      <form action="/places/{{ $place->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
        <div class="form-group">
          <label>Address</label>
          <input type="text" class="form-control" name="address" placeholder="Enter address" value="{{$place->address}}">
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control" name="Phone" placeholder="Enter phone" value="{{$place->phone}}">
        </div>
        <div class="form-group">
          <label>Price</label>
          <input type="text" class="form-control" name="price" placeholder="Enter price" value="{{$place->price}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
    
@endsection