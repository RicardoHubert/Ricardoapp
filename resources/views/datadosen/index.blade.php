@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content.center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Data Dosen</div>
						
				<div class="card-body">
					<a href="/datadosen/new" class="btn btn-primary">Tambah Dosen</a>
					<table class="table table-striped">
						<tr>
							<th>Kode</th>
							<th>Nama</th>
							<th>Action</th>
						</tr>
						@foreach($datadosens as $datadosen)
						<tr>
							<td>{{ $datadosen->kode }}</td>
							<td>{{ $datadosen->nama }}</td>
							<td>
								<a href="/datadosen/edit/ {{ $datadosen->id }}" class="btn btn-primary btn-sm">Edit Data Dosen</a>
								<form action="/datadosen/delete/{{$datadosen->id}}" method="post">
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