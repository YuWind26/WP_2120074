@extends('barangs.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Barangs</div>
  <div class="card-body">
       
      <form action="{{ url('barang') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
        <label>Jumlah</label></br>
        <input type="text" name="jumlah" id="jumlah" class="form-control"></br>
        <label>Harga</label></br>
        <input type="text" name="harga" id="harga" class="form-control"></br>
        <input type="submit" value="Simpan" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop