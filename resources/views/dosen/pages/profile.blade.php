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
			<h3 class="display-4">Data Pribadi</h3>
			{{-- Profile --}}
			<div class="row bg-white rounded wrap-profile mx-1 pb-3">
				{{-- Data pribadi --}}
				<div class="col-md-4">
					<img src="{{ asset('img/dosen/1234567890.png') }}" width="200" alt="Responsive image" class="img-fluid mx-auto d-block my-4">
					<div class="table-responsive">
						<table class="table">
							<tr>
								<th>NIDN :</th>
								<td class="pl-md-3">{{ Auth::user()->nidn }}</td>
							</tr>
							<tr>
								<th>Nama Lengkap :</th>
								<td class="pl-md-3">{{ Auth::user()->nama }}</td>
							</tr>
							<tr>
								<th>Jenis Kelamin :</th>
								<td class="pl-md-3">{{ Auth::user()->jk }}</td>
							</tr>
							<tr>
								<th>Jabatan :</th>
								<td class="pl-md-3">{{ Auth::user()->jabatan }}</td>
							</tr>
							<tr>
								<th>Tempat Tanggal Lahir :</th>
								<td class="pl-md-3">{{ Auth::user()->ttl }}</td>
							</tr>
							<tr>
								<th>Email :</th>
								<td class="pl-md-3">{{ Auth::user()->email }}</td>
							</tr>
							<tr>
								<th>Telepon :</th>
								<td class="pl-md-3">{{ Auth::user()->telepon }}</td>
							</tr>
							<tr>
								<th>Alamat :</th>
								<td class="pl-md-3"><button class="btn btn-sm btn-outline-success">Lihat</button></td>
							</tr>
						</table>
					</div>
					<button class="btn btn-block btn-outline-warning">Edit Profil</button>
				</div>
				{{-- Riwayat pendidikan & Matkul --}}
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-6">
							<p class="lead my-4">Riwayat Pendidikan</p>
						</div>
						<div class="col-md-6 my-4">
							<a href="{{ url('/jadwal/create/dosen') }}" class="btn btn-outline-primary float-md-right">Tambah</a>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">Institusi</th>
									<th scope="col">Tahun Lulus</th>
									<th scope="col">Ijazah</th>
									<th scope="col">Gelar</th>
									<th scope="col">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>SDN KAMARUNG 1</td>
									<td>2011</td>
									<td>SD</td>
									<td>-</td>
									<td>
										<button class="btn btn-sm btn-outline-warning">Edit</button>
										<button class="btn btn-sm btn-outline-danger">Hapus</button>
									</td>
								</tr>
								<tr>
									<td>SMPN 1 SUBANG</td>
									<td>2014</td>
									<td>SMP</td>
									<td>-</td>
									<td>
										<button class="btn btn-sm btn-outline-warning">Edit</button>
										<button class="btn btn-sm btn-outline-danger">Hapus</button>
									</td>
								</tr>
								<tr>
									<td>SMKN 1 SUBANG</td>
									<td>2017</td>
									<td>SMK</td>
									<td>-</td>
									<td>
										<button class="btn btn-sm btn-outline-warning">Edit</button>
										<button class="btn btn-sm btn-outline-danger">Hapus</button>
									</td>
								</tr>
								<tr>
									<td>STMIK SUBANG</td>
									<td>2022</td>
									<td>S1</td>
									<td>Skom</td>
									<td>
										<button class="btn btn-sm btn-outline-warning">Edit</button>
										<button class="btn btn-sm btn-outline-danger">Hapus</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-6">
							<p class="lead my-4">Mata Kuliah Ajar</p>
						</div>
						<div class="col-md-6 my-4">
							<a href="{{ url('/jadwal/create/dosen') }}" class="btn btn-outline-primary float-md-right">Tambah</a>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">Mata Kuliah</th>
									<th scope="col">Sks</th>
									<th scope="col">Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($matkul_dosen as $data)
								<tr>
									<td>{{ $data->matkul->nama_matkul }}</td>
									<td>-</td>
									<td>
										<button class="btn btn-sm btn-outline-warning">Edit</button>
										<button class="btn btn-sm btn-outline-danger">Hapus</button>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	@endsection