@extends('layouts.dashboard')


@section('subcontent')

<!-- ROW-1 OPEN -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0 card-title">Nouveau Patient</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('patients.store')}}">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Prenom</label>
                                <input type="text" class="form-control" name="first_name" placeholder="Prenom">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Profession</label>
                                <input type="text" class="form-control" name="profession" placeholder="Profession">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Nom</label>
                                <input type="text" class="form-control" name="last_name" placeholder="Nom">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Assurance</label>
                                <select name="insurance_id" id="select-countries" class="form-control custom-select">
                                    @foreach($insurances as $insurance)
                                    <option value="{{ $insurance->id }}">{{ $insurance->name }}
                                    </option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Ville</label>
                                <select name="city_id" id="select-countries" class="form-control custom-select">
                                    @foreach($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}
                                    </option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Adresse</label>
                            <textarea name="address" class="form-control" rows="1" placeholder="Adresse"></textarea>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Date de Naissance</label>
                            <div class="input-group">
                                <div class="input-group-text">
                                    <div class="">
                                        <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                    </div>
                                </div><input name="birth_date" class="form-control fc-datepicker"
                                    placeholder="MM/DD/YYYY" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Sexe</label>
                                <select name="gender_id" id="select-countries" class="form-control custom-select">
                                    @foreach($genders as $gender)
                                    <option value="{{ $gender->id }}">{{ $gender->name }}
                                    </option>

                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Situation Familiale</label>
                                <select name="marital_situation_id" id="select-countries"
                                    class="form-control custom-select">
                                    @foreach($maritalsituations as $situation)
                                    <option value="{{ $situation->id }}">{{ $situation->name }}
                                    </option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">CIN</label>
                                <input type="text" class="form-control" name="cin" placeholder="CIN">
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




    @endsection
