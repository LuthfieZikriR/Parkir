@extends('layouts.template')

@section('title','Input Parkir')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Input Parkir</h4>
						<p class="card-subtitle">Isi Data Dengan Baik Dan Benar</p>
						<hr>
						<form action="{{ url('parkir/save')}}" method="post">
							@csrf
							<div class="form-group">
								<label for="">Plat Nomor</label>
								<input type="text" maxlength="8" name="plat_nomor" class="form-control" value="{{old('plat_nomor')}}">
							</div>
							<div class="form-group">
								<label for="">Jenis Kendaraan</label>
								<select name="jenis" class="form-control">
									<option value="">Pilih Jenis</option>
									<option value="motor">Motor</option>
									<option value="mobil">Mobil</option>
								</select>
							</div>
							<div class="form-group">
								<label for="">Nama Kendaraan</label>
								<input type="text" maxlength="10" name="nama_kendaraan" class="form-control" value="{{old('nama_kendaraan')}}">
							</div>
							<button class="btn btn-success">Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop