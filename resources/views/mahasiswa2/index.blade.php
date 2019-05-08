@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content.center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Prodi</div>

				<div class="card-body">
					<a href="/mahasiswa2/new" class="btn btn-primary">Buat Mahasiswa Baru</a>
					<table class="table table-striped">
						<tr>
							<th>Foto</th>
							<th>NIM</th>
							<th>Nama</th>
							<th>Prodi</th>
							<th>Status</th>
							<th>Tanggal Lahir</th>
							<th>Action</th>
						</tr>
						@foreach($mahasiswa2s as $mhs)
						<tr>
							<td><img style="height:50px;" src="foto/{{$mhs->foto}}" /></td>
							<td>{{ $mhs->nim }}</td>
							<td>{{ $mhs->nama }}</td>
							<td>{{ $mhs->prodi->nama }}</td>
							<td>{{ $mhs->status }}</td>
							<td>{{ $mhs->tgl_lahir }}</td>
							<td>
								<a href="/mahasiswa2/edit/{{ $mhs->id }}" class="btn btn-primary btn-sm">Edit</a>
								<form action="/mahasiswa2/delete/{{$mhs->id}}" method="post">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-danger btn-sm">Hapus</button>
									
								</form>
									
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