@extends('layouts.template')

@section('title','Transaksi')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Transaski Parkir</h4>
					<p class="card-subtitle">Form Aksi untuk melakukan transaksi</p>
					<hr>
					<form action="{{url('transaksi/bayar')}}" method="post">
						@csrf
						<input type="hidden" name="parkir_id" value="{{$new['id']}}">
						<div class="form-group">
							<label for="">Plat Nomor</label>
							<input type="text" class="form-control" value="{{$new['plat_nomor']}}" readonly>
						</div>
						<div class="form-group">
							<label for="">Nama Kendaraan</label>
							<input type="text" class="form-control" value="{{$new['nama_kendaraan']}}" readonly>
						</div>
						<div class="form-group">
							<label for="">Jenis Kendaraan</label>
							<input type="text" class="form-control" value="{{$new['jenis']}}" readonly>
						</div>
						<div class="form-group">
							<label for="">Jam Masuk</label>
							<input type="text" class="form-control" value="{{$new['jam_masuk']}}" readonly>
						</div>
						<div class="form-group">
							<label for="">Harga</label>
							<input type="text" class="form-control" name="harga" value="{{$new['harga']}}" readonly id="harga">
						</div>
						<div class="form-group">
							<label for="">Bayar</label>
							<input type="text" class="form-control" name="bayar" id="bayar" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="">kembalian</label>
							<input type="text" class="form-control" name="kembalian" readonly id="kembalian">
						</div>
						<button class="btn btn-info">Bayar</button>
					</form>
					</div>
				</div>
			</div>
		</div>		
	</div>
	<script>
		$(document).ready(function(){
			$('#bayar').keyup(function(){
				var harga = $('#harga').val();
				var total = $(this).val() - $('#harga').val();
				$('#kembalian').val(total);
			});
		});
	</script>
@stop