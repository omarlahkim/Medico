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
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label">Patient N°</label>
                            <input type="text" class="form-control" name="input" placeholder="Patient N°">
                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label">Somme</label>
                            <input type="text" class="form-control" name="input" placeholder="Somme">
                        </div>
                    </div>


                    <div class="mb-4">
                        <a href="#" class="btn btn-green ">Ajouter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
