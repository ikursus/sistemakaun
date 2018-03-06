@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detail Akaun - {{ $id }}</div>

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-6">
                            
                            <table class="table">

                                <colgroup>
                                    <col class="col-md-3">
                                    <col class="col-md-9">
                                </colgroup>

                                <tr>
                                    <td>TAHUN</td>
                                    <td>2018</td>
                                </tr>
                                <tr>
                                    <td>JENIS BANK</td>
                                    <td>ACCOUNT 1</td>
                                </tr>
                                <tr>
                                    <td>JENIS ACC</td>
                                    <td>BANK ISLAM</td>
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
                                    <td>0.00</td>
                                </tr>
                                
                            </table>

                        </div>
                        <div class="col-md-6">

                            

                        </div>
                        
                    </div>

                    <hr>
                    
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

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="" class="btn btn-sm btn-info">READ</a>
                                    <a href="" class="btn btn-sm btn-danger">DELETE</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
