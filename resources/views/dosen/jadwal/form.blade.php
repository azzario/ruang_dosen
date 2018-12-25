<form action="{{ Request::is('jadwal/create') ? url('/jadwal/store/dosen') : url('/jadwal/'.isset($jadwal->id).'/update/dosen') }}" method="post">
	<input type="hidden" value="{{ csrf_token() }}" name="_token">
	@if(!Request::is('jadwal/create'))
		<input type="hidden" value="PUT" name="method">
	@endif
	<div class="row justify-content-md-center">
		<div class="col-md-5 bg-white rounded shadow-sm p-3">
			<div class="form-group">
				<label for="id_kelas" class="col-form-label col-form-label-sm">Kelas</label>
				<select id="id_kelas" name="id_kelas" class="form-control {{ $errors->has('id_kelas') ? 'is-invalid' : '' }}">
					@foreach($kelas as $data)
					<option {{ (!Request::is('jadwal/create') && isset($jadwal->id_kelas) && $jadwal->id_kelas == $data->id) ? 'selected' : '' }} value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
					@endforeach
				</select>
				@if($errors->has('id_kelas'))
					<small class="form-text text-muted">{{ $errors->first('id_kelas') }}</small>
				@endif
			</div>
			<div class="form-group">
				<label for="label" class="col-form-label col-form-label-sm">Label</label>
				<input id="label" type="text" class="form-control {{ $errors->has('label') ? 'is-invalid' : '' }}" name="label" value="{{ (!Request::is('jadwal/create') && isset($jadwal->label)) ? $jadwal->label : old('label') }}">
				@if($errors->has('label'))
					<small class="form-text text-muted">{{ $errors->first('label') }}</small>
				@endif
			</div>
			<div class="form-group">
				<label for="id_matkul" class="col-form-label col-form-label-sm">Mata Kuliah</label>
				<select id="id_matkul" name="id_matkul" class="form-control {{ $errors->has('id_matkul') ? 'is-invalid' : '' }}">
					@foreach($matkul_dosen as $data)
					<option {{ (!Request::is('jadwal/create') && isset($jadwal->id_matkul) && $jadwal->id_matkul == $data->id) ? 'selected' : '' }} value="{{ $data->id_matkul }}">{{ $data->matkul->nama_matkul }}</option>
					@endforeach
				</select>
				@if($errors->has('id_matkul'))
					<small class="form-text text-muted">{{ $errors->first('id_matkul') }}</small>
				@endif
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="sks" class="col-form-label col-form-label-sm">Sks</label>
						<input id="sks" type="text" class="form-control {{ $errors->has('sks') ? 'is-invalid' : '' }}" name="sks" value="{{ (!Request::is('jadwal/create') && isset($jadwal->sks)) ? $jadwal->sks : old('sks') }}">
						@if($errors->has('sks'))
							<small class="form-text text-muted">{{ $errors->first('sks') }}</small>
						@endif
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="hari" class="col-form-label col-form-label-sm">Hari</label>
						<select name="hari" id="hari" class="form-control {{ $errors->has('hari') ? 'is-invalid' : '' }}">
							<option {{ (!Request::is('jadwal/create') && isset($jadwal->hari) && $jadwal->hari == 'senin') ? 'selected' : '' }} value="senin">Senin</option>
							<option {{ (!Request::is('jadwal/create') && isset($jadwal->hari) && $jadwal->hari == 'selasa') ? 'selected' : '' }} value="selasa">Selasa</option>
							<option {{ (!Request::is('jadwal/create') && isset($jadwal->hari) && $jadwal->hari == 'rabu') ? 'selected' : '' }} value="rabu">Rabu</option>
							<option {{ (!Request::is('jadwal/create') && isset($jadwal->hari) && $jadwal->hari == 'kamis') ? 'selected' : '' }} value="kamis">Kamis</option>
							<option {{ (!Request::is('jadwal/create') && isset($jadwal->hari) && $jadwal->hari == 'jumat') ? 'selected' : '' }} value="jumat">Jumat</option>
							<option {{ (!Request::is('jadwal/create') && isset($jadwal->hari) && $jadwal->hari == 'sabtu') ? 'selected' : '' }} value="jumat">Sabtu</option>
						</select>
						@if($errors->has('hari'))
							<small class="form-text text-muted">{{ $errors->first('hari') }}</small>
						@endif
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="jam_mulai" class="col-form-label col-form-label-sm">Jam</label>
				<input id="jam_mulai" type="text" class="form-control {{ $errors->has('jam_mulai') ? 'is-invalid' : '' }}" name="jam_mulai" placeholder="12:30" value="{{ (!Request::is('jadwal/create') && isset($jadwal->jam_mulai)) ? $jadwal->jam_mulai : old('jam_mulai') }}">
				@if($errors->has('jam_mulai'))
					<small class="form-text text-muted">{{ $errors->first('jam_mulai') }}</small>
				@endif
			</div>
			<button type="submit" class="btn btn-block btn-outline-success">Simpan</button>
			<a href="{{ URL::previous() }}" class="btn btn-block btn-outline-danger">Batal</a>
		</div>
	</div>
</form>