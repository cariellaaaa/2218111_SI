<ul class="nav">
    <li @if(request()->is('dashboard')) class="active" @endif>
        <a href="/dashboard">
            <i class="nc-icon nc-bank"></i>
            <p>Dashboard</p>
        </a>
    </li>
    <li @if(request()->is('mahasiswa')) class="active" @endif">
        <a href='{{url('mahasiswa')}}'>
            <i class="nc-icon nc-badge"></i>
            <p>Alternatif</p>
        </a>
    </li>
    <li @if(request()->is('kriteria')) class="active" @endif>
        <a href="{{url('kriteria')}}">
            <i class="nc-icon nc-bullet-list-67"></i>
            <p>Kriteria</p>
        </a>
    </li>
    <li @if(request()->is('penilaian')) class="active" @endif>
        <a href="{{url('penilaian')}}">
            <i class="nc-icon nc-check-2"></i>
            <p>Penilaian</p>
        </a>
    </li>
    <li @if(request()->is('proses')) class="active" @endif>
        <a href="{{url('proses')}}">
            <i class="nc-icon nc-tile-56"></i>
            <p>Proses</p>
        </a>
    </li>
    <li @if(request()->is('cetak')) class="active" @endif>
        <a href="{{url('cetak')}}">
            <i class="nc-icon nc-cloud-download-93"></i>
            <p>Cetak</p>
        </a>
    </li>
    <li @if(request()->is('user')) class="active" @endif>
        <a href="{{url('user')}}">
            <i class="nc-icon nc-single-02"></i>
            <p>User Profile</p>
        </a>
    </li>
</ul>