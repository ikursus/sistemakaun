@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

        	@include('layouts/alerts')

<form method="POST" action="{{ route('users.store') }}">

@csrf

            <div class="card">
                <div class="card-header">BORANG TAMBAH USER</div>

                <div class="card-body">

<div class="form-group">
	<label for="nama_staff">NAMA STAFF</label>
	<input type="text" name="nama_staff" class="form-control">
</div>

<div class="form-group">
	<label for="username">USERNAME</label>
	<input type="text" name="username" class="form-control">
</div>

<div class="form-group">
	<label for="no_staf">NO STAFF</label>
	<input type="text" name="no_staf" class="form-control">
</div>

<div class="form-group">
	<label for="email">EMAIL</label>
	<input type="email" name="email" class="form-control">
</div>

<div class="form-group">
	<label for="password">PASSWORD</label>
	<input type="password" name="password" class="form-control">
</div>
				</div>
				<div class="card-footer">
					<a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
					<button type="submit" class="btn btn-primary float-right">Simpan</button>
				</div>
            </div>
</form>

        </div>

    </div>
</div>
@endsection