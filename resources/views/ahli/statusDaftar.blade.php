@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Koperasi - Daftar Ahli</h2>

            <div class="card">
                <div class="card-body">

                    <table >
                        <tr>
                            <td style="width: 40%">Status Pendaftaran</td>
                            <th width="50%"><label>Berjaya</label></th>
                        </tr>
                        <tr>
                            <td>No Ahli</td>
                            <th><label for="noAhli">{{ $noAhli }}</label></th>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <th><label for="nama">{{ $nama }}</label></th>
                        </tr>
                        <tr>
                            <td>No KP</td>
                            <th><label for="noKPBaru">{{ $noKPBaru }}</label></th>
                        </tr>
                        <tr>
                            <td>Tarikh Daftar</td>
                            <th><label for="tarikhDaftar">{{ $tarikhDaftar }}</label></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
