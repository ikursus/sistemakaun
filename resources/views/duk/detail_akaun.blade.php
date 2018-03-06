@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detail Akaun - {{ $id }}</div>

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-4">
                            
                        </div>
                        <div class="col-md-8">

                            <div class="btn-group float-right" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary">ACC 1</button>
                            <button type="button" class="btn btn-secondary">ACC 2</button>
                            <button type="button" class="btn btn-secondary">ACC 3</button>
                            <button type="button" class="btn btn-secondary">ACC 4</button>
                            </div>

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
