@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content.center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Prodi</div>

				<div class="card-body">
					<a href="/prodi/new" class="btn btn-primary">Buat Prodi Baru</a>
					<table class="table table-striped">
						<tr>
							<th>Kode</th>
							<th>Nama</th>
							<th>Action</th>
						</tr>
						@foreach($prodis as $prodi)
						<tr>
							<td>{{ $prodi->kode }}</td>
							<td>{{ $prodi->nama }}</td>
							<td>
								<a href="/prodi/edit/{{ $prodi->id }}" class="btn btn-primary btn-sm">Edit</a>
								<form action="/prodi/delete/{{$prodi->id}}" method="post">
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