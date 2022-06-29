@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Koperasi - Kemaskini Kelulusan Pemberhentian</h2>

            <div class="card">
                <div class="card-body">
                    <h4>Kemaskini Status Anggota Berhenti</h4>
                    <hr>
                    <form action="{{ route('lulusBerhentiCari') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table>
                            <tr>
                                <th>
                                    <label for="carian">No Anggota</label>
                                </th>
                                <td>
                                    <input type="text" name="carian" class="form-control">
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
                    <br>

                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>No Ahli</th>
                            <th>Nama</th>
                            <th>No KP Baru</th>
                            <th>No KP Lama</th>
                            <th>Tarikh Mohon</th>
                            <th>Sebab Berhenti</th>
                            <th>Pilih</th>
                        </tr>
                        @foreach ($ahli as $item)
                        <tr>
                            <td>{{ $item->noAhli }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->noKPBaru }}</td>
                            <td>{{ $item->noKPLama }}</td>
                            <td>{{ $item->tarikhMohon }}</td>
                            <td>{{ $item->statusBerhenti }}</td>
                            <td>
                                <a href="{{ route('kelulusanPemberhentianEdit', $item->noKPBaru) }}" class="btn btn-secondary btn-block">Pilih</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
