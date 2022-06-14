@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="card">
        <div class="card-header">KOPERASI - Daftar Individu</div>
        <div class="card-body">
            <table>
                <tr>
                    <td style="width: 40%;">Status Pendaftaran&nbsp;&nbsp;&nbsp;</td>
                    <th style="width: 60%;">Berjaya</th>
                </tr>
                <tr>
                    <td>Nama</td>
                    <th>{{$nama}}</th>
                </tr>
                <tr>
                    <td>No KP</td>
                    <th>{{$noKP}}</th>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection