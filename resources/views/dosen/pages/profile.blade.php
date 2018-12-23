@extends('template.master')
	@section('title', 'Dashboard')

	@section('styles')
		<link rel="stylesheet" href="{{ asset('css/style-profile.css') }}">
	@endsection

	@section('content')
		{{-- Dashboard --}}
		<div class="container-fluid">
			<nav aria-label="breadcrumb" class="wrap-breadcrumb">
			  <ol class="breadcrumb bg-light">
			    <li class="breadcrumb-item active" aria-current="page">Profil</li>
			  </ol>
			</nav>
			
			{{-- Profile --}}
			<div class="row shadow-sm rounded wrap-profile mx-1">
				<div class="col-md-3">
					<img src="{{ asset('img/dosen/1234567890.jpeg') }}" width="200" alt="Responsive image" class="img-fluid mx-auto d-block my-4">
					<hr>
				</div>
				<div class="col-md-9">
					
				</div>
			</div>
		</div>
	@endsection