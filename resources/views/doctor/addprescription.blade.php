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
                <form method="post" action="{{route('prescriptions.store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Patient </label>
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
                                <input readonly type="text" class="form-control" value="{{ $todayDate }}" name="input"
                                    placeholder="Date">
                            </div>
                        </div>
                        <div class="border-top my-3"></div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Medicament</label>
                                <select class="form-control select2-show-search" name="patient_id">
                                    @foreach($drugs as $drug)
                                    <option value="{{ $drug->id }}">{{ $drug->name }}
                                    </option>
                                    @endforeach
                                </select>
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
                                        <input type="checkbox" name="value" value="JavaScript"
                                            class="selectgroup-input">
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
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12">

        <div class="card">
            <div class="card-header">
                <h3 class="mb-0 card-title">Ordonnance</h3>
            </div>
            <div class="card-body">
                <div class="prescription h-40">
                    <div class="row">
                        <div class="col-md-6 text-center ">
                            <h5>Dr. M</h5>
                            <h5>Neuro-Psychiatre | Psychotherapeute</h5>
                            <h5>SPECIALISTE</h5>
                            <h5>DES TROUBLES NERVEUX ET PSYCHOLOGIQUES</h5>
                            <h5>LE PSYCHOTHERAPIES</h5>
                            <h5>Diplomé de la Faculté de Medcine de Rabat</h5>
                            <h5>Ex-Chef de service a l'hopital Moulay Ismail</h5>
                            <h5>ADULTES-ENFANTS</h5>
                        </div>
                        <div class="col-md-6 text-center ">
                            <h3>Dr. M</h3>
                            <h5>Neuro-Psychiatre | Psychotherapeute</h5>
                            <h5>SPECIALISTE</h5>
                            <h5>DES TROUBLES NERVEUX ET PSYCHOLOGIQUES</h5>
                            <h5>LE PSYCHOTHERAPIES</h5>
                            <h5>Diplomé de la Faculté de Medcine de Rabat</h5>
                            <h5>Ex-Chef de service a l'hopital Moulay Ismail</h5>
                            <h5>ADULTES-ENFANTS</h5>
                        </div>
                        <div class="col-md-12 mt-5 d-flex justify-content-center ">
                            <h5>Meknes le {{ $todayDate }}</h5>
                        </div>
                        <div class="col-md-12 mt-5 d-flex justify-content-center ">
                            <h5>Nom Prenom</h5>
                        </div>
                        <div class="col-md-12 mt-5 d-flex justify-content-center text-center ">
                            <div class="table-responsive">
                                <table class="table card-table table-vcenter text-nowrap  align-items-center">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Medicament</th>
                                            <th>Quantité</th>
                                            <th>Dose Journaliere</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach([] as $payment)
                                        <tr>
                                            <td>{{ $payment['id'] }}</td>
                                            <td class="text-sm font-weight-600">{{ $payment['amount'] }}</td>
                                            <td class="text-sm font-weight-600">{{ $payment['amount'] }}</td>
                                            <td>{{ $payment['amount'] }}</td>
                                            <td class="text-nowrap">{{ $payment['amount'] }}</td>
                                            <td>
                                                <div class="btn-list">
                                                    <div class="row">
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
                        <!-- end table -->
                        <div class="text-center">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>



@endsection
