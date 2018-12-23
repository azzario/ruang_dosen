@extends('template.master')
	@section('title', 'Beranda')

	@section('content')
		{{-- Dashboard --}}
		<div class="container-fluid">
			<nav aria-label="breadcrumb" class="wrap-breadcrumb">
			  <ol class="breadcrumb bg-light">
			    <li class="breadcrumb-item active" aria-current="page">Beranda</li>
			  </ol>
			</nav>
			<h3 class="display-4">Selamat Siang Pak {{ strtok(Auth::user()->nama, ' ') }}</h3>
			<div class="row wrap-card">
				<div class="col-md-4 card-20">
					<div class="card">
					  <div class="card-header">
					  	Kelas
					  </div>
					  <div class="card-body">
					    <p class="card-text">Hari ini ada jadwal 2 kelas.</p>
					    <a href="" class="btn btn-block btn-outline-success">Lihat Kelas</a>
					  </div>
					</div>
				</div>
				<div class="col-md-4 card-20">
					<div class="card">
					  <div class="card-header">
					  	Ulangan
					  </div>
					  <div class="card-body">
					    <p class="card-text">Hari ini tidak ada ulangan.</p>
					    <a href="" class="btn btn-block btn-outline-success">Buat Jadwal Ulangan</a>
					  </div>
					</div>
				</div>
				<div class="col-md-4 card-20">
					<div class="card">
					  <div class="card-header">
					  	Materi
					  </div>
					  <div class="card-body">
					    <p class="card-text">Ada 10 materi yang belum digunakan untuk 2 kelas.</p>
					    <a href="" class="btn btn-block btn-outline-success">Lihat Materi</a>
					  </div>
					</div>
				</div>
			</div>
		</div>
	@endsection