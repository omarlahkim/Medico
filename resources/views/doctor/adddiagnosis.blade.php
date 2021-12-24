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
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label">Patient N°</label>
                            <input type="text" class="form-control" name="input" placeholder="Patient N°">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label">Date</label>
                            <input readonly type="text" class="form-control" value="{{ $todayDate }}" name="input"
                                placeholder="Date">
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <div class="mb-0">
                            <label class="form-label">Observation</label>
                            <textarea class="form-control" name="example-textarea-input" rows="4"
                                placeholder="Observation ici"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <div class="mb-4 ml-0 mt-4">
                            <a href="#" class="btn btn-green">Ajouter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
