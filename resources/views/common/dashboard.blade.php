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
</div>
<!-- ROW END -->

@endsection
