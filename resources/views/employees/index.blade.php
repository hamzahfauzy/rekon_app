@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Data Pegawai') }}

                    <div class="float-right">
                        <a href="" class="btn btn-primary">Import</a>
                        <a href="" class="btn btn-success">Export</a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>PNS ID</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>No. HP</th>
                            <th>Email</th>
                            <th>Email Gov</th>
                            <th></th>
                        </tr>
                        </thead>
                        @forelse($employees as $key => $employee)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$employee->pns_id}}</td>
                            <td>{{$employee->nip}}</td>
                            <td>{{$employee->nama}}</td>
                            <td>{{$employee->no_hp}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->email_gov}}</td>
                            <td>
                                <a href="{{route('employees.edit',$employee->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="8"><i>Tidak ada data</i></td></tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection