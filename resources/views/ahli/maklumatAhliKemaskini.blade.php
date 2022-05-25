@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Koperasi - Daftar Ahli</h2>

            <div class="card">
                <div class="card-body">
                    <h4>Maklumat Ahli</h4>
                    <form action="{{ route('kemaskiniAhli', $ahli->noKPBaru) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table style="width: 50%">
                            <tr>
                                <th style="width: 30%">
                                    <label for="statusAhli">Status Keanggotaan</label>
                                </th>
                                <td>
                                    <select name="statusAhli" class="form-select">
                                        <option value="{{$ahli->statusAhli}}">{{$ahli->statusAhli}}</option>
                                        <option value="Anggota Baharu">Anggota Baharu</option>
                                        <option value="Bekerja">Bekerja</option>
                                        <option value="Pesara">Pesara</option>
                                        <option value="Pesara (Bekerja Kontrak)">Pesara (Bekerja Kontrak)</option>
                                        <option value="BERHENTI">BERHENTI</option>
                                        <option value="BERHENTI KERANA BERSARA">BERHENTI KERANA BERSARA</option>
                                        <option value="BERHENTI KERANA KEMATIAN">BERHENTI KERANA KEMATIAN</option>
                                        <option value="BERHENTI SEBAB PERIBADI">BERHENTI SEBAB PERIBADI</option>
                                        <option value="DIBERHENTIKAN OLEH KOPERASI">DIBERHENTIKAN OLEH KOPERASI</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="noAhliTerkini">No Anggota Terkini</label>
                                </th>
                                <td>
                                    <input type="text" name="noAhliTerkini" class="form-control" value="{{$ahli->noAhliTerkini}}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="noAhli">No Anggota</label>
                                </th>
                                <td>
                                    <input type="text" name="noAhli" class="form-control" value="{{$ahli->noAhli}}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="tarikhDaftar">Tarikh Daftar</label>
                                </th>
                                <td>
                                    <input type="date" name="tarikhDaftar" class="form-control" value="{{$ahli->tarikhDaftar}}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="nama">Nama</label>
                                </th>
                                <td>
                                    <input type="text" name="nama" class="form-control" value="{{$ahli->nama}}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="noKPBaru">No KP Baru</label>
                                </th>
                                <td>
                                    <input type="text" name="noKPBaru" class="form-control" value="{{$ahli->noKPBaru}}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="noKPLama">No KP Lama/Tentera/Polis</label>
                                </th>
                                <td>
                                    <input type="text" name="noKPLama" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="jantina">Jantina</label>
                                </th>
                                <td>
                                    <label><input type="radio" name="jantina" value="Lelaki" class="form-check-input" <?php if ($ahli->jantina == "Lelaki") echo "checked" ?>>Lelaki</label>&nbsp;
                                    <label><input type="radio" name="jantina" value="Perempuan" class="form-check-input" <?php if ($ahli->jantina == "Perempuan") echo "checked" ?>>Perempuan</label>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="bangsa">Bangsa</label>
                                </th>
                                <td>
                                    <select name="bangsa" class="form-select">
                                        <option value="{{$ahli->bangsa}}">{{$ahli->bangsa}}</option>
                                        <option value="Melayu">Melayu</option>
                                        <option value="Cina">Cina</option>
                                        <option value="India">India</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="agama">Agama</label>
                                </th>
                                <td>
                                    <select name="agama" class="form-select">
                                        <option value="{{$ahli->agama}}">{{$ahli->agama}}</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Kristian">Kristian</option>
                                        <option value="Sikh">Sikh</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="tarikhLahir">Tarikh Lahir</label>
                                </th>
                                <td>
                                    <input type="date" name="tarikhLahir" class="form-control" value="{{$ahli->tarikhLahir}}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="tempatLahir">Tempat Lahir</label>
                                </th>
                                <td>
                                    <input type="text" name="tempatLahir" class="form-control" value="{{$ahli->tempatLahir}}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="caraPembayaran">Cara Pembayaran</label>
                                </th>
                                <td>
                                    <select name="caraPembayaran" class="form-select">
                                        <option value="{{$ahli->caraPembayaran}}">{{$ahli->caraPembayaran}}</option>
                                        <option value="Sendiri">Sendiri</option>
                                        <option value="Bendahari/Majikan">Bendahari/Majikan</option>
                                        <option value="BPA">BPA</option>
                                        <option value="Arahan Bank">Arahan Bank</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <h4>Maklumat Pejabat</h4>
                        <table style="width: 50%">
                            <tr>
                                <th style="width: 30%">
                                    <label for="carianPejabat">Carian</label>
                                </th>
                                <td colspan="2">
                                    <input type="text" name="carianPejabat" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="jenisCarianPejabat">Kategori</label>
                                </th>
                                <td>
                                    <select name="jenisCarianPejabat" class="form-select">
                                        <option value="Kod">Kod</option>
                                        <option value="Nama">Nama</option>
                                    </select>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-secondary">Cari</button>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <h4>Maklumat Pembayar Gaji</h4>
                        <table style="width:50%">
                            <tr>
                                <th style="width: 30%">
                                    <label for="carianPembayarGaji">Carian</label>
                                </th>
                                <td colspan="2">
                                    <input type="text" name="carianPembayarGaji" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="jenisCarianPembayarGaji">Kategori</label>
                                </th>
                                <td>
                                    <select name="jenisCarianPembayarGaji" class="form-select">
                                        <option value="Kod">Kod</option>
                                        <option value="Nama">Nama</option>
                                    </select>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-secondary">Cari</button>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <h4>Maklumat Pekerjaan</h4>
                        <table style="width:50%">
                            <tr>
                                <th style="width: 30%">
                                    <label for="jawatan">Jawatan</label>
                                </th>
                                <td>
                                    <input type="text" name="jawatan" class="form-control" value="{{$ahli->jawatan}}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="tarikhMulaKerja">Tarikh Mula Kerja</label>
                                </th>
                                <td>
                                    <input type="date" name="tarikhMulaKerja" class="form-control" value="{{$ahli->tarikhMulaKerja}}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="noGaji">No Gaji</label>
                                </th>
                                <td>
                                    <input type="text" name="noGaji" class="form-control" value="{{$ahli->noGaji}}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="Gaji">Gaji (sebulan) RM</label>
                                </th>
                                <td>
                                    <input type="text" name="Gaji" class="form-control" value="{{$ahli->Gaji}}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="potongan">Potongan Semasa RM</label>
                                </th>
                                <td>
                                    <input type="text" name="potongan" class="form-control" value="{{$ahli->potongan}}">
                                </td>
                            </tr>
                        </table>
                        <br>
                        <h4>Akta Perlindungan Data Peribadi</h4>
                        <table>
                            <tr>
                                <th>
                                    <label>Sila tanda kotak berkenaan.</label>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <label><input type="radio" name="perakuan" 
                                        value="Ya, bersetuju untuk Koperasi memproses data peribadi"
                                            class="form-check-input" 
                                            <?php if ($ahli->perakuan == "Ya, bersetuju untuk Koperasi memproses data peribadi") echo "checked" ?>
                                            >Ya, bersetuju untuk Koperasi memproses data peribadi</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label><input type="radio" name="perakuan"
                                            value="Tidak, bersetuju untuk memproses data peribadi"
                                            class="form-check-input" <?php if ($ahli->perakuan == "Tidak, bersetuju untuk memproses data peribadi") echo "checked" ?>
                                            >Tidak, bersetuju untuk memproses data peribadi</label>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a href="{{route('maklumatAhliHasil')}}"><button class="btn btn-danger">Batal</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
