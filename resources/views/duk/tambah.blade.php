@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

        	@include('layouts/alerts')

<form method="POST" action="{{ route('duk.store') }}">

@csrf

            <div class="card">
                <div class="card-header">BORANG TAMBAH DATA UNIT KEWANGAN</div>

                <div class="card-body">


<div class="form-group">
	<label for="daripada">DARIPADA</label>
	<input type="text" name="daripada" class="form-control">
</div>

<div class="form-group">
	<label for="bayar_kepada">BAYAR_KEPADA</label>
	<input type="text" name="bayar_kepada" class="form-control">
</div>

<div class="form-group">
	<label for="keterangan">KETERANGAN</label>
	<input type="text" name="keterangan" class="form-control">
</div>

<div class="form-group">
	<label for="bahagian_unit">BAHAGIAN/UNIT</label>
	<input type="text" name="bahagian_unit" class="form-control">
</div>

<div class="form-group">
	<label for="tarikh_memo">TARIKH MEMO</label>
	<input type="date" name="tarikh_memo" class="form-control">
</div>

<div class="form-group">
	<label for="rujukan_fail_memo">RUJUKAN FAIL (MEMO)</label>
	<input type="text" name="rujukan_fail_memo" class="form-control">
</div>

<div class="form-group">
	<label for="peringkat">PERINGKAT</label>
	<input type="text" name="peringkat" class="form-control">
</div>

<div class="form-group">
	<label for="jenis_bank">JENIS BANK</label>
	<input type="text" name="jenis_bank" class="form-control">
</div>

<div class="form-group">
	<label for="no_akaun_bank">NO AKAUN BANK</label>
	<input type="text" name="no_akaun_bank" class="form-control">
</div>

<div class="form-group">
	<label for="debit">DEBIT</label>
	<div class="input-group">
        <div class="input-group-prepend">
			<div class="input-group-text">RM</div>
        </div>
        <input type="text" name="debit" class="form-control">
  	</div>
</div>

<div class="form-group">
	<label for="kredit">KREDIT</label>
	<div class="input-group">
        <div class="input-group-prepend">
			<div class="input-group-text">RM</div>
        </div>
        <input type="text" name="kredit" class="form-control">
  	</div>

</div>

<div class="form-group">
	<label for="jenis_akaun">PILIH AKAUN</label>
	<select name="jenis_akaun" class="form-control">
		<option value="account_1">ACC 1</option>
		<option value="account_2">ACC 2</option>
		<option value="account_3">ACC 3</option>
		<option value="account_4">ACC 4</option>
	</select>
</div>

<div class="form-group">
	<label for="no_baucar">NO BAUCAR</label>
	<input type="text" name="no_baucar" class="form-control">
</div>

<div class="form-group">
	<label for="tarikh_baucar">TARIKH BAUCAR</label>
	<input type="date" name="tarikh_baucar" class="form-control">
</div>

<div class="form-group">
	<label for="no_invois">NO INVOIS</label>
	<input type="text" name="no_invois" class="form-control">
</div>

<div class="form-group">
	<label for="tarikh_invois">TARIKH INVOIS</label>
	<input type="date" name="tarikh_invois" class="form-control">
</div>

<div class="form-group">
	<label for="no_cek">NO CEK</label>
	<input type="text" name="no_cek" class="form-control">
</div>

<div class="form-group">
	<label for="tahun">PILIH TAHUN</label>
	<select name="tahun" class="form-control">
		<option value="2017">2017</option>
		<option value="2018">2018</option>
		<option value="2019">2019</option>
		<option value="2020">2020</option>
	</select>
</div>
				</div>
				<div class="card-footer">
					<a href="{{ route('dashboard') }}" class="btn btn-secondary">Kembali</a>
					<button type="submit" class="btn btn-primary float-right">Simpan</button>
				</div>
            </div>
</form>

        </div>

    </div>
</div>
@endsection
