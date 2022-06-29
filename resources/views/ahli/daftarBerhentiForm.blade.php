@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Koperasi - Daftar Ahli Berhenti</h2>

            <div class="card">
                <div class="card-body">
                    <h4>Daftar / Kemaskini Anggota Berhenti</h4>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>No Ahli</th>
                            <th>Tarikh Masuk</th>
                            <th>Tarikh Berhenti</th>
                            <th>Nama</th>
                            <th>No KP Baru</th>
                            <th>No KP Lama</th>
                        </tr>
                            <tr>
                                <td scope="row">{{ $ahli->noAhli }}</td>
                                <td>{{ $ahli->tarikhDaftar }}</td>
                                <td></td>
                                <td>{{ $ahli->nama }}</td>
                                <td>{{ $ahli->noKPBaru }}</td>
                                <td>{{ $ahli->noKPLama }}</td>
                            </tr>
                    </table>
                    <br><br>
                    <form action="{{ route('daftarBerhentiTambah')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table>
                            <input type="hidden" name="noKPBaru" value="{{$ahli->noKPBaru}}">
                            <input type="hidden" name="noAhli" value="{{$ahli->noAhli}}">
                            <tr>
                                <th>
                                    <label for="tarikhMohon">Tarikh Mohon</label>
                                </th>
                                <td>
                                    <input type="date" name="tarikhMohon" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="statusBerhenti">Status Berhenti</label>
                                </th>
                                <td>
                                    <select name="statusBerhenti" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="BERHENTI KERANA BERSARA">BERHENTI KERANA BERSARA</option>
                                        <option value="BERHENTI KERANA KEMATIAN">BERHENTI KERANA KEMATIAN</option>
                                        <option value="BERHENTI KERANA SEBAB PERIBADI">BERHENTI KERANA SEBAB PERIBADI</option>
                                        <option value="DIBERHENTIKAN OLEH KOPERASI">DIBERHENTIKAN OLEH KOPERASI</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="sebabBerhenti">Nyatakan sebab (Jika ada)</label>
                                </th>
                                <td>
                                    <input type="text" name="sebabBerhenti" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th colspan="2">
                                    <button type="submit" class="btn btn-success btn-block">Daftar</button>
                                    <button class="btn btn-danger btn-block">Batal</button>
                                </th>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
