@extends('layouts.dashboard')


@section('subcontent')
<!-- ROW-2 -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-transparent border-0">
                <h3 class="card-title">Patients</h3>
            </div>
            <div class="">
                <div class="grid-margin">
                    <div class="">
                        <div class="table-responsive">
                            <div class="col">
                                <input onkeyup="myFunction()" type="text" class="form-control mb-4" id="search"
                                    placeholder="Chercher ici...">
                            </div>
                            <table id='patients' class="table card-table table-vcenter text-nowrap  align-items-center">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Numero de dossier</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>CIN</th>
                                        <th>Date de naissance</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($patients as $patient)
                                    <tr>
                                        <td><a href="/patients/{{ $patient['id'] }}">{{ $patient['id'] }} </a></td>
                                        <td class="text-sm font-weight-600">{{ $patient['last_name'] }}</td>
                                        <td class="text-sm font-weight-600">{{ $patient['first_name'] }}</td>
                                        <td>{{ $patient['CIN'] }}</td>
                                        <td class="text-nowrap">{{ $patient['birth_date'] }}</td>
                                        <td>
                                            <div class="btn-list">
                                                <div class="row">
                                                    <div class="col-md-2 mb-2">
                                                        <a href="#">
                                                            <button type="button" class="btn btn-icon btn-warning"><i
                                                                    class="fe fe-edit"></i></button>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-2 mb-2">
                                                        <form id="delete-form" method="POST"
                                                            action="{{route('patients.destroy',$patient['id'])}}">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-icon btn-danger"><i
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
<script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        table = document.getElementById("patients");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
        return table
    }

</script>
<!-- ROW-2 CLOSED -->
@endsection
