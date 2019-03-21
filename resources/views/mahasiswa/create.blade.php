@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Buat Prodi Baru</div>
				<div class="card-body">
					<form action="{{ url('/mahasiswa/new') }}" method="post">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Kode Mahasiswa</label>
						<input type="text" name="kodemah" class="form-control">
					</div>
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="namamah" class="form-control">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control">
					</div>
					<div class="form-group">
						<label>NO.HP</label>
						<input type="text" name="nohp" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection