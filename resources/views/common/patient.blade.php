@extends('layouts.dashboard')


@section('subcontent')

<!-- ROW-1 OPEN -->
<div class="row" id="user-profile">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="wideget-user">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="wideget-user-desc d-flex">
                                <div class="wideget-user-img">
                                    <img class="" src="../../assets/images/users/10.jpg" alt="img">
                                </div>
                                <div class="user-wrap">
                                    <h4>{{ $patient->first_name }} {{ $patient->last_name }}</h4>
                                    <h6 class="text-muted mb-3">{{ $patient->profession }}</h6>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="wideget-user-info">
                                <div class="wideget-user-warap">
                                    <div class="wideget-user-warap-l">
                                        <h4 class="text-danger">{{ count($patient->diagnoses) }}</h4>
                                        <p>Observations</p>
                                    </div>
                                    <div class="wideget-user-warap-r">
                                        <h4 class="text-danger">{{ count($patient->prescriptions) }}</h4>
                                        <p>Prescriptions</p>
                                    </div>
                                    <div class="wideget-user-warap-r">
                                        <h4 class="text-danger">{{ count($patient->payments) }}</h4>
                                        <p>Paiements</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top">
                <div class="wideget-user-tab">
                    <div class="tab-menu-heading">
                        <div class="tabs-menu1">
                            <ul class="nav">
                                <li class=""><a href="#tab-51" class="active show" data-bs-toggle="tab">Infos</a></li>
                                <li><a href="#tab-61" data-bs-toggle="tab" class="">Observations</a></li>
                                <li><a href="#tab-71" data-bs-toggle="tab" class="">Ordonnances</a></li>
                                <li><a href="#tab-72" data-bs-toggle="tab" class="">Paiements</a></li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="border-0">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-51">
                            <div id="profile-log-switch">
                                <div class="media-heading">
                                    <h5><strong>Informations personelles</strong></h5>
                                </div>
                                <div class="table-responsive ">
                                    <table class="table row table-borderless">
                                        <tbody class="col-lg-12 col-xl-6 p-0">
                                            <tr>
                                                <td><strong>Nom Complet :</strong>{{ $patient->first_name }}
                                                    {{ $patient->last_name }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Ville :</strong> {{ $patient->city->name }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Sexe :</strong>{{$patient->gender->name}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>CIN :</strong>{{$patient->CIN}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>profession :</strong>{{$patient->profession}}</td>
                                            </tr>
                                        </tbody>
                                        <tbody class="col-lg-12 col-xl-6 p-0">
                                            <tr>
                                                <td><strong>Assurance :</strong> {{ $patient->insurance->name }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Adresse :</strong>
                                                    {{ $patient->address }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Telephone :</strong> +212 {{ $patient->phone }} </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Situation Familiale :</strong>
                                                    {{ $patient->marital_situation->name }} </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="tab-61">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header bg-transparent border-0">
                                            <div class="row">
                                                <h3 class="card-title">Observations</h3>
                                                <a href="{{ route('diagnoses.create',array('patient_id'=>$patient->id)) }}"
                                                    class="btn btn-cyan m-3">Ajouter une observation</a>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="grid-margin">
                                                <div class="">
                                                    <div class="table-responsive">
                                                        <table
                                                            class="table card-table table-vcenter text-nowrap  align-items-center">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Observation</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($patient->diagnoses as $diagnosis)
                                                                <tr>
                                                                    <td class="text-sm font-weight-600">
                                                                        {{ $diagnosis['date'] }}</td>
                                                                    <td class="text-sm font-weight-600">
                                                                        {{ $diagnosis['description'] }}</td>
                                                                    <td>
                                                                        <div class="btn-list">
                                                                            <div class="row">

                                                                                <div class="col-md-2 mb-2">
                                                                                    <form id="delete-form" method="POST"
                                                                                        action="{{route('diagnoses.destroy',$diagnosis['id'])}}">
                                                                                        @method('DELETE')
                                                                                        @csrf
                                                                                        <button type="submit"
                                                                                            class="btn btn-icon btn-danger"><i
                                                                                                class="fe fe-trash"></i></button>
                                                                                    </form>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-71">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header bg-transparent border-0">
                                            <div class="row">
                                                <h3 class="card-title">Ordonnances</h3>
                                                <a href="{{ route('prescriptions.create',array('patient_id'=>$patient->id)) }}"
                                                    class="btn btn-cyan m-3">Ajouter une ordonnance</a>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="grid-margin">
                                                <div class="">
                                                    <div class="table-responsive">
                                                        <table
                                                            class="table card-table table-vcenter text-nowrap  align-items-center">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Medicaments</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($patient->prescriptions as $prescription)
                                                                <tr>


                                                                    <td>{{ $prescription['date'] }}</td>
                                                                    <td class="text-nowrap">
                                                                        {{ $prescription['date'] }}
                                                                    </td>
                                                                    <td>
                                                                        <div class="btn-list">
                                                                            <div class="row">
                                                                                <div class="col-md-2 mb-2">
                                                                                    <a href="#">
                                                                                        <button type="button"
                                                                                            class="btn btn-icon btn-warning"><i
                                                                                                class="fe fe-edit"></i></button>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="col-md-2 mb-2">
                                                                                    <form id="delete-form" method="POST"
                                                                                        action="{{route('prescriptions.destroy',$prescription['id'])}}">
                                                                                        @method('DELETE')
                                                                                        @csrf
                                                                                        <button type="submit"
                                                                                            class="btn btn-icon btn-danger"><i
                                                                                                class="fe fe-trash"></i></button>
                                                                                    </form>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-72">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header bg-transparent border-0">
                                            <div class="row">
                                                <h3 class="card-title">Paiements</h3>
                                                <a href='{{ URL::route("payments.create", array("patient"=>$patient)) }}'
                                                    class="btn btn-cyan m-3">Ajouter un paiement</a>
                                            </div>

                                        </div>
                                        <div class="">

                                            <div class="grid-margin">

                                                <div class="">

                                                    <div class="table-responsive">

                                                        <table
                                                            class="table card-table table-vcenter text-nowrap  align-items-center">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Somme</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($patient->payments as $payment)
                                                                <tr>
                                                                    <td class="text-sm font-weight-600">
                                                                        {{ \Carbon\Carbon::parse($payment->created_at)->format('d-m-Y') }}
                                                                    </td>
                                                                    <td class="text-sm font-weight-600">
                                                                        {{ $payment['amount'] }}</td>
                                                                    </td>
                                                                    <td>
                                                                        <div class="btn-list">


                                                                            <div class="col-md-2 mb-2">
                                                                                <form id="delete-form" method="POST"
                                                                                    action="{{route('payments.destroy',$payment['id'])}}">
                                                                                    @method('DELETE')
                                                                                    @csrf
                                                                                    <button type="submit"
                                                                                        class="btn btn-icon btn-danger"><i
                                                                                            class="fe fe-trash"></i></button>
                                                                                </form>
                                                                            </div>


                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL-END -->
</div>
<!-- ROW-1 CLOSED -->

@endsection
