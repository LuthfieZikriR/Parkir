@extends('layouts.template')

@section('title','Laporan Parkir')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Parkir</h4>
						<p class="card-subtitle">Laporan Parkir</p>
						<hr>
						<table class="table table-border table-striped table-hover" id="example23">
							<thead>
								<tr>
									<td>No</td>
									<td>Plat Nomor</td>
									<td>Nama Kendaraan</td>
									<td>Jenis Kendaraan</td>
									<td>Jam Masuk</td>
									<td>Jam Keluar</td>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $datas)
								<tr>
									<td>{{ $no++ }}</td>
									<td>{{ $datas->plat_nomor }}</td>
									<td>{{ $datas->nama_kendaraan }}</td>
									<td>{{ $datas->jenis }}</td>
									<td>{{ $datas->created_at }}</td>
									<td>{{ $datas->jam_keluar }}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop