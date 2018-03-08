@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

        	@include('layouts/alerts')

          <form method="POST" action="{{ route('duk.update', ['id' => $duk->id]) }}">

          @csrf

          <input type="hidden" name="_method" value="PATCH">

            <div class="card">
                <div class="card-header">BORANG TAMBAH DATA UNIT KEWANGAN</div>

                <div class="card-body">

<div class="form-group">
	<label for="daripada">DARIPADA</label>
	<input type="text" name="daripada" class="form-control" value="{{ $duk->daripada }}">
</div>

<div class="form-group">
	<label for="bayar_kepada">BAYAR_KEPADA</label>
	<input type="text" name="bayar_kepada" class="form-control" value="{{ $duk->bayar_kepada }}">
</div>

<div class="form-group">
	<label for="keterangan">KETERANGAN</label>
	<input type="text" name="keterangan" class="form-control" value="{{ $duk->keterangan }}">
</div>

<div class="form-group">
	<label for="bahagian_unit">BAHAGIAN/UNIT</label>
	<input type="text" name="bahagian_unit" class="form-control" value="{{ $duk->bahagian_unit }}">
</div>

<div class="form-group">
	<label for="tarikh_memo">TARIKH MEMO</label>
	<input type="date" name="tarikh_memo" class="form-control" value="{{ $duk->tarikh_memo }}">
</div>

<div class="form-group">
	<label for="rujukan_fail_memo">RUJUKAN FAIL (MEMO)</label>
	<input type="text" name="rujukan_fail_memo" class="form-control" value="{{ $duk->rujukan_fail_memo }}">
</div>

<div class="form-group">
	<label for="peringkat">PERINGKAT</label>
	<input type="text" name="peringkat" class="form-control" value="{{ $duk->peringkat }}">
</div>

<div class="form-group">
	<label for="jenis_bank">JENIS BANK</label>
	<input type="text" name="jenis_bank" class="form-control" value="{{ $duk->jenis_bank }}">
</div>

<div class="form-group">
	<label for="no_akaun_bank">NO AKAUN BANK</label>
	<input type="text" name="no_akaun_bank" class="form-control" value="{{ $duk->no_akaun_bank }}">
</div>

<div class="form-group">
	<label for="debit">DEBIT</label>
	<div class="input-group">
        <div class="input-group-prepend">
			<div class="input-group-text">RM</div>
        </div>
        <input type="text" name="debit" class="form-control" value="{{ $duk->debit }}">
  	</div>
</div>

<div class="form-group">
	<label for="kredit">KREDIT</label>
	<div class="input-group">
        <div class="input-group-prepend">
			<div class="input-group-text">RM</div>
        </div>
        <input type="text" name="kredit" class="form-control" value="{{ $duk->kredit }}">
  	</div>

</div>

<div class="form-group">
	<label for="jenis_akaun">PILIH AKAUN</label>
	<select name="jenis_akaun" class="form-control">
		<option value="account_1"{{ $duk->jenis_akaun == 'account_1' ? ' selected=selected' : null }}>ACC 1</option>
		<option value="account_2"{{ $duk->jenis_akaun == 'account_2' ? ' selected=selected' : null }}>ACC 2</option>
		<option value="account_3"{{ $duk->jenis_akaun == 'account_3' ? ' selected=selected' : null }}>ACC 3</option>
		<option value="account_4"{{ $duk->jenis_akaun == 'account_4' ? ' selected=selected' : null }}>ACC 4</option>
	</select>
</div>

<div class="form-group">
	<label for="no_baucar">NO BAUCAR</label>
	<input type="text" name="no_baucar" class="form-control" value="{{ $duk->no_baucar }}">
</div>

<div class="form-group">
	<label for="tarikh_baucar">TARIKH BAUCAR</label>
	<input type="date" name="tarikh_baucar" class="form-control" value="{{ $duk->tarikh_baucar }}">
</div>

<div class="form-group">
	<label for="no_invois">NO INVOIS</label>
	<input type="text" name="no_invois" class="form-control" value="{{ $duk->no_invois }}">
</div>

<div class="form-group">
	<label for="tarikh_invois">TARIKH INVOIS</label>
	<input type="date" name="tarikh_invois" class="form-control" value="{{ $duk->tarikh_invois }}">
</div>

<div class="form-group">
	<label for="no_cek">NO CEK</label>
	<input type="text" name="no_cek" class="form-control">
</div>

<div class="form-group">
	<label for="no_kelompok">NO KELOMPOK</label>
	<input type="text" name="no_kelompok" class="form-control">
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
					<a href="{{ route('dashboard') }}" class="btn btn-secondary">Kembali ke Dashboard</a>
          <a href="{{ route('akaun.show', ['id' => $duk->jenis_akaun]) }}" class="btn btn-info">Kembali Detail Akaun</a>
          <button type="submit" class="btn btn-primary float-right">Update</button>
				</div>
    </div><!-- Tutup div.card -->
</form>
        </div>

    </div>
</div>
@endsection
