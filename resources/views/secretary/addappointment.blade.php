@extends('layouts.dashboard')


@section('subcontent')

<!-- ROW-1 OPEN -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0 card-title">Nouveau Rendez-Vous</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('appointments.store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Patient</label>
                                <select class="form-control select2-show-search" name="patient_id"
                                    data-placeholder="Choose one (with searchbox)">
                                    @foreach ($patients as $patient)
                                    <option value="{{ $patient->id }}">{{ $patient->first_name }}
                                        {{ $patient->last_name }}
                                        @endforeach
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date</label>
                            <div class="input-group">
                                <div class="input-group-text">
                                    <div class="">
                                        <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                    </div>
                                </div><input name="date" class="form-control fc-datepicker" placeholder="MM/DD/YYYY"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Heure</label>
                            <div class="input-group wd-150">
                                <div class="input-group-text">
                                    <div class="">
                                        <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                    </div><!--  -->
                                </div><!--  -->
                                <input id="date" name="time" class="form-control" id="tp3" placeholder="Set time"
                                    type="time">

                            </div><!-- input-group -->

                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn btn-green mt-4">Ajouter</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        function getDate() {
            console.log(document.getElementById('date').value)
        }

    </script>

    @endsection
