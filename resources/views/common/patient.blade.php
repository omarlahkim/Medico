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
                                        <h4 class="text-danger">1</h4>
                                        <p>Observations</p>
                                    </div>
                                    <div class="wideget-user-warap-r">
                                        <h4 class="text-danger">2</h4>
                                        <p>Prescriptions</p>
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
                                                <td><strong>Ville :</strong> {{ $patient->city }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Sexe :</strong>{{$patient->gender->name}}</td>
                                            </tr>
                                        </tbody>
                                        <tbody class="col-lg-12 col-xl-6 p-0">
                                            <tr>
                                                <td><strong>Website :</strong> abcdz.com</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Email :</strong>
                                                    georgemestayer@abcdz.com</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Telephone :</strong> +212 {{ $patient->phone }} </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row profie-img">
                                    <div class="col-md-12">
                                        <div class="media-heading">
                                            <h5><strong>Biography</strong></h5>
                                        </div>
                                        <p>
                                            Nam libero tempore, cum soluta nobis est eligendi optio
                                            cumque nihil impedit quo minus id quod maxime placeat
                                            facere possimus, omnis voluptas assumenda est, omnis
                                            dolor repellendus</p>
                                        <p class="mb-0">because it is pleasure, but because those
                                            who do not know how to pursue pleasure rationally
                                            encounter but because those who do not know how to
                                            pursue consequences that are extremely painful. Nor
                                            again is there anyone who loves or pursues or desires to
                                            obtain pain of itself, because it is pain, but because
                                            occasionally circumstances occur in which toil and pain
                                            can procure him some great pleasure.</p>
                                    </div>
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
                                                <a href="{{ route('diagnoses.create') }}"
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
                                                                @foreach([] as $patient)
                                                                <tr>
                                                                    <td><a href="/patients/{{ $patient['id'] }}">{{ $patient['id'] }}
                                                                        </a></td>
                                                                    <td class="text-sm font-weight-600">
                                                                        {{ $patient['last_name'] }}</td>
                                                                    <td class="text-sm font-weight-600">
                                                                        {{ $patient['first_name'] }}</td>
                                                                    <td>{{ $patient['CIN'] }}</td>
                                                                    <td class="text-nowrap">{{ $patient['birth_date'] }}
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
                                                                                    <a href="#">
                                                                                        <button type="button"
                                                                                            class="btn btn-icon btn-danger"><i
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
                                                <a href="{{ route('prescriptions.create') }}"
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
                                                                @foreach([] as $patient)
                                                                <tr>
                                                                    <td><a href="/patients/{{ $patient['id'] }}">{{ $patient['id'] }}
                                                                        </a></td>
                                                                    <td class="text-sm font-weight-600">
                                                                        {{ $patient['last_name'] }}</td>
                                                                    <td class="text-sm font-weight-600">
                                                                        {{ $patient['first_name'] }}</td>
                                                                    <td>{{ $patient['CIN'] }}</td>
                                                                    <td class="text-nowrap">{{ $patient['birth_date'] }}
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
                                                                                    <a href="#">
                                                                                        <button type="button"
                                                                                            class="btn btn-icon btn-danger"><i
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
                                                                @foreach([] as $patient)
                                                                <tr>
                                                                    <td><a href="/patients/{{ $patient['id'] }}">{{ $patient['id'] }}
                                                                        </a></td>
                                                                    <td class="text-sm font-weight-600">
                                                                        {{ $patient['last_name'] }}</td>
                                                                    <td class="text-sm font-weight-600">
                                                                        {{ $patient['first_name'] }}</td>
                                                                    <td>{{ $patient['CIN'] }}</td>
                                                                    <td class="text-nowrap">{{ $patient['birth_date'] }}
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
                                                                                    <a href="#">
                                                                                        <button type="button"
                                                                                            class="btn btn-icon btn-danger"><i
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
