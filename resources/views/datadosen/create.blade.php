@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Tambah Dosen</div>
				<div class="card-body">
					<form action="{{ url('/datadosen/new') }}" method="post">
						{{ csrf_field() }}
						<div class="form-group">
							<label>Kode Dosen</label>
							<input type="text" name="kode" class="form-control">
						</div>
						<div class="form-group">
							<label>Nama Dosen</label>
							<input type="text" name="nama" class="form-control">
						</div>
						<button type="submit" class="btn btn-primary">Tambah</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection