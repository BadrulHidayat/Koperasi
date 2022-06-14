@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">KOPERASI - Maklumat Syarikat</div>
            <div class="card-body" style="background: orange">
                <p>Carian Jabatan/Syarikat</p>
                <form action="{{ route('carianSyarikat') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <table>
                        <tr>
                            <td rowspan="3" style="padding: 15px">Masukkan Carian Anda</td>
                            <td><input type="text" name="search" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>
                                <select name="query" id="query" class="form-select">
                                    <option value="kod_jabatan">Kod Jabatan/Syarikat</option>
                                    <option value="nama_jabatan">Nama Jabatan/Syarikat</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><button class="btn btn-secondary" type="submit">Cari</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection
