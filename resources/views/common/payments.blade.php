@extends('layouts.dashboard')


@section('subcontent')

<!-- ROW-2 -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-transparent border-0">
                <h3 class="card-title">Paiements</h3>
            </div>
            <div class="">
                <div class="grid-margin">
                    <div class="">
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap  align-items-center">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Somme</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>CIN</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($payments as $payment)
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ROW-2 CLOSED -->

@endsection
