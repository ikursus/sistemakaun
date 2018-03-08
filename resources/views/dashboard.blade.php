@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

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

                    <table class="table table-bordered">

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

                        <tbody>

                            @foreach( $account_details as $duk )
                            <tr>
                                <td>{{ $duk->id }}</td>
                                <td>{{ $duk->no_baucar }}</td>
                                <td>{{ $duk->bayar_kepada }}</td>
                                <td>{{ $duk->keterangan }}</td>
                                <td>{{ $duk->kredit }}</td>
                                <td>{{ str_replace('account_', 'Account ', $duk->jenis_akaun) }}</td>
                                <td>
                                  <a href="{{ route('duk.show', ['id' => $duk->id]) }}" class="btn btn-primary btn-sm"><i class="fa fa-folder-open"></i></a>
                                  <a href="{{ route('duk.edit', ['id' => $duk->id]) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                  @include('/duk/modal_delete')
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
