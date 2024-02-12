@extends('barangs.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Barangs Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Nama : {{ $barangs->nama }}</h5>
        <p class="card-text">Jumlah : {{ $barangs->jumlah }}</p>
        <p class="card-text">Harga : {{ $barangs->harga }}</p>
  </div>
    </hr>
  </div>
</div>