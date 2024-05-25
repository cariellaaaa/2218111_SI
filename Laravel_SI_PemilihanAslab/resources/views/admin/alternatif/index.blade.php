@extends('admin.masterTemplate')
@section('content')
<div style="height: 575px" class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tabel Alternatif</h4>
                    <div class="pull-right">
                        <button class="btn btn-primary">Add</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    NIM
                                </th>
                                <th>
                                    Nama
                                </th>
                                <th>
                                    Angkatan
                                </th>
                                <th>
                                    Action
                                </th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Dakota Rice
                                    </td>
                                    <td>
                                        Niger
                                    </td>
                                    <td>
                                        Oud-Turnhout
                                    </td>
                                    <td>
                                        <button class="btn btn-secondary btn-sm text-capitalize">Edit</button>
                                        <button class="btn btn-danger btn-sm text-capitalize">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection