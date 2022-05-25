@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Koperasi - Daftar Kakitangan</h2>

            <div class="card">
                <div class="card-body">
                    <h4>Maklumat Kakitangan</h4>
                    <form action="{{ route('kemaskiniStaff', $staff->noKPBaru) }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table style="width: 50%">
                           
                            <tr>
                                <th style="width: 30%">
                                    <label for="nama">Nama</label>
                                </th>
                                <td>
                                    <input type="text" name="nama" class="form-control" value="{{ $staff->nama }}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="noKPBaru">No KP Baru</label>
                                </th>
                                <td>
                                    <input type="text" name="noKPBaru" class="form-control" value="{{ $staff->noKPBaru }}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="noKPLama">No KP Lama</label>
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
                                    <select name="jantina" class="form-select">
                                        <option value="{{ $staff->jantina }}">{{ $staff->jantina }}</option>
                                        <option value="Lelaki">Lelaki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="bangsa">Bangsa</label>
                                </th>
                                <td>
                                    <select name="bangsa" class="form-select">
                                        <option value="{{ $staff->bangsa }}">{{ $staff->bangsa }}</option>
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
                                        <option value="{{ $staff->agama }}">{{ $staff->agama }}</option>
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
                                    <input type="date" name="tarikhLahir" class="form-control"
                                        value="{{ $staff->tarikhLahir }}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="tempatLahir">Tempat Lahir</label>
                                </th>
                                <td>
                                    <input type="text" name="tempatLahir" class="form-control"
                                        value="{{ $staff->tempatLahir }}">
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
                                    <input type="text" name="bahagian" class="form-control" value="{{ $pekerjaan->bahagian }}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="noStaff">No Staff</label>
                                </th>
                                <td>
                                    <input type="text" name="noStaff" class="form-control" value="{{ $staff->noStaff }}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="jawatan">Jawatan</label>
                                </th>
                                <td>
                                    <input type="text" name="jawatan" class="form-control" value="{{ $pekerjaan->jawatan }}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="statusKerja">Status Kerja</label>
                                </th>
                                <td>
                                    <select name="statusKerja" class="form-control">
                                        <option value="{{ $pekerjaan->statusKerja }}">{{ $pekerjaan->statusKerja }}</option>
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
                                    <input type="text" name="noGaji" class="form-control" value="{{ $pekerjaan->noGaji }}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="gaji">Gaji (sebulan) RM</label>
                                </th>
                                <td>
                                    <input type="text" name="gaji" class="form-control" value="{{ $pekerjaan->gaji }}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="potongan">Potongan Semasa RM</label>
                                </th>
                                <td>
                                    <input type="text" name="potongan" class="form-control" value="{{ $pekerjaan->potongan }}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="tarikhMulaKerja">Tarikh Mula Kerja</label>
                                </th>
                                <td>
                                    <input type="date" name="tarikhMulaKerja" class="form-control" value="{{ $pekerjaan->tarikhMulaKerja }}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="tarikhAkhirKerja">Tarikh Akhir Kerja</label>
                                </th>
                                <td>
                                    <input type="date" name="tarikhAkhirKerja" class="form-control" value="{{ $pekerjaan->tarikhAkhirKerja }}">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="statusStaff">Status</label>
                                </th>
                                <td>
                                    <select name="statusStaff" class="form-select">
                                        <option value="{{ $pekerjaan->statusStaff }}">{{ $pekerjaan->statusStaff }}</option>
                                        <option value="Berkhidmat">Berkhidmat</option>
                                        <option value="Berhenti">Berhenti</option>
                                        <option value="Digantung">Digantung</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a href="{{route('maklumatStaffHasil')}}"><button class="btn btn-danger">Batal</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
