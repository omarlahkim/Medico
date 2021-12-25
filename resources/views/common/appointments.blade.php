@extends('layouts.dashboard')


@section('subcontent')

<!-- ROW-2 -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-transparent border-0">
                <h3 class="card-title">Rendez-vous</h3>
            </div>
            <div class="">
                <div class="grid-margin">
                    <div class="">
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap  align-items-center">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Date</th>
                                        <th>Heure</th>
                                        <th>patient</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($appointments as $appointment)
                                    <tr>
                                        <td>{{ $appointment['date'] }}</td>
                                        <td class="text-sm font-weight-600">{{ $appointment['time'] }}</td>
                                        <td class="text-sm font-weight-600">{{ $appointment->patient->first_name }}
                                            {{ $appointment->patient->last_name }}</td>
                                        <td>
                                            <div class="btn-list">
                                                <div class="row">
                                                    <div class="col-md-2 mb-2">
                                                        <a href="#">
                                                            <button type="button" class="btn btn-icon btn-warning"><i
                                                                    class="fe fe-trash"></i></button>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-2 mb-2">
                                                        <a href="#">
                                                            <button type="button" class="btn btn-icon btn-danger"><i
                                                                    class="fe fe-trash"></i></button>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ROW-2 CLOSED -->

@endsection
