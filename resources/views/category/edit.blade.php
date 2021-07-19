@extends('layouts.app')

 @section('content') 
 <div class="container"> 
<h3>Edit Data category</h3>
<form action="{{ url('/category/' . $row->id) }}" method="POST">
<input name="_method" type="hidden" value="PATCH">
@csrf 
<div class="form-group">
    <label form="">ID DESA WISATA </label>
    <input type="text" name="id" class="form-control" value="{{ $row->id }}">
</div>
<div class="form-group">
    <label form="">NAMA LOKASI TEMPAT</label>
    <input type="text" name="name" class="form-control" value="{{ $row->name}}">
</div>
<div class="form-group">
    <label form="">ALAMAT LOKASI</label>
    <input type="text" name="text" class="form-control" value="{{ $row->text}}">
</div>
<div class="form-group">
    <input type="submit" value="UPDATE" class="btn btn-primary">
</div>
</form> 
</div> 
@endsection