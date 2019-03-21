@extends('layouts.app')

@section('content')
<div class="container">
	<div>
		<div class="row justify-content-center">
			<div class="card-body">
				<form action="{{ url('/mahasiswa2/new')}}" method="post">
					{{ csrf_field() }}
					<div class="form-group">
						<label>NIM</label>
						<input type="text" name="nim" class="form-control">
					</div>
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" class="form-control">
					</div>
					<div class="form-group">
						<label>Prodi</label>
						<select name="prodi_id" class="form-control">
							<option value="">Pilih Prodi</option>
							@foreach($prodis as $prodi)
							<option value="{{$prodi->id}}">{{$prodi->nama}}</option>
							@endforeach
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection