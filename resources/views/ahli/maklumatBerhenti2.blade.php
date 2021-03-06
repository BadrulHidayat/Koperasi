@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Koperasi - Maklumat Ahli Berhenti</h2>

            <div class="card">
                <div class="card-body">
                    <h4>Carian Ahli</h4>
                    <form action="{{ route('cariMaklumatBerhenti') }}" method="POST" enctype="multipart/form-data">
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

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>No Ahli</th>
                                <th>Nama</th>
                                <th>No KP Baru</th>
                                <th>No KP Lama</th>
                                <th>Tarikh Mohon</th>
                                <th>Tarikh Lulus</th>
                                <th>Tarikh Berhenti</th>
                                <th>Status</th>
                                <th>Status Kelulusan</th>
                                <th>Sebab Berhenti</th>
                                <th>Jumlah Hari untuk Tindakan</th>
                                <th>Dicipta Oleh</th>
                                <th>Dicipta Pada</th>
                                <th>Dikemaskini Oleh</th>
                                <th>Dikemaskini Pada</th>
                                <th>Kemaskini</th>
                                <th>Padam</th>
                            </tr>
                            @foreach ($ahli as $item)
                                <tr>
                                    <td>{{ $item->noAhli }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->noKPBaru }}</td>
                                    <td>{{ $item->noKPLama }}</td>
                                    <td>{{ $item->tarikhMohon }}</td>
                                    <td>{{ $item->tarikhLulus }}</td>
                                    <td>{{ $item->tarikhBerhenti }}</td>
                                    <td>Daftar Berhenti</td>
                                    <td>{{ $item->statusKelulusan }}</td>
                                    <td>{{ $item->statusBerhenti }}</td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ $item->created_at }}</td>
                                    <td></td>
                                    <td>{{ $item->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('maklumatBerhentiUpdate', $item->noKPBaru) }}" class="btn btn-success btn-block">Kemaskini</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('padamMaklumatBerhenti', $item->id) }}" class="btn btn-danger btn-block">Padam</a>
                                    </td>
                                </tr>
                           @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
