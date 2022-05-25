@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Koperasi - Yuran Daftar</h2>

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
                                <th>{{ $ahli->noAhli }}</th>
                                <th>{{ $ahli->tarikhDaftar }}</th>
                                <th>{{ $ahli->tarikhBerhenti }}</th>
                                <th>{{ $ahli->nama }}</th>
                                <th>{{ $ahli->noKPBaru }}</th>
                                <th>{{ $ahli->noKPLama }}</th>
                            </tr>
                    </table>
                    <br>
                    <form action="{{ route('kemaskiniBerhenti', $ahli->noKPBaru) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="noAhli" class="form-control" value="{{ $ahli->noAhli }}">
                        <table>
                            <tr>
                                <th>
                                    <label for="tarikhMohon">Tarikh Mohon</label>
                                </th>
                                <td>
                                    <input type="date" name="tarikhMohon" class="form-control" value="{{ $ahli->tarikhMohon }}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="statusBerhenti">Status Berhenti</label>
                                </th>
                                <td>
                                    <select name="statusBerhenti" class="form-select">
                                        <option value="{{ $ahli->statusBerhenti }}">{{ $ahli->statusBerhenti }}</option>
                                        <option value="BERHENTI KERANA BERSARA">BERHENTI KERANA BERSARA</option>
                                        <option value="BERHENTI KERANA KEMATIAN">BERHENTI KERANA KEMATIAN</option>
                                        <option value="BERHENTI KERANA SEBAB PERIBADI">BERHENTI KERANA SEBAB PERIBADI</option>
                                        <option value="DIBERHENTIKAN OLEH KOPERASI">DIBERHENTIKAN OLEH KOPERASI</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="sebabBerhenti">Nyatakan Sebab (Jika Ada)</label>
                                </th>
                                <td>
                                    <input type="text" name="sebabBerhenti" class="form-control" value="{{ $ahli->sebabBerhenti}}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="akhirPotongan">Tarikh Berhenti Potongan Gaji</label>
                                </th>
                                <td>
                                    <input type="date" name="akhirPotongan" class="form-control" value="{{ $ahli->akhirPotongan }}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="tarikhPengembalian">Tarikh Pengembalian</label>
                                </th>
                                <td>
                                    <input type="date" name="tarikhPengembalian" class="form-control" value="{{ $ahli->tarikhPengembalian }}">
                                </td>
                            </tr>
                            <tr>
                                <th colspan="2">
                                  <button type="submit" class="btn btn-secondary btn-block">Kemaskini</button> 
                                </th>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
