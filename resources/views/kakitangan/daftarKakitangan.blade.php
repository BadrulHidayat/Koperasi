@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Koperasi - Daftar Kakitangan</h2>

            <div class="card">
                <div class="card-body">
                    <h4>Maklumat Kakitangan</h4>
                    <form action="{{route('pengesahanKakitangan')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table style="width: 50%">
                            <tr>
                                <th style="width: 30%">
                                    <label for="noStaffTerkini">No Staff Terkini</label>
                                </th>
                                <td>
                                    <input type="text" name="noStaffTerkini" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="nama">Nama</label>
                                </th>
                                <td>
                                    <input type="text" name="nama" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="noKPBaru">No KP Baru</label>
                                </th>
                                <td>
                                    <input type="text" name="noKPBaru" class="form-control">
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
                                    <label><input type="radio" name="jantina" value="Lelaki" class="form-check-input">Lelaki</label>&nbsp;
                                    <label><input type="radio" name="jantina" value="Perempuan" class="form-check-input">Perempuan</label>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="bangsa">Bangsa</label>
                                </th>
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
                                <th>
                                    <label for="agama">Agama</label>
                                </th>
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
                                <th>
                                    <label for="tarikhLahir">Tarikh Lahir</label>
                                </th>
                                <td>
                                    <input type="date" name="tarikhLahir" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="tempatLahir">Tempat Lahir</label>
                                </th>
                                <td>
                                    <input type="text" name="tempatLahir" class="form-control">
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
                                    <textarea type="text" name="alamat" class="form-control" rows="3" style="resize: none"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="poskod">Poskod</label>
                                </th>
                                <td>
                                    <input type="text" name="poskod" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="daerah">Daerah</label>
                                </th>
                                <td>
                                    <input type="text" name="daerah" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="negeri">Negeri</label>
                                </th>
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
                                <th>
                                    <label for="jenisAlamat">Jenis Alamat</label>
                                </th>
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
                        <H4>Maklumat Perhubungan</H4>
                        <table style="width: 50%">
                            <tr>
                                <th style="width: 30%">
                                    <label for="telRumah">Tel (R)</label>
                                </th>
                                <td>
                                    <input type="text" name="telRumah" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="telPejabat">Tel (P)</label>
                                </th>
                                <td>
                                    <input type="text" name="telPejabat" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="telHP">Tel (HP)</label>
                                </th>
                                <td>
                                    <input type="text" name="telHP" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="faks">Faks</label>
                                </th>
                                <td>
                                    <input type="text" name="faks" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="email">Email</label>
                                </th>
                                <td>
                                    <input type="email" name="email" class="form-control">
                                </td>
                            </tr>
                        </table>
                        <br>
                        <h4>Maklumat Akaun Bank</h4>
                        <table style="width: 50%">
                            <tr>
                                <th style="width:30%">
                                    <label for="noAkaunBank">No Akaun Bank</label>
                                </th>
                                <td>
                                    <input type="text" name="noAkaunBank" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="jenisBank">Nama Bank</label>
                                </th>
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
                                    <label for="bahagian">Bahagian</label>
                                </th>
                                <td>
                                    <input type="text" name="bahagian" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="noStaff">No Staff</label>
                                </th>
                                <td>
                                    <input type="text" name="noStaff" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="jawatan">Jawatan</label>
                                </th>
                                <td>
                                    <input type="text" name="jawatan" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="statusKerja">Status Jawatan</label>
                                </th>
                                <td>
                                    <select name="statusKerja" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="Tetap">Tetap</option>
                                        <option value="Sementara">Sementara</option>
                                        <option value="Kontrak">Kontrak</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="noGaji">No Gaji</label>
                                </th>
                                <td>
                                    <input type="text" name="noGaji" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="gaji">Gaji (sebulan) RM</label>
                                </th>
                                <td>
                                    <input type="text" name="gaji" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="potongan">Potongan Semasa RM</label>
                                </th>
                                <td>
                                    <input type="text" name="potongan" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="tarikhMulaKerja">Tarikh Mula Kerja</label>
                                </th>
                                <td>
                                    <input type="date" name="tarikhMulaKerja" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="tarikhAkhirKerja">Tarikh Akhir Kerja</label>
                                </th>
                                <td>
                                    <input type="date" name="tarikhAkhirKerja" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="statusStaff">Status</label>
                                </th>
                                <td>
                                    <select name="statusStaff" class="form-select">
                                        <option value="">Pilih</option>
                                        <option value="Berkhidmat">Berkhidmat</option>
                                        <option value="Berhenti">Berhenti</option>
                                        <option value="Digantung">Digantung</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a href="/"><button class="btn btn-danger">Batal</button></a> 
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
