<!-- Button trigger modal -->
<p>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah-maklumat-akaun">
		TAMBAH MAKLUMAT AKAUN
	</button>
</p>

<form method="POST" action="{{ route('akaun.simpan') }}">

<!-- Modal -->
<div class="modal fade" id="modal-tambah-maklumat-akaun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">

<div class="modal-header">
	<h5 class="modal-title" id="exampleModalLabel">BORANG TAMBAH MAKLUMAT AKAUN</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
</div>

<div class="modal-body">

<div class="form-group">
	<label for="tahun">TAHUN</label>
	<select name="tahun" class="form-control">
		<option value="2018">2018</option>
		<option value="2019">2019</option>
		<option value="2020">2020</option>
	</select>
</div>

<div class="form-group">
	<label for="jenis_akaun">JENIS AKAUN</label>
	<select name="jenis_akaun" class="form-control">
		<option value="account_1">ACC 1</option>
		<option value="account_2">ACC 2</option>
		<option value="account_3">ACC 3</option>
		<option value="account_4">ACC 4</option>
	</select>
</div>

<div class="form-group">
	<label for="jenis_akaun">NO AKAUN</label>
	<input type="text" name="no_akaun" placeholder="No Akaun Bank" class="form-control">
</div>

<div class="form-group">
	<label for="jenis_bank">JENIS BANK</label>
	<input type="text" name="jenis_bank" placeholder="Nama Bank" class="form-control">
</div>

<div class="form-group">
	<label for="baki_awal">Baki Awal</label>
	<input type="text" name="baki_awal" placeholder="Baki Awal" class="form-control">
</div>


<div class="modal-footer">
	<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
	<button type="submit" class="btn btn-primary">Simpan</button>
</div>
</div>
</div>
</div>
</div>
</form>