@extends('barangs.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Barang</div>
  <div class="card-body">
       
      <form action="{{ url('barang/' .$barangs->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$barangs->id}}" id="id" />
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" value="{{$barangs->nama}}" class="form-control"></br>
        <label>Jumlah</label></br>
        <input type="text" name="jumlah" id="jumlah" value="{{$barangs->jumlah}}" class="form-control"></br>
        <label>Harga</label></br>
        <input type="text" name="harga" id="harga" value="{{$barangs->harga}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop