@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Buat Prodi Baru</div>
				<div class="card-body">
					<form action="{{ url('/prodi/new') }}" method="post">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Kode Prodi</label>
						<input type="text" name="kode" class="form-control">
					</div>
					<div class="form-group">
						<label>Nama Prodi</label>
						<input type="text" name="nama" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection