@extends('layouts.dashboard')


@section('subcontent')

<!-- ROW -->
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="card-order">
                    <h6 class="mb-2">Tout les patients</h6>
                    <h2 class="text-end "><i
                            class="mdi mdi-account-multiple icon-size float-start text-primary text-primary-shadow"></i><span>{{ $patients->count() }}</span>
                    </h2>

                </div>
            </div>
        </div>
    </div><!-- COL END -->
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card ">
            <div class="card-body">
                <div class="card-widget">
                    <h6 class="mb-2">Patients du jour</h6>
                    <h2 class="text-end"><i class="mdi mdi-account icon-size float-start text-success
                            text-success-shadow"></i><span>{{ $daypatients->count() }}</span>
                    </h2>

                </div>
            </div>
        </div>
    </div><!-- COL END -->
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="card-widget">
                    <h6 class="mb-2">Rendez-Vous</h6>
                    <h2 class="text-end"><i
                            class="icon-size mdi mdi-calendar   float-start text-warning text-warning-shadow"></i><span>{{ $appointments->count() }}</span>
                    </h2>

                </div>
            </div>
        </div>
    </div><!-- COL END -->
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card ">
            <div class="card-body">
                <div class="card-widget">
                    <h6 class="mb-2">Revenues du jour</h6>
                    <h2 class="text-end"><i class="fa fa-credit-card icon-size float-start text-danger
                            text-danger-shadow"></i><span>{{ $payments->sum('amount') }} Dhs</span>
                    </h2>

                </div>
            </div>
        </div>
    </div><!-- COL END -->
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card-header bg-transparent border-0">
            <h3 class="card-title">Rendez-vous du jour</h3>
        </div>
        <div class="card ">
            <div class="card-body">
                <div class="card-widget">
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
                                                {{ $appointment->patient->last_name }}
                                            </td>
                                            <td>
                                                <div class="btn-list">
                                                    <div class="row">
                                                        <div class="col-md-2 mb-2">
                                                            <a href="#">
                                                                <button type="button" class="btn btn-icon btn-green"><i
                                                                        class="fe fe-check"></i></button>
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
    </div><!-- COL END -->
</div>
<!-- ROW END -->

@endsection
