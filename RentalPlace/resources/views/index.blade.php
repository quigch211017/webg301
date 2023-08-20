@extends('layouts.app')
@section('title', 'places')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>places</h1>
      <p>
        <a href="{{ route('places.create') }}" class="btn btn-success">Add New place</a>
      </p>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Price</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($places as $place)
          <tr>
            <td>{{ $place->id }}</td>
            <td>{{ $place->address }}</td>
            <td>{{ $place->phone }}</td>
            <td>{{ $place->price }}</td>
            <td>
              <a href="{{ route('places.show', $place->id) }}" class="btn btn-info">Details</a>
              <a href="{{ route('places.edit', $place->id) }}" class="btn btn-primary">Edit</a>
              <form style="display:inline-block" method="POST" action="{{ route('places.destroy', $place->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>