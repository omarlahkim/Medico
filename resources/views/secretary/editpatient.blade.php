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
                <form method="PUT" action="{{route('patients.update', array('patient'=>$patient))}}">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Prenom</label>
                                <input type="text" class="form-control" value="{{ $patient['first_name'] }}"
                                    name="first_name" placeholder="Prenom">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Profession</label>
                                <input value="{{ $patient['profession'] }}" type="text" class="form-control"
                                    name="profession" placeholder="Profession">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Phone</label>
                                <input value="{{ $patient['phone'] }}" type="text" class="form-control" name="phone"
                                    placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Nom</label>
                                <input value="{{ $patient['last_name'] }}" type="text" class="form-control"
                                    name="last_name" placeholder="Nom">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Assurance</label>
                                <select value="$patient['insurance_id']" name="insurance_id" id="select-countries"
                                    class="form-control custom-select">
                                    @foreach($insurances as $insurance)
                                    <option value="{{ $insurance->id }}">{{ $insurance->name }}
                                    </option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Ville</label>
                                <select value="{{ $patient['city_id'] }}" name="city_id" id="select-countries"
                                    class="form-control custom-select">
                                    @foreach($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}
                                    </option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Adresse</label>
                            <textarea name="address" class="form-control" rows="1"
                                placeholder="Adresse">{{ $patient['address'] }}</textarea>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Date de Naissance</label>
                            <div class="input-group">
                                <div class="input-group-text">
                                    <div class="">
                                        <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                    </div>
                                </div><input value="{{ $patient['birth_date'] }}" name="birth_date"
                                    class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Sexe</label>
                                <select value="{{ $patient['gender_id'] }}" name="gender_id" id="select-countries"
                                    class="form-control custom-select">
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
                                <select value="{{ $patient['marital_situation_id'] }}" name="marital_situation_id"
                                    id="select-countries" class="form-control custom-select">
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
                                <input value="{{ $patient['CIN'] }}" type="text" class="form-control" name="cin"
                                    placeholder="CIN">
                            </div>

                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-green ">Modifier</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>




    @endsection
