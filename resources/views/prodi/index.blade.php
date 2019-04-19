@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content-header')
	<h1>Prodi</h1>
@stop

@section('content')

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
@stop