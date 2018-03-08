@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

        	@include('layouts/alerts')

            <div class="card">
                <div class="card-header">BORANG TAMBAH DATA UNIT KEWANGAN</div>

                <div class="card-body">


<div class="form-group">
	<label for="daripada">DARIPADA</label>
	<input type="text" name="daripada" class="form-control" value="{{ $duk->daripada }}" disabled="disabled">
</div>

<div class="form-group">
	<label for="bayar_kepada">BAYAR_KEPADA</label>
	<input type="text" name="bayar_kepada" class="form-control" value="{{ $duk->bayar_kepada }}" disabled="disabled">
</div>

<div class="form-group">
	<label for="keterangan">KETERANGAN</label>
	<input type="text" name="keterangan" class="form-control" value="{{ $duk->keterangan }}" disabled="disabled">
</div>

<div class="form-group">
	<label for="bahagian_unit">BAHAGIAN/UNIT</label>
	<input type="text" name="bahagian_unit" class="form-control" value="{{ $duk->bahagian_unit }}" disabled="disabled">
</div>

<div class="form-group">
	<label for="tarikh_memo">TARIKH MEMO</label>
	<input type="date" name="tarikh_memo" class="form-control" value="{{ $duk->tarikh_memo }}" disabled="disabled">
</div>

<div class="form-group">
	<label for="rujukan_fail_memo">RUJUKAN FAIL (MEMO)</label>
	<input type="text" name="rujukan_fail_memo" class="form-control" value="{{ $duk->rujukan_fail_memo }}" disabled="disabled">
</div>

<div class="form-group">
	<label for="peringkat">PERINGKAT</label>
	<input type="text" name="peringkat" class="form-control" value="{{ $duk->peringkat }}" disabled="disabled">
</div>

<div class="form-group">
	<label for="jenis_bank">JENIS BANK</label>
	<input type="text" name="jenis_bank" class="form-control" value="{{ $duk->jenis_bank }}" disabled="disabled">
</div>

<div class="form-group">
	<label for="no_akaun_bank">NO AKAUN BANK</label>
	<input type="text" name="no_akaun_bank" class="form-control" value="{{ $duk->no_akaun_bank }}" disabled="disabled">
</div>

<div class="form-group">
	<label for="debit">DEBIT</label>
	<div class="input-group">
        <div class="input-group-prepend">
			<div class="input-group-text">RM</div>
        </div>
        <input type="text" name="debit" class="form-control" value="{{ $duk->debit }}" disabled="disabled">
  	</div>
</div>

<div class="form-group">
	<label for="kredit">KREDIT</label>
	<div class="input-group">
        <div class="input-group-prepend">
			<div class="input-group-text">RM</div>
        </div>
        <input type="text" name="kredit" class="form-control" value="{{ $duk->kredit }}" disabled="disabled">
  	</div>

</div>

<div class="form-group">
	<label for="jenis_akaun">PILIH AKAUN</label>
	<input type="text" name="jenis_akaun" class="form-control" value="{{ $duk->jenis_akaun }}" disabled="disabled">
</div>

<div class="form-group">
	<label for="no_baucar">NO BAUCAR</label>
	<input type="text" name="no_baucar" class="form-control" value="{{ $duk->no_baucar }}" disabled="disabled">
</div>

<div class="form-group">
	<label for="tarikh_baucar">TARIKH BAUCAR</label>
	<input type="date" name="tarikh_baucar" class="form-control" value="{{ $duk->tarikh_baucar }}" disabled="disabled">
</div>

<div class="form-group">
	<label for="no_invois">NO INVOIS</label>
	<input type="text" name="no_invois" class="form-control" value="{{ $duk->no_invois }}" disabled="disabled">
</div>

<div class="form-group">
	<label for="tarikh_invois">TARIKH INVOIS</label>
	<input type="date" name="tarikh_invois" class="form-control" value="{{ $duk->tarikh_invois }}" disabled="disabled">
</div>
				</div>
				<div class="card-footer">
					<a href="{{ route('dashboard') }}" class="btn btn-secondary">Kembali ke Dashboard</a>
          <a href="{{ route('akaun.show', ['id' => $duk->jenis_akaun]) }}" class="btn btn-info">Kembali Detail Akaun</a>
				</div>
            </div>

        </div>

    </div>
</div>
@endsection
