@extends('dashboard.base')
@section('title', 'Clients List')
@section('admin_dashboard')
@section('extra_css')
    <link href="{{ asset('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <style>
        table#zero_config.table.table-striped.table-bordered.no-wrap.dataTable.no-footer {
            margin-bottom: 35px !important;
        }
    </style>
@endsection
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">Client List</h4>
                    <a href="{{ route('clients.create') }}" class="btn btn-success btn-sm" style="float: right;">Add
                        Client</a>
                </div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Phone</th>
                                <th>Property Add</th>
                                <th>Rent Per Month</th>
                                <th>Discount Percent</th>
                                <th>Discount Amount</th>
                                <th>Status</th>
                                <th>Created at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->first_name . ' ' . $client->last_name }}</td>
                                    <td title="{{ $client->email }}">{{ $client->mobile_number }}</td>
                                    <td>{{ $client->property_address }}</td>
                                    <td style="width: 10%;">
                                        @if ($client->total_rent != null)
                                            ${{ $client->total_rent }}
                                        @else
                                            <span class="badge badge-pill badge-danger">Not Specified</span>
                                        @endif
                                    </td>
                                    <td style="width: 10%;">
                                        @if ($client->discount_percent != null)
                                            {{ $client->discount_percent }}%
                                        @else
                                            <span class="badge badge-pill badge-danger">Not Specified</span>
                                        @endif
                                    </td>
                                    <td style="width: 10%;">
                                        @if ($client->discount_amount != null)
                                            ${{ $client->discount_amount }}
                                        @else
                                            <span class="badge badge-pill badge-danger">Not Specified</span>
                                        @endif
                                    </td>
                                    <td style="width: 8%;">
                                        @if ($client->client_status == 1)
                                            <span class="badge badge-pill badge-success">Active</span>
                                            {{-- <a href="{{ route('user.inactive', $user->id) }}" class="btn btn-danger btn-sm"
                                            title="Deactive User Account"><i class="fa fa-arrow-down"></i> </a> --}}
                                        @else
                                            <span class="badge badge-pill badge-danger">Inactive</span>
                                            {{-- <a href="{{ route('user.active', $user->id) }}" class="btn btn-success btn-sm"
                                            title="Active User Account"><i class="fa fa-arrow-up"></i> </a> --}}
                                        @endif
                                    </td>
                                    <td style="width: 12%;">{{ $client->created_at->diffForHumans() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        {{-- <tfoot>
                            <tr>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Property Id</th>
                                <th>Property Add</th>
                                <th>Rent Per Month</th>
                                <th>Discount Percent</th>
                                <th>Discount Amount</th>
                                <th>Status</th>
                                <th>Created at</th>
                            </tr>
                        </tfoot> --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@section('extra_js')
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/datatable/datatable-basic.init.js') }}"></script>
@endsection
@endsection
