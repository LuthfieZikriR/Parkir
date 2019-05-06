@extends('layouts.template')

@section('title','DASHBOARD')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Dashboard <i>TumPark</i></h4>
						<p class="card-subtitle">Semua data web aplikasi PARKIR</p>
						<hr>
						<div class="row">
							<div class="col-sm-4">
								<div class="card card-info card-inverse">
									<div class="box text-center">
										<h1 class="font-light text-white">{{$terparkir}}</h1>
										<h6 class="text-white">Kendaraan Terparkir</h6>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="card card-success card-inverse">
									<div class="box text-center">
										<h1 class="font-light text-white">{{$today}}</h1>
										<h6 class="text-white">Data Parkir Hari ini</h6>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="card card-dark card-inverse">
									<div class="box text-center">
										<h1 class="font-light text-white">150</h1>
										<h6 class="text-white">Rekapan Data Parkir</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
