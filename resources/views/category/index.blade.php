@extends('layouts.app')

@section('content')
<div class="container"> 
<h3> 
    CATEGORY WISATA DESA / KOTA KISARAN
    <a href="{{ url('/category/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
</h3>

<table class="table table-bordered"> 
<tr> 
    <th>ID DESA WISATA</th> 
    <th>NAMA LOKASI TEMPAT</td> 
    <th>ALAMAT LOKASI</th> 
    <th>EDIT</th> 
    <th>DELETE</th> 
    </tr> 
     @foreach ($rows as $row) 
     <tr> 
         <td>{{ $row->id }}</td> 
         <td>{{ $row->name}}</td> 
         <td>{{ $row->text}}</td> 
         <td><a href="{{ url('category/' . $row->id . '/edit') }}" class="btn btn-primary btn-sm ">Edit</a></td>
         <td>
         <form action="{{ url('/category/' . $row->id) }}" method="POST">
         <input name="_method" type="hidden" value="DELETE">
         @csrf
         <button class="btn btn-danger btn-sm ">DELETE</button>
         </form>
         </td>
         </tr> 
          @endforeach 
          </table> 
          </div>
@endsection