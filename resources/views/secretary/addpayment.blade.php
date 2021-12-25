@extends('layouts.dashboard')


@section('subcontent')

<!-- ROW-1 OPEN -->
<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0 card-title">Ajouter Paiement</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('payments.store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Patient N°</label>
                                <select name="patient_id" class="form-control select2-show-search"
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
                            <div class="mb-4">
                                <label class="form-label">Somme</label>
                                <input type="text" class="form-control" name="amount" placeholder="Somme">
                            </div>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-green ">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
