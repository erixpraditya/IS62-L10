@extends('layout.master')
@section('title')
Galeri Foto
@endsection
@section('MenuGal','active')

@section('konten')
    <div class="container text-center mt-3 bg-white">
        <h2 class="mb-3">Galeri Foto</h2>
        <div class="row">
            <div class="col-4">
                <img src="{{asset('/image/halaman 1.png')}}" class="img-thumbnail img-fluid" alt="">
            </div>

            <div class="col-4">
                <img src="{{asset('/image/halaman 2.png')}}" class="img-thumbnail img-fluid" alt="">
            </div>

            <div class="col-4">
                <img src="{{asset('/image/halaman 3.png')}}" class="img-thumbnail img-fluid" alt="">
            </div>

            <div class="col-4">
                <img src="{{asset('/image/halaman 4.png')}}" class="img-thumbnail img-fluid" alt="">
            </div>

            <div class="col-4">
                <img src="{{asset('/image/halaman 5.png')}}" class="img-thumbnail img-fluid" alt="">
            </div>

            <div class="col-4">
                <img src="{{asset('/image/halaman 6.png')}}" class="img-thumbnail img-fluid" alt="">
            </div>
        </div>

        {{-- konten --}}
    </div>
    @endsection
