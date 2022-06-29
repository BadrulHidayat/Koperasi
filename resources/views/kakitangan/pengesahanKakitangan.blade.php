@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <h2>Koperasi - Daftar Kakitangan</h2>

        <div class="card">
            <div class="card-body">
                <h4>Maklumat Kakitangan</h4>
                <form action="{{route('simpanKakitangan')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <table style="width: 50%">
                        <tr>
                            <td style="width: 30%">
                                <label for="nama">Nama</label>
                            </td>
                            <td>
                                <input type="text" name="nama" class="form-control" value="{{$nama}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="noKPBaru">No KP Baru</label>
                            </td>
                            <td>
                                <input type="text" name="noKPBaru" class="form-control" value="{{$noKPBaru}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="noKPLama">No KP Lama/Tentera/Polis</label>
                            </td>
                            <td>
                                <input type="text" name="noKPLama" class="form-control" value="{{$noKPLama}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="jantina">Jantina</label>
                            </td>
                            <td>
                                <input type="text" name="jantina" class="form-control" value="{{$jantina}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="bangsa">Bangsa</label>
                            </td>
                            <td>
                                <input type="text" name="bangsa" class="form-control" value="{{$bangsa}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="agama">Agama</label>
                            </td>
                            <td>
                                <input type="text" name="agama" class="form-control" value="{{$agama}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="tarikhLahir">Tarikh Lahir</label>
                            </td>
                            <td>
                                <input type="date" name="tarikhLahir" class="form-control" value="{{$tarikhLahir}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="tempatLahir">Tempat Lahir</label>
                            </td>
                            <td>
                                <input type="text" name="tempatLahir" class="form-control" value="{{$tempatLahir}}" style="color: red" readonly>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <h4>Alamat</h4>
                    <table style="width: 50%">
                        <tr>
                            <td style="width: 30%">
                                <label for="alamat">Alamat</label>
                            </td>
                            <td>
                                <textarea type="text" name="alamat" class="form-control" rows="3" style="resize: none; color:red" readonly>{{$alamat}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="poskod">Poskod</label>
                            </td>
                            <td>
                                <input type="text" name="poskod" class="form-control" value="{{$poskod}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="daerah">Daerah</label>
                            </td>
                            <td>
                                <input type="text" name="daerah" class="form-control" value="{{$daerah}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="negeri">Negeri</label>
                            </td>
                            <td>
                                <input type="text" name="negeri" class="form-control" value="{{$negeri}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="jenisAlamat">Jenis Alamat</label>
                            </td>
                            <td>
                                <input type="text" name="jenisAlamat" class="form-control" value="{{$jenisAlamat}}" style="color: red" readonly>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <H4>Maklumat Perhubungan</H4>
                    <table style="width: 50%">
                        <tr>
                            <td style="width: 30%">
                                <label for="telRumah">Tel (R)</label>
                            </td>
                            <td>
                                <input type="text" name="telRumah" class="form-control" value="{{$telRumah}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="telPejabat">Tel (P)</label>
                            </td>
                            <td>
                                <input type="text" name="telPejabat" class="form-control" value="{{$telPejabat}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="telHP">Tel (HP)</label>
                            </td>
                            <td>
                                <input type="text" name="telHP" class="form-control" value="{{$telHP}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="faks">Faks</label>
                            </td>
                            <td>
                                <input type="text" name="faks" class="form-control" value="{{$faks}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email">Email</label>
                            </td>
                            <td>
                                <input type="email" name="email" class="form-control" value="{{$email}}" style="color: red" readonly>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <h4>Maklumat Akaun</h4>
                    <table style="width: 50%">
                        <tr>
                            <td style="width: 30%">
                                <label for="noAkaunBank">No Akaun Bank</label>
                            </td>
                            <td>
                                <input type="text" name="noAkaunBank" class="form-control" value="{{$noAkaunBank}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="jenisBank">Nama Bank</label>
                            </td>
                            <td>
                                <input type="text" name="jenisBank" class="form-control" value="{{$jenisBank}}" style="color: red" readonly>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <h4>Maklumat Pejabat</h4>
                    <table style="width: 50%">
                        <tr>
                            <td style="width: 30%">
                                <label for="cariP">{{ $jenisCariP }}</label><input type="hidden" name="jenisCariP" value="{{$jenisCariP}}">
                            </td>
                            <td colspan="2">
                                <input type="text" name="cariP" class="form-control" value="{{$cariP}}" style="color: red" readonly>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <h4>Maklumat Pembayar Gaji</h4>
                    <table style="width: 50%">
                        <tr>
                            <td style="width: 30%">
                                <label for="cariPG">{{ $jenisCariPG }}</label><input type="hidden" name="jenisCariPG" value="{{$jenisCariPG}}">
                            </td>
                            <td colspan="2">
                                <input type="text" name="cariPG" class="form-control" value="{{$cariPG}}" style="color: red" readonly>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <h4>Maklumat Pekerjaan</h4>
                    <table style="width: 50%">
                        <tr>
                            <td style="width: 30%">
                                <label for="bahagian">Bahagian</label>
                            </td>
                            <td>
                                <input type="text" name="bahagian" class="form-control" value="{{$bahagian}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="noStaff">No Staff</label>
                            </td>
                            <td>
                                <input type="text" name="noStaff" class="form-control" value="{{$noStaff}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="jawatan">Jawatan</label>
                            </td>
                            <td>
                                <input type="text" name="jawatan" class="form-control" value="{{$jawatan}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="statusKerja">Status Jawatan</label>
                            </td>
                            <td>
                                <input type="text" name="statusKerja" class="form-control" value="{{$statusKerja}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="noGaji">No Gaji</label>
                            </td>
                            <td>
                                <input type="text" name="noGaji" class="form-control" value="{{$noGaji}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="gaji">Gaji (sebulan) RM</label>
                            </td>
                            <td>
                                <input type="text" name="gaji" class="form-control" value="{{$gaji}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="potongan">Potongan Semasa RM</label>
                            </td>
                            <td>
                                <input type="text" name="potongan" class="form-control" value="{{$potongan}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="tarikhMulaKerja">Tarikh Mula Kerja</label>
                            </td>
                            <td>
                                <input type="date" name="tarikhMulaKerja" class="form-control" value="{{$tarikhMulaKerja}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="tarikhAkhirKerja">Tarikh Akhir Kerja</label>
                            </td>
                            <td>
                                <input type="date" name="tarikhAkhirKerja" class="form-control" value="{{$tarikhAkhirKerja}}" style="color: red" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="statusStaff">Status Perkhidmatan</label>
                            </td>
                            <td>
                                <input type="text" name="statusStaff" class="form-control" value="{{$statusStaff}}" style="color: red" readonly>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <a href="{{route('daftarKakitangan')}}" class="btn btn-danger">Batal</a>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
