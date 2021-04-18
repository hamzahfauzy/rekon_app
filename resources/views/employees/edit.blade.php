@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Edit Pegawai') }}

                </div>

                <div class="card-body">
                    <form action="{{route('employees.update',$employee->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="">PNS ID</label>
                        <input type="text" class="form-control" readonly value="{{$employee->pns_id}}">
                    </div>
                    <div class="form-group">
                        <label for="">NIP</label>
                        <input type="text" class="form-control" readonly value="{{$employee->nip}}">
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" readonly value="{{$employee->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="">No. HP</label>
                        <input type="text" class="form-control" name="no_hp" value="{{$employee->no_hp}}">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" value="{{$employee->email}}">
                    </div>
                    <div class="form-group">
                        <label for="">Email Gov</label>
                        <input type="text" class="form-control" name="email_gov" value="{{$employee->email_gov}}">
                    </div>
                    <button class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection