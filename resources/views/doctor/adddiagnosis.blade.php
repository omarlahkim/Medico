@extends('layouts.dashboard')


@section('subcontent')

<!-- ROW-1 OPEN -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0 card-title">Ajouter Observation</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('diagnoses.store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Patient</label>
                                <select readonly="readonly" class="form-control" name="patient_id">
                                    @foreach($patient as $pat)
                                    <option value="{{ $pat->id }}">{{ $pat->first_name }}
                                        {{ $pat->last_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Date</label>
                                <input name="date" readonly type="text" class="form-control" value="{{ $todayDate }}"
                                    name="input" placeholder="Date">
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="mb-0">
                                <label class="form-label">Observation</label>
                                <textarea class="form-control" name="diagnosis" rows="4"
                                    placeholder="Observation ici"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="mb-4 ml-0 mt-4">
                                <button type="submit" class="btn btn-green">Ajouter</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    @endsection
