@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detail Akaun - {{ str_replace('account_', 'Akaun ', $jenis_akaun) }}</div>

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-6">

                          <div class="table-responsive">

                            <table class="table">

                                <colgroup>
                                    <col class="col-md-3">
                                    <col class="col-md-9">
                                </colgroup>

                                <tr>
                                    <td>TAHUN</td>
                                    <td>{{ $account->tahun }}</td>
                                </tr>
                                <tr>
                                    <td>JENIS BANK</td>
                                    <td>{{ $account->jenis_bank }}</td>
                                </tr>
                                <tr>
                                    <td>JENIS ACC</td>
                                    <td>{{ str_replace('account_', 'Akaun ', $jenis_akaun) }}</td>
                                </tr>
                                <tr>
                                    <td>JUMLAH DEBIT</td>
                                    <td>0.00</td>
                                </tr>
                                <tr>
                                    <td>JUMLAH KREDIT</td>
                                    <td>0.00</td>
                                </tr>
                                <tr>
                                    <td>BAKI AKAUN</td>
                                    <td>{{ $account->baki_awal }}</td>
                                </tr>

                            </table>

                          </div>
                        </div>

                    </div>

                    <hr>
                    <div class="table-responsive">
                    <table class="table table-bordered">

                        <thead>

                            <tr>
                                <th>NO CEK / NO EFT</th>
                                <th>NO KELOMPOK</th>
                                <th>BAYAR KEPADA</th>
                                <th>KETERANGAN</th>
                                <th>BAHAGIAN/UNIT</th>
                                <th>DEBIT</th>
                                <th>KREDIT</th>
                                <th>BAKI(RM)</th>
                                <th>TINDAKAN</th>
                            </tr>

                        </thead>

                        <tbody>
                            @foreach( $account_details as $duk )
                            <tr>
                                <td>{{ $duk->id }}</td>
                                <td>{{ $duk->no_kelompok }}</td>
                                <td>{{ $duk->bayar_kepada }}</td>
                                <td>{{ $duk->keterangan }}</td>
                                <td>{{ $duk->bahagian_unit }}</td>
                                <td>{{ $duk->debit }}</td>
                                <td>{{ $duk->kredit }}</td>
                                <td>{{ $duk->kredit - $duk->debit }}</td>
                                <td>
                                  <a href="{{ route('duk.show', ['id' => $duk->id] ) }}" class="btn btn-primary btn-sm"><i class="fa fa-folder-open"></i></a>
                                  <a href="{{ route('duk.edit', ['id' => $duk->id] ) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                  @include('duk/modal_delete')
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- /table-responsive -->

            </div>
        </div>
    </div>
</div>
</div>
@endsection
