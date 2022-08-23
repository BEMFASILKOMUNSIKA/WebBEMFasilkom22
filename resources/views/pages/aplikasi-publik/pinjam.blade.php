@extends('layouts.app')

@section('title')
Pinjam BEM | Kabinet Catralingga
@endsection

@section('content')

<div class="container" data-aos="fade-up">
<section id="pinjam-bem" class="pinjam-bem">
    <header class="section-header mt-5 fw-bold">
        <p>WELCOME TO BEMITORY</p>
      </header>
    <div class="row mt-4 text-center">
        <div class="col-md-12 d-flex justify-content-center">
            <img src="{{ url('frontend/assets/img/bemitory/bg-landing.png') }}" style="width: 50%;">
        </div>
        <div class="col-lg-15 justify-content-center mt-5">
            <div class="tombol-pengaduan">
              <button onclick="pengaduanTerkirim()" type="submit" class="btn btn-success" style="width: 20%">Mulai Pinjam Barang</button>
    </div>
</section>
</div>
@endsection