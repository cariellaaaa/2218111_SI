@extends('admin.layout.masterTemplate')
@section('content')
<div style="height: 575px" class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tabel Mahasiswa</h4>
                    <div class="pull-right">
                        <a href="{{route('mahasiswa.create')}}" class="btn btn-primary">Add</a>
                        <a href="{{route('mahasiswa.index', ['download'=>'pdf'])}}" class="btn btn-primary">Print</a>
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
                                @foreach ($mahasiswa as $mhs)
                                    <tr>
                                        <td>{{$mhs->nim}}</td>
                                        <td>{{$mhs->name}}</td>
                                        <td>{{$mhs->angkatan}}</td>
                                        <td>
                                            <a href="{{route('mahasiswa.edit', $mhs->id)}}"
                                                class="btn btn-secondary btn-sm text-capitalize">Edit</a>
                                            <form action="{{route('mahasiswa.destroy', $mhs->id)}}" method="post"
                                                style="display:inline;">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="btn btn-danger btn-sm text-capitalize">Delete</button>
                                            </form>
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
@endsection