@extends('layouts.template')

@section('title','Data Parkir')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Data Parkir</h4>
						<p class="card-subtitle">Semua Data Parkir</p>
						<hr>
						<table class="table table-border table-striped table-hover" id="example23">
							<thead>
								<tr>
									<td>No</td>
									<td>Plat Nomor</td>
									<td>Nama Kendaraan</td>
									<td>Jenis Kendaraan</td>
									<td>Jam Masuk</td>
									<td>Aksi</td>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $field)
								<tr>
									<td>{{$loop->index + 1}}</td>
									<td>{{$field->plat_nomor}}</td>
									<td>{{$field->nama_kendaraan}}</td>
									<td>{{$field->jenis}}</td>
									<td>{{$field->created_at}}</td>
									<td>
										<a href="{{url('transaksi/'.$field->id)}}" class="btn btn-success">
											<i class="fa fa-sign-out"></i>
										</a>
										<a href="{{url('parkir/edit/'.$field->id)}}" class="btn btn-warning">
											<i class="fa fa-edit"></i>
										</a>
										<a href="{{url('parkir/hapus/'.$field->id)}}" class="btn btn-danger btnDelete">
											<i class="fa fa-trash"></i>
										</a>
									</td>
								</tr>
								<script>
									$(document).ready(function(){
										$('.btnDelete').on('click', function(e){
										e.preventDefault();

										var href = $(this).attr('href');

										swal({
											title: "Apakah Kamu Yakin??",
											text: "Data Akan Di Hapus Permanen",
											icon: "warning",
											buttons:true,
											dangerMode:true,
										})
										.then((willDelete)=>{
											if (willDelete){
												window.location.href = href;
											}
										});
										});
									});
								</script>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop