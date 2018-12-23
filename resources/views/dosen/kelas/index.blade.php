@extends('template.master')
	@section('title', 'Kelas')

	@section('content')
		{{-- Dashboard --}}
		<div class="container-fluid">
			<nav aria-label="breadcrumb" class="wrap-breadcrumb">
			  <ol class="breadcrumb bg-light">
			    <li class="breadcrumb-item active" aria-current="page">Kelas</li>
			  </ol>
			</nav>
			<div class="row pb-2">
				<div class="col-md-6">
					<h3 class="display-4">Data Kelas</h3>
				</div>
				<div class="col-md-6">
					<button class="btn btn-outline-primary float-md-right">Tambah Data</button>
				</div>
			</div>
			<div class="row mx-1">
				<div class="col-md-12 rounded mb-2 py-3 bg-white wrap-table table-responsive">
				@if($kelas->count() > 0)
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Kelas</th>
								<th scope="col">Prodi</th>
								<th scope="col">Total Mahasiswa</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($kelas as $i => $data)
							<tr>
								<td>{{ ++$i }}</td>
								<td>{{ $data->nama_kelas }}</td>
								<td>{{ $data->prodi->nama_prodi }}</td>
								<td>30</td>
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
					<button class="btn btn-outline-primary">Tambah Data Sekarang</button>
				</div>
				@endif
				</div>
				{{ $kelas->links('template.pagination') }}
			</div>
		</div>
	@endsection