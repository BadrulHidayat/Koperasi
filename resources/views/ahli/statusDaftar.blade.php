@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Koperasi - Daftar Ahli</h2>

            <div class="card">
                <div class="card-body">

                    <table >
                        <tr>
                            <th style="width: 40%">Status Pendaftaran</th>
                            <td width="50%"><label>Berjaya</label></td>
                        </tr>
                        <tr>
                            <th>No Ahli</th>
                            <td><label for="noAhli">{{ $noAhli }}</label></td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td><label for="nama">{{ $nama }}</label></td>
                        </tr>
                        <tr>
                            <th>No KP</th>
                            <td><label for="noKPBaru">{{ $noKPBaru }}</label></td>
                        </tr>
                        <tr>
                            <th>Tarikh Daftar</th>
                            <td><label for="tarikhDaftar">{{ $tarikhDaftar }}</label></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
