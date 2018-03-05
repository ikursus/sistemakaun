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

                            <p>
                                <a href="" class="btn btn-primary">TAMBAH MAKLUMAT ACC</a>
                            </p>
                            
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

                    <div class="row">

                        <div class="col-md-4">

                            <select name="tahun" class="form-control">
                                <option>{{ date('Y') }}</option>
                            </select>
                            
                        </div>
                        <div class="col-md-8">

                            <div class="float-right">
                            <button type="button" class="btn btn-primary">TAMBAH</button>
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
                                <th>KETERNAGAN</th>
                                <th>JUMLAH</th>
                                <th>JENIS ACC</th>
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
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
