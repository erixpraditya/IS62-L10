@extends('layout.master')
@section('title')
    Galeri
@endsection
@section('menugal')
    active
@endsection

@section('konten')
<div class="container text-center mt-3 bg-white">
  <h2 class="mb-3">Galeri Foto</h2>
  <div class="row">
      <div class="m-auto col-4">
          <img src="{{ asset('/img/k1.jpg')}}" class="img-thumbnail img-fluid" alt="">
      </div>
      <div class="m-auto col-4">
          <img src="{{ asset('/img/k2.jpg')}}" class="img-thumbnail img-fluid" alt="">
      </div>
      <div class="m-auto col-4">
          <img src="{{ asset('/img/k3.jpg')}}" class="img-thumbnail img-fluid" alt="">
      </div>
      <div class="m-auto col-4">
          <img src="{{ asset('/img/k4.jpg')}}" class="img-thumbnail img-fluid" alt="">
      </div>
      <div class="m-auto col-4">
          <img src="{{ asset('/img/k5.jpg')}}" class="img-thumbnail img-fluid" alt="">
      </div>
      <div class="m-auto col-4">
          <img src="{{ asset('/img/k6.jpg')}}" class="img-thumbnail img-fluid" alt="">
      </div>
@endsection
