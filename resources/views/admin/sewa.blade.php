@extends('layout.admin')
@section('content')
		<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class=""></span>
										<p>
											<span class="title"><b>Nama:</b><br></span>
											<span class="title">Syachrul Aqmal</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class=""></span>
										<p>
											<span class="title"><b>Jurusan:</b><br></span>
											<span class="title">Pendidikan Teknik Informatika</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class=""></span>
										<p>
											<span class="title"><b>Judul:</b><br></span>
											<span class="title">Pengembangan Sistem Penyewaan KOST Berbasis WEB</span>
										</p>
									</div>
								</div>
																</div>
							</div>
							<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class=""></span>
										<p>
												<span class="title"><b>NIM:</b><br></span>
											<span class="Number">1815051029</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class=""></span>
										<p>
											<span class="title"><b>Penjelasan:</b><br></span>
											<span class="title">Tujuan Pembuatan Sistem Ini Ialah Untuk Memanajemen Penyewaan dan Pembayaran Kost</span>
										</p>
									</div>
								</div>
			<div class="col-lg-12">
				<a href="{{route('sewa.create')}}">Tambah Data</a>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th><th>ID Kamar</th><th>Fasilitas</th><th>Status</th><th>Harga Sewa</th><th>Opsi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($sewakost as $in=>$val) 
							<tr>
								<td>{{$in+1}}</td><td>{{$val->id_kamar}}</td><td>{{$val->fasilitas}}</td><td>{{$val->status}}</td><td>{{$val->harga_sewa}}</td>
								<td>
									<a href="{{route('sewa.edit',$val->id_kamar)}}">Update</a>
									<form action="{{route('sewa.destroy',$val->id_kamar )}}" method="POST">
										@csrf
										@method('DELETE')
										<button type="submit">Delete</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{$sewakost->links()}}		
			</div>
		</div>							
	</div>
</div>
@endsection