@extends('template.master')
	@section('title', 'Edit '.$jadwal->label)

	@section('content')
		{{-- Dashboard --}}
		<div class="container-fluid">
			<nav aria-label="breadcrumb" class="wrap-breadcrumb">
			  <ol class="breadcrumb bg-light">
			    <li class="breadcrumb-item" aria-current="page">Kelas</li>
			    <li class="breadcrumb-item active" aria-current="page">Edit {{ $jadwal->label }}</li>
			  </ol>
			</nav>
			<div class="row pb-2">
				<div class="col-md-6">
					<h3 class="display-4">Edit {{ $jadwal->label }}</h3>
				</div>
			</div>
			{{-- Form --}}
			@include('dosen.jadwal.form')
		</div>
	@endsection