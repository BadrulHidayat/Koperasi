@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Koperasi - Yuran Daftar</h2>

            <div class="card">
                <div class="card-body">
                    <h4>Carian Ahli</h4>
                    <form action="{{ route('cariAhliYuran') }}" method="POST" enctype="multipart/form-data">
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
                            <th>Nama</th>
                            <th>No KP Baru</th>
                            <th>No KP Lama</th>
                            <th>Yuran Pendaftaran</th>
                        </tr>
                        @foreach ($ahli as $item)
                            <tr>
                                <td>{{$item->noAhli}}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->noKPBaru}}</td>
                                <td></td>
                                <td>
                                    <a href="{{ route('transaksiJenis') }}" class="btn btn-secondary btn-block">Yuran Pendaftaran</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
