@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detail Staff - {{ $staff->nama_staff }}</div>

                <div class="card-body">

                    <table class="table">

                        <thead>

                            <tr>
                                <th style="width: 30%">PERKARA</th>
                                <th style="width: 70%">BUTIRAN</th>
                            </tr>

                        </thead>

                        <tbody>

                            <tr>
                                <td>NAMA STAFF</td>
                                <td>{{ $staff->nama_staff }}</td>
                            </tr>

                            <tr>
                                <td>NO STAFF</td>
                                <td>{{ $staff->no_staf }}</td>
                            </tr>

                            <tr>
                                <td>USERNAME</td>
                                <td>{{ $staff->username }}</td>
                            </tr>

                            <tr>
                                <td>EMAIL</td>
                                <td>{{ $staff->email }}</td>
                            </tr>

                        </tbody>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
