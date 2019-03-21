@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Ubah Prodi</div>
				<div class="card-body">
					<form action="{{ url('/prodi/edit/' . $prodi->id) }}" method="post">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Kode Prodi</label>
						<input type="text" name="kode" value="{{$prodi->kode}} " class="form-control">
					</div>
					<div class="form-group">
						<label>Nama Prodi</label>
						<input type="text" name="nama" value="{{$prodi->nama}}" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
				</div>	
			</div>
		</div>
	</div>
</div>
@endsection