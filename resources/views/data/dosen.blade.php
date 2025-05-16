@extends('layout.master')
@section('title')
    Data Dosen
@endsection
@section('menudos')
    active
@endsection

@section('konten')
<div class="container text-center mt-3 bg-white">
  <h2 class="mb-3">Data Dosen</h2>
  <div class="row">
      <div class="m-auto col-8">
        <ol class="list-group">
            @forelse ($data_dos as $dosen)
            <li class="list-group-item">{{$dosen}}</li>
            @empty
            <div class="alert alert-secondary" role="alert">
                Maaf data dosen tidak tersedia!
              </div>
            @endforelse
          </ol>
      </div>
@endsection
