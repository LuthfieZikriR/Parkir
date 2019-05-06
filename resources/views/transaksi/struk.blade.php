@extends('layouts.template')

@section('title','struk')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card-body">
					<h4 class="card-title">Struk</h4>
					<p class="card-subtitle">Tanggal : {{date("Y-m-d")}}</p>
					<table class="table">
						@foreach($data_all as $val)
						<thead>
							<tr>
								<td>Plat Nomor</td>
								<td>:</td>
								<td>{{$val->plat_nomor}}</td>
							</tr>
							<tr>
								<td>Total</td>
								<td>:</td>
								<td>{{$val->total}}</td>
							</tr>
							<tr>
								<td>Bayar</td>
								<td>:</td>
								<td>{{$val->bayar}}</td>
							</tr>
							<tr>
								<td>Kembalian</td>
								<td>:</td>
								<td>{{$val->kembalian}}</td>
							</tr>
						</thead>
						@endforeach
					</table>
					<button class="btn btn-info" onclick="window.print()">Cetak Struk <i class="fa fa-print"></i></button>
					<a href="{{url('parkir/data')}}" class="btn btn-danger">Kembali</a>
				</div>
			</div>
		</div>
	</div>
@endsection