@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Senarai Staff</div>

                <div class="card-body">

                    @include('layouts/alerts')

                    <p>
                        <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah Staff</a>
                    </p>
                    
                    <table class="table table-bordered">

                        <thead>

                            <tr>
                                <th>ID</th>
                                <th>NAMA</th>
                                <th>NO STAFF</th>
                                <th>USERNAME</th>
                                <th>TINDAKAN</th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach( $users as $staff )
                            <tr>
                                <td>{{ $staff->id }}</td>
                                <td>{{ $staff->nama_staff }}</td>
                                <td>{{ $staff->no_staf }}</td>
                                <td>{{ $staff->username }}</td>
                                <td>

                                    <a href="{{ route('users.show', ['id' => $staff->id ]) }}" class="btn btn-primary btn-sm"><i class="fa fa-folder-open"></i></a>

                                    <a href="{{ route('users.edit', ['id' => $staff->id ]) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>

                                    <!-- Button trigger delete modal -->
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-user-{{ $staff->id }}">
                                        <i class="fa fa-trash"></i>
                                    </button>

                                    <form method="POST" action="{{ route('users.destroy', ['id' => $staff->id]) }}">

                                    <input type="hidden" name="_method" value="DELETE">

                                    @csrf

                                    <!-- Modal -->
                                    <div class="modal fade" id="modal-delete-user-{{ $staff->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">PENGESAHAN HAPUS AKAUN {{ $staff->nama_staff }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">

                                        <p>Adakah anda bersetuju untuk menghapuskan rekod berikut?</p>

                                        <ul>
                                            <li>ID: {{ $staff->id }}</li>
                                            <li>NAMA STAFF: {{ $staff->nama_staff }}</li>
                                        </ul>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Delete</button>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </form>


                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                    {{ $users->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
