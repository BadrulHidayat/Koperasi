@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>

        <div class="col-md-3">
            <br>
            <div class="card">
                <div class="card-header">
                    Ahli
                </div>
                <div class="card-body">
                    <a href="{{ route('daftarAhli') }}" class="btn btn-success btn-block">Daftar Ahli</a>
                </div>
                <div class="card-body">
                    <a href="{{ route('maklumatAhli') }}" class="btn btn-success btn-block">Maklumat Ahli</a>
                </div>
                <div class="card-body">
                    <a href="{{ route('daftarYuran') }}" class="btn btn-success btn-block">Yuran Pendaftaran</a>
                </div>
                <div class="card-body">
                    <a href="{{ route('daftarBerhenti') }}" class="btn btn-success btn-block">Daftar Berhenti</a>
                </div>
                 <div class="card-body">
                    <a href="{{ route('maklumatBerhenti') }}" class="btn btn-success btn-block">Maklumat Berhenti</a>
                </div>
                <div class="card-body">
                    <a href="{{ route('kelulusanPemberhentian') }}" class="btn btn-success btn-block">Kemaskini Kelulusan Pemberhentian</a>
                </div>
                 <div class="card-body">
                    <a href="{{ route('daftarKakitangan') }}" class="btn btn-success btn-block">Daftar Kakitangan</a>
                </div>
                  <div class="card-body">
                    <a href="{{ route('maklumatStaff') }}" class="btn btn-success btn-block">Maklumat Kakitangan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
