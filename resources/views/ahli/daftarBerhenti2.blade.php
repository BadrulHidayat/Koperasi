@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Koperasi - Daftar Ahli Berhenti</h2>

            <div class="card">
                <div class="card-body">
                    <h4>Daftar / Kemaskini Anggota Berhenti</h4>
                    <form action="{{ route('cariAhliBerhenti') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table>
                            <tr>
                                <th>
                                    <label for="carian">Masukkan Carian Anda</label>
                                </th>
                                <td>
                                    <input type="text" name="carian" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="jenisCarian">Jenis Carian</label>
                                </th>
                                <td>
                                    <select name="jenisCarian" class="form-select">
                                        <option value="noAhli">No Ahli</option>
                                        <option value="nama">Nama</option>
                                        <option value="noKPBaru">No Kp Baru</option>
                                        <option value="noKPLama">No Kp Lama</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="submit" class="btn btn-secondary">Cari</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <br>

                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>No Ahli</th>
                            <th>Tarikh Masuk</th>
                            <th>Tarikh Berhenti</th>
                            <th>Nama</th>
                            <th>No KP Baru</th>
                            <th>No KP Lama</th>
                            <th>Pilih</th>
                        </tr>
                        @foreach ($ahli as $item)
                            <tr>
                                <td scope="row">{{ $item->noAhli }}</td>
                                <td>{{ $item->tarikhDaftar }}</td>
                                <td></td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->noKPBaru }}</td>
                                <td>{{ $item->noKPLama }}</td>
                                <td><a href="{{ route('daftarBerhentiForm', $item->noKPBaru) }}" class="btn btn-secondary btn-block">Pilih</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@if (session()->has('message'))
    <div class="alert alert-info">
        {{ session('message') }}
    </div>
@endif
