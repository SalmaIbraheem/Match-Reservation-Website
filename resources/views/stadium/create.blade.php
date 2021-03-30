@extends('layouts.app')

@section('content')
<div class="container">
<div clase="row">
<h1>Add New Stadium</h1>
</div>
<form action="/s" method="post">
  @csrf
  <div class="form-group">
    <label for="rowst">Number of rows in stadium</label>
    <input type="integer" class="form-control" id="rowst " name="rows">
  </div>
  <div class="form-group">
    <label for="columnst">Number of seats per row in stadium</label>
    <input type="integer" class="form-control" id="columnst" name="columns" >
  </div>
  <div class="form-group">
    <label for="location">location</label>
    <input type="text" class="form-control" name="location" id="location" placeholder="Nasr City">
  </div>

  <button type="submit" class="btn btn-primary">Add Stadium</button>
</form>
</div>
@endsection