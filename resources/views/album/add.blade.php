@extends('layouts.app') 

@section('content') 

<div class="container"> 

<h3>Tambah Data Album Desa</h3> 
<form action="{{ url('/album') }}" method="POST"> 
@csrf 
<div class="form-group">
    <label form="">ID DESA</label>
    <input type="text" name="id" class="form-control">
</div>
<div class="form-group">
    <label form="">NAMA KEPALA DESA</label>
    <input type="text" name="name" class="form-control">
</div>
<div class="form-group">
    <label form="">ALAMAT</label>
    <input type="text" name="text" class="form-control">
</div>
<div class="form-group">
    <label form="">CONTACT</label>
    <textarea name="photo_id" class="form-control"></textarea>
</div>
<div class="form-group">
    <input type="submit" value="SIMPAN" class="btn btn-primary">
</div>
</form> 
</div> 
@endsection