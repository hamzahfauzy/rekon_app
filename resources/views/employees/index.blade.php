@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Data Pegawai') }}

                    <div class="float-right">
                        <a href="{{ route('employees.import') }}" class="btn btn-primary">Import</a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table id="datatableEmployee" class="table table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>PNS ID</th>
                            <th>NIP</th>
                            <th width="250px">Nama</th>
                            <th>No. HP</th>
                            <th>Email</th>
                            <th>Email Gov</th>
                            <th width="80px"></th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.colVis.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatableEmployee').DataTable( {
                ajax: {
                    url: '{{ route('employees.getdataemployee') }}',
                    dataSrc: 'data'
                },
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel'
                ],
                buttons: [
                    {
                        extend: 'csv',
                        exportOptions: {
                            columns: [ 0, 1, 2, 3, 4,5, 6 ]
                        }
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: [ 0, 1, 2, 3, 4,5, 6 ]
                        }
                    },
                    // 'colvis'
                ],
                scrollX:        true,
                fnInitComplete: function(oSettings, json) {
                    $('.dataTables_scrollBody').css('overflow-y', 'hidden');
                },

            } );
        } );
    </script>

@endsection
