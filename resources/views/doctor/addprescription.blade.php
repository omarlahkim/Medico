@extends('layouts.dashboard')


@section('subcontent')

<!-- ROW-1 OPEN -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0 card-title">Ajouter Ordonnance</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label">N° Patient </label>
                            <input type="text" class="form-control" name="input" placeholder="N° Patient">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label">Date</label>
                            <input readonly type="text" class="form-control" value="{{ $todayDate }}" name="input"
                                placeholder="Date">
                        </div>
                    </div>
                    <div class="border-top my-3"></div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label">Medicament</label>
                            <input type="text" class="form-control" name="input" placeholder="Medicament">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label">Dose</label>
                            <input type="text" class="form-control" name="input" placeholder="Dose">
                        </div>

                    </div>
                    <div class="col-md-12 ">
                        <div class="mb-4">
                            <label class="form-label">Organisation</label>
                            <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="value" value="HTML" class="selectgroup-input"
                                        checked="">
                                    <span class="selectgroup-button">Avant Petit Dej</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="value" value="CSS" class="selectgroup-input">
                                    <span class="selectgroup-button">Apres Petit Dej</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="value" value="PHP" class="selectgroup-input">
                                    <span class="selectgroup-button">Avant Dej </span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="value" value="JavaScript" class="selectgroup-input">
                                    <span class="selectgroup-button">Apres Dej</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="value" value="Angular" class="selectgroup-input">
                                    <span class="selectgroup-button">Avant Dinner</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="value" value="Java" class="selectgroup-input">
                                    <span class="selectgroup-button">Apres Dinner</span>
                                </label>

                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="mb-4 ml-0 mt-4">
                                <a href="#" class="btn btn-green btn-block ">Ajouter</a>
                            </div>
                            <div class="mb-4 ml-0 mt-4">
                                <a href="#" class="btn btn-green btn-block">Enregistrer</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0 card-title">Ordonnance</h3>
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>

</div>



@endsection
