@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Koperasi - Daftar Ahli</h2>

            <div class="card">
                <div class="card-body">
                    <h4>Maklumat Ahli</h4>
                    <form action="{{route('pengesahanAhli')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table style="width: 50%">
                            <tr>
                                <td style="width: 30%">
                                    <label for="statusAhli">Status Keanggotaan <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <select name="statusAhli" class="form-select">
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
                                <td>
                                    <label for="noAhliTerkini">No Ahli Terkini</label>
                                </td>
                                <td>
                                    <input type="text" name="noAhliTerkini" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="noAhli">No Ahli <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <input type="text" name="noAhli" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="tarikhDaftar">Tarikh Daftar <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <input type="date" name="tarikhDaftar" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="nama">Nama <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <input type="text" name="nama" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="noKPBaru">No KP Baru <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <input type="text" name="noKPBaru" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="noKPLama">No KP Lama/Tentera/Polis</label>
                                </td>
                                <td>
                                    <input type="text" name="noKPLama" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="jantina">Jantina <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <label><input type="radio" name="jantina" value="Lelaki" class="form-check-input">Lelaki</label>&nbsp;
                                    <label><input type="radio" name="jantina" value="Perempuan" class="form-check-input">Perempuan</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="bangsa">Bangsa <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <select name="bangsa" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="Melayu">Melayu</option>
                                        <option value="Cina">Cina</option>
                                        <option value="India">India</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="agama">Agama <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <select name="agama" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Kristian">Kristian</option>
                                        <option value="Sikh">Sikh</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="tarikhLahir">Tarikh Lahir <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <input type="date" name="tarikhLahir" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="tempatLahir">Tempat Lahir <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <input type="text" name="tempatLahir" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="caraPembayaran">Cara Pembayaran <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <select name="caraPembayaran" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="Sendiri">Sendiri</option>
                                        <option value="Bendahari/Majikan">Bendahari/Majikan</option>
                                        <option value="BPA">BPA</option>
                                        <option value="Arahan Bank">Arahan Bank</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <h4>Alamat</h4>
                        <table style="width: 50%">
                            <tr>
                                <td style="width: 30%">
                                    <label for="alamat">Alamat <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <textarea type="text" name="alamat" class="form-control" rows="3" style="resize: none"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="poskod">Poskod <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <input type="text" name="poskod" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="bandar">Bandar <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <input type="text" name="bandar" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="negeri">Negeri <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <select name="negeri" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="Perlis">Perlis</option>
                                        <option value="Kedah">Kedah</option>
                                        <option value="Pulau Pinang">Pulau Pinang</option>
                                        <option value="Perak">Perak</option>
                                        <option value="Kelantan">Kelantan</option>
                                        <option value="Terengganu">Terengganu</option>
                                        <option value="Pahang">Pahang</option>
                                        <option value="Melaka">Melaka</option>
                                        <option value="Negeri Sembilan">Negeri Sembilan</option>
                                        <option value="Selangor">Selangor</option>
                                        <option value="Johor">Johor</option>
                                        <option value="Sarawak">Sarawak</option>
                                        <option value="Sabah">Sabah</option>
                                        <option value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan Kuala Lumpur</option>
                                        <option value="Wilayah Persekutuan Putrajaya">Wilayah Persekutuan Putrajaya</option>
                                        <option value="Wilayah Persekutuan Labuan">Wilayah Persekutuan Labuan</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="jenisAlamat">Jenis Alamat <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <select name="jenisAlamat" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="Kediaman">Kediaman</option>
                                        <option value="Pejabat">Pejabat</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <H4>No Telefon</H4>
                        <table style="width: 50%">
                            <tr>
                                <td style="width: 30%">
                                    <label for="telRumah">Tel (R)</label>
                                </td>
                                <td>
                                    <input type="text" name="telRumah" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="telPejabat">Tel (P)</label>
                                </td>
                                <td>
                                    <input type="text" name="telPejabat" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="telHP">Tel (HP) <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <input type="text" name="telHP" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="faks">Faks</label>
                                </td>
                                <td>
                                    <input type="text" name="faks" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="email">Email <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <input type="email" name="email" class="form-control">
                                </td>
                            </tr>
                        </table>
                        <br>
                        <h4>Maklumat Akaun</h4>
                        <table style="width: 50%">
                            <tr>
                                <td style="width:30%">
                                    <label for="noAkaunBank">No Akaun Bank <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <input type="text" name="noAkaunBank" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="jenisBank">Nama Bank <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <select name="jenisBank" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="BANK ISLAM">Bank Islam</option>
                                        <option value="AGRO BANK">Agro Bank</option>
                                        <option value="MAYBANK">Maybank</option>
                                        <option value="RHB BANK">RHB Bank</option>
                                        <option value="CIMB BANK">CIMB Bank</option>
                                        <option value="AM BANK">Am Bank</option>
                                        <option value="BANK SIMPANAN NASIONAL">Bank Simpanan Nasional</option>
                                        <option value="BANK RAKYAT">Bank Rakyat</option>
                                        <option value="BANK MUAMALAT">Bank Muamalat</option>
                                        <option value="PUBLIC BANK">Public Bank</option>
                                        <option value="ALLIANCE BANK">Alliance Bank</option>
                                        <option value="STANDARD CHARTERED BANK">Standard Chartered Bank</option>
                                        <option value="EON BANK">EON Bank</option>
                                        <option value="HONG LEONG BANK">Hong Leong Bank</option>
                                        <option value="HSBC BANK">HSBC Bank</option>
                                        <option value="AFFIN BANK">Affin Bank</option>
                                        <option value="CITY BANK">City Bank</option>
                                        <option value="UNITED OVERSEAS BANK">United Overseas Bank</option>
                                        <option value="OCBC BANK">OCBC Bank</option>
                                        <option value="AL RAJHI BANK">Al Rajhi Bank</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <h4>Maklumat Pejabat</h4>
                        <table style="width: 50%">
                            <tr>
                                <td style="width: 30%">
                                    <label for="cariP">Carian</label>
                                </td>
                                <td colspan="2">
                                    <input type="text" name="cariP" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="jenisCariP">Kategori</label>
                                </td>
                                <td>
                                    <select name="jenisCariP" class="form-select">
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
                                <td style="width: 30%">
                                    <label for="cariPG">Carian</label>
                                </td>
                                <td colspan="2">
                                    <input type="text" name="cariPG" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="jenisCariPG">Kategori</label>
                                </td>
                                <td>
                                    <select name="jenisCariPG" class="form-select">
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
                                <td style="width: 30%">
                                    <label for="jawatan">Jawatan <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <input type="text" name="jawatan" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="tarikhMulaKerja">Tarikh Mula Kerja <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <input type="date" name="tarikhMulaKerja" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="noGaji">No Gaji <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <input type="text" name="noGaji" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="Gaji">Gaji (sebulan) RM <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <input type="text" name="Gaji" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="potongan">Potongan Semasa RM <span style="color:red;">✴</span></label>
                                </td>
                                <td>
                                    <input type="text" name="potongan" class="form-control">
                                </td>
                            </tr>
                        </table>
                        <br>
                        <h4>Akta Perlindungan Data Peribadi</h4>
                        <table>
                            <tr>
                                <td>
                                    <label>Sila tanda kotak berkenaan. <span style="color:red;">✴</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label><input type="radio" name="perakuan" value="Ya, bersetuju untuk Koperasi memproses data peribadi" class="form-check-input">Ya, bersetuju untuk Koperasi memproses data peribadi</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label><input type="radio" name="perakuan" value="Tidak, bersetuju untuk memproses data peribadi" class="form-check-input">Tidak, bersetuju untuk memproses data peribadi</label>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a href="{{ route('home') }}"><button class="btn btn-danger">Batal</button></a> 
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
