@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    @include('layouts/alerts')

                    <div class="row">

                        <div class="col-md-4">

                            @include('akaun/modal_tambah_maklumat_akaun')

                        </div>
                        <div class="col-md-8">

                            <div class="btn-group float-right" role="group" aria-label="Basic example">

                            <a href="{{ route('akaun.show', ['id' => 'account_1']) }}" class="btn btn-secondary">ACC 1</a>

                            <a href="{{ route('akaun.show', ['id' => 'account_2']) }}" class="btn btn-secondary">ACC 2</a>

                            <a href="{{ route('akaun.show', ['id' => 'account_3']) }}" class="btn btn-secondary">ACC 3</a>

                            <a href="{{ route('akaun.show', ['id' => 'account_4']) }}" class="btn btn-secondary">ACC 4</a>

                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-4">

                            <select name="tahun" class="form-control">
                                @foreach( $tahun as $item )
                                <option value="{{ $item->tahun }}">{{ $item->tahun }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-md-8">

                            <div class="float-right">
                            <a href="{{ route('duk.create') }}" class="btn btn-primary">TAMBAH</a>
                            </div>

                        </div>

                    </div>

                    <hr>

                    <table id="duk-table" class="table table-bordered">

                        <thead>

                            <tr>
                                <th>BIL</th>
                                <th>NO BAUCAR</th>
                                <th>BAYAR KEPADA</th>
                                <th>KETERANGAN</th>
                                <th>JUMLAH</th>
                                <th>JENIS ACC</th>
                                <th>TINDAKAN</th>
                            </tr>

                        </thead>

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
$(function() {
    $('#duk-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('dashboard.datatables') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'no_baucar', name: 'no_baucar' },
            { data: 'bayar_kepada', name: 'bayar_kepada' },
            { data: 'keterangan', name: 'keterangan' },
            { data: 'kredit', name: 'kredit' },
            { data: 'jenis_akaun', name: 'jenis_akaun' },
            { data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>
@endsection
