@extends('admin.layout.masterTemplate')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Edit Profile</h5>
            </div>
            <div class="card-body">
                <form action="{{route('mahasiswa.update', $mahasiswa->id)}}" method="post">
                @csrf
                @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>NIM</label>
                                <input type="text" class="form-control" placeholder=""
                                    name="nim" value="{{$mahasiswa->nim}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder=""
                                    name="name" value="{{$mahasiswa->name}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Angkatan</label>
                                <input type="text" class="form-control" placeholder=""
                                    name="angkatan" value="{{$mahasiswa->angkatan}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection