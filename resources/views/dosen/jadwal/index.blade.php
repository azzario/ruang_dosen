@extends('template.master')
	@section('title', 'Jadwal')

	@section('content')
		{{-- Dashboard --}}
		<div class="container-fluid">
			<nav aria-label="breadcrumb" class="wrap-breadcrumb">
			  <ol class="breadcrumb bg-light">
			    <li class="breadcrumb-item active" aria-current="page">Jadwal</li>
			  </ol>
			</nav>
			<div class="row pb-2">
				<div class="col-md-6">
					<h3 class="display-4">Data Jadwal</h3>
				</div>
				<div class="col-md-6">
					<a href="{{ url('/jadwal/create/dosen') }}" class="btn btn-outline-primary float-md-right">Tambah Data</a>
				</div>
			</div>
			<div class="row mx-1">
				<div class="col-md-12 rounded mb-2 py-3 bg-white wrap-table table-responsive">
				@if($jadwal->count() > 0)
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Label</th>
								<th scope="col">Kelas</th>
								<th scope="col">Sks</th>
								<th scope="col">Hari</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($jadwal as $i => $data)
							<tr>
								<td>{{ ++$i }}</td>
								<td>{{ $data->label }}</td>
								<td>{{ $data->sks }}</td>
								<td>30</td>
								<td>Senin</td>
								<td>
									<button class="btn btn-sm btn-outline-info">Detail</button>
									<button class="btn btn-sm btn-outline-danger">Hapus</button>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				@else
				<div class="no-data text-center">
					<h3 class="display-4">Belum ada data :(</h3>
					<a href="{{ url('/jadwal/create/dosen') }}" class="btn btn-outline-primary">Tambah Data Sekarang</a>
				</div>
				@endif
				</div>
				{{ $jadwal->links('template.pagination') }}
			</div>
		</div>
	@endsection