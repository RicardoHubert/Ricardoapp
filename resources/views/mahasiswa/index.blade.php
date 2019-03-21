@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content.center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Mahasiswa</div>

				<div class="card-body">
					<a href="/mahasiswa/new " class="btn btn-primary">Tambah Mahasiswa</a>
					<table class="table table-striped">
						<tr>
							<th>Kode Mahasiswa</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>No Hp</th>
							<th>Email</th>
							<th>Action</th>
						</tr>
						@foreach($mahasiswas as $mahasiswa)
						<tr>
							<td>{{ $mahasiswa->kodemah }}</td>
							<td>{{ $mahasiswa->namamah }}</td>
							<td>{{ $mahasiswa->alamat }}</td>
							<td>{{ $mahasiswa->nohp }}</td>
							<td>{{ $mahasiswa->email }}</td>
							<td>
								
							</td>
						</tr>
						@endforeach
					</table>		
				</div>
			</div>
		</div>
	</div>
</div>
@endsection