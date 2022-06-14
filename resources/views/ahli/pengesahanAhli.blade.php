@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <h2>Koperasi - Daftar Ahli</h2>

        <div class="card">
            <div class="card-body">
                <h4>Maklumat Ahli</h4>
                <form action="{{route('simpanAhli')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <table style="width: 50%">
                        <tr>
                            <th style="width: 30%">
                                <label for="statusAhli">Status Keanggotaan</label>
                            </th>
                            <td>
                                <input type="text" name="statusAhli" class="form-control" value="{{$statusAhli}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="noAhliTerkini">No Anggota Terkini</label>
                            </th>
                            <td>
                                <input type="text" name="noAhliTerkini" class="form-control" value="{{$noAhliTerkini}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="noAhli">No Anggota</label>
                            </th>
                            <td>
                                <input type="text" name="noAhli" class="form-control" value="{{$noAhli}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="tarikhDaftar">Tarikh Daftar</label>
                            </th>
                            <td>
                                <input type="date" name="tarikhDaftar" class="form-control" value="{{$tarikhDaftar}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="nama">Nama</label>
                            </th>
                            <td>
                                <input type="text" name="nama" class="form-control" value="{{$nama}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="noKPBaru">No KP Baru</label>
                            </th>
                            <td>
                                <input type="text" name="noKPBaru" class="form-control" value="{{$noKPBaru}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="noKPLama">No KP Lama/Tentera/Polis</label>
                            </th>
                            <td>
                                <input type="text" name="noKPLama" class="form-control" value="{{$noKPLama}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="jantina">Jantina</label>
                            </th>
                            <td>
                                <input type="text" name="jantina" class="form-control" value="{{$jantina}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="bangsa">Bangsa</label>
                            </th>
                            <td>
                                <input type="text" name="bangsa" class="form-control" value="{{$bangsa}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="agama">Agama</label>
                            </th>
                            <td>
                                <input type="text" name="agama" class="form-control" value="{{$agama}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="tarikhLahir">Tarikh Lahir</label>
                            </th>
                            <td>
                                <input type="date" name="tarikhLahir" class="form-control" value="{{$tarikhLahir}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="tempatLahir">Tempat Lahir</label>
                            </th>
                            <td>
                                <input type="text" name="tempatLahir" class="form-control" value="{{$tempatLahir}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="caraPembayaran">Cara Pembayaran</label>
                            </th>
                            <td>
                                <input type="text" name="caraPembayaran" class="form-control" value="{{$caraPembayaran}}" style="color: red" readonly>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <h4>Alamat</h4>
                    <table style="width: 50%">
                        <tr>
                            <th style="width: 30%">
                                <label for="alamat">Alamat</label>
                            </th>
                            <td>
                                <textarea type="text" name="alamat" class="form-control" rows="3" style="resize: none; color:red" readonly>{{$alamat}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="poskod">Poskod</label>
                            </th>
                            <td>
                                <input type="text" name="poskod" class="form-control" value="{{$poskod}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="bandar">Bandar</label>
                            </th>
                            <td>
                                <input type="text" name="bandar" class="form-control" value="{{$bandar}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="negeri">Negeri</label>
                            </th>
                            <td>
                                <input type="text" name="negeri" class="form-control" value="{{$negeri}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="jenisAlamat">Jenis Alamat</label>
                            </th>
                            <td>
                                <input type="text" name="jenisAlamat" class="form-control" value="{{$jenisAlamat}}" style="color: red" readonly>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <H4>No Telefon</H4>
                    <table style="width: 50%">
                        <tr>
                            <th style="width: 30%">
                                <label for="telRumah">Tel (R)</label>
                            </th>
                            <td>
                                <input type="text" name="telRumah" class="form-control" value="{{$telRumah}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="telPejabat">Tel (P)</label>
                            </th>
                            <td>
                                <input type="text" name="telPejabat" class="form-control" value="{{$telPejabat}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="telHP">Tel (HP)</label>
                            </th>
                            <td>
                                <input type="text" name="telHP" class="form-control" value="{{$telHP}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="faks">Faks</label>
                            </th>
                            <td>
                                <input type="text" name="faks" class="form-control" value="{{$faks}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="email">Email</label>
                            </th>
                            <td>
                                <input type="email" name="email" class="form-control" value="{{$email}}" style="color: red" readonly>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <h4>Maklumat Akaun</h4>
                    <table style="width: 50%">
                        <tr>
                            <th style="width: 30%">
                                <label for="noAkaunBank">No Akaun Bank</label>
                            </th>
                            <td>
                                <input type="text" name="noAkaunBank" class="form-control" value="{{$noAkaunBank}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="jenisBank">Nama Bank</label>
                            </th>
                            <td>
                                <input type="text" name="jenisBank" class="form-control" value="{{$jenisBank}}" style="color: red" readonly>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <h4>Maklumat Pejabat</h4>
                    <table style="width: 50%">
                        <tr>
                            <th style="width: 30%">
                                <label for="cariP">{{ $jenisCariP }}</label><input type="hidden" name="jenisCariP" value="{{$jenisCariP}}">
                            </th>
                            <td colspan="2">
                                <input type="text" name="cariP" class="form-control" value="{{$cariP}}" style="color: red" readonly>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <h4>Maklumat Pembayar Gaji</h4>
                    <table style="width: 50%"> 
                        <tr>
                            <th style="width: 30%">
                                <label for="cariPG">{{ $jenisCariPG }}</label><input type="hidden" name="jenisCariPG" value="{{$jenisCariPG}}">
                            </th>
                            <td colspan="2">
                                <input type="text" name="cariPG" class="form-control" value="{{$cariPG}}" style="color: red" readonly>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <h4>Maklumat Pekerjaan</h4>
                    <table style="width: 50%">
                        <tr>
                            <th style="width: 30%">
                                <label for="jawatan">Jawatan</label>
                            </th>
                            <td>
                                <input type="text" name="jawatan" class="form-control" value="{{$jawatan}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="tarikhMulaKerja">Tarikh Mula Kerja</label>
                            </th>
                            <td>
                                <input type="date" name="tarikhMulaKerja" class="form-control" value="{{$tarikhMulaKerja}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="noGaji">No Gaji</label>
                            </th>
                            <td>
                                <input type="text" name="noGaji" class="form-control" value="{{$noGaji}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="Gaji">Gaji (sebulan) RM</label>
                            </th>
                            <td>
                                <input type="text" name="Gaji" class="form-control" value="{{$Gaji}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="potongan">Potongan Semasa RM</label>
                            </th>
                            <td>
                                <input type="text" name="potongan" class="form-control" value="{{$potongan}}" style="color: red" readonly>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <h4>Akta Perlindungan Data Peribadi</h4>
                    <table style="width: 50%">
                        <tr>
                            <td>
                                <input type="text" name="perakuan" class="form-control" value="{{$perakuan}}" style="color: red" readonly>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <a href="{{route('daftarAhli')}}" class="btn btn-danger">Batal</a>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
