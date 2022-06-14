@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="card">
        <div class="card-header">KOPERASI - Daftar Syarikat</div>
        <div class="card-body" style="background: orange">
            <div class="col-md-12">
                <form action="{{route('pengesahanSyarikat')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                    <p>Maklumat Jabatan/Syarikat</p>
                    <table class="col-md-5">
                        <tr>
                            <th>Nama Jabatan/Syarikat </th>
                            <td><input type="text" name="nama_jabatan" class="form-control"></td>
                            <td><a href="">Semak Nama</a></td>
                        </tr>
                        <tr>
                            <th>Kod Jabatan/Syarikat</th>
                            <td><input type="text" name="kod_jabatan" class="form-control"></td>
                            <td>(jika ada) <a href="">Semak Kod</a></td>
                        </tr>
                        <tr>
                            <th>Ketua Jabatan/Syarikat</th>
                            <td><input type="text" name="ketua_jabatan" class="form-control"></td>
                            <td>(jika ada)</td>
                        </tr>
                        <tr>
                            <th>Maklumat Jabatan/Syarikat</th>
                            <td><textarea style="resize: none" name="maklumat_jabatan" id="" cols="50" rows="3" class="form-control"></textarea></td>
                            <td>(jika ada)</td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td>
                                <select name="kategori"  class="form-select">
                                    <option value="">Pilih satu</option>
                                    <option value="Lain-lain">Lain-lain</option>
                                    <option value="Pusat Gaji">Pusat Gaji</option>
                                    <option value="Pejabat">Pejabat</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    
                    <br><br>

                    <p>Alamat</p>
                    <table class="col-md-5">
                        <tr>
                            <th >Alamat</th>
                            <td ><textarea style="resize: none" name="alamat"  cols="50" rows="3" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <th style="width: 100px;">Poskod</th>
                            <td style="width: 150px;"><input type="text" name="poskod" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Daerah</th>
                            <td><input type="text" name="daerah" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Negeri</th>
                            <td><select name="negeri" id="negeri" class="form-select">
                                    <option value="">Pilih Satu</option>
                                    <option value="PERAK DARUL RIDZUAN">PERAK DARUL RIDZUAN</option>
                                    <option value="SELANGOR DARUL EHSAN">SELANGOR DARUL EHSAN</option>
                                    <option value="PAHANG DARUL MAKMUR">PAHANG DARUL MAKMUR</option>
                                    <option value="KELANTAN DARUL NAIM">KELANTAN DARUL NAIM</option>
                                    <option value="JOHOR DARUL TAKZIM">JOHOR DARUL TAKZIM</option>
                                    <option value="KEDAH DARUL AMAN">KEDAH DARUL AMAN</option>
                                    <option value="W.P. LABUAN">W.P. LABUAN</option>
                                    <option value="MELAKA">MELAKA</option>
                                    <option value="NEGERI SEMBILAN DARUL KHUSUS">NEGERI SEMBILAN DARUL KHUSUS</option>
                                    <option value="PULAU PINANG">PULAU PINANG</option>
                                    <option value="PERLIS INDRA KAYANGAN">PERLIS INDRA KAYANGAN</option>
                                    <option value="SARAWAK">SARAWAK</option>
                                    <option value="TERENGGANU DARUL IMAN">TERENGGANU DARUL IMAN</option>
                                    <option value="SABAH">SABAH</option>
                                    <option value="W.P. KUALA LUMPUR">W.P. KUALA LUMPUR</option>
                                    <option value="W.P PUTRAJAYA">W.P. PUTRAJAYA</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th>Jenis Alamat</th>
                            <td><select name="jenis_alamat" id="jenis_alamat" class="form-select">
                                    <option value="">Pilih satu</option>
                                    <option value="KEDIAMAN">Kediaman</option>
                                    <option value="PEJABAT">Pejabat</option>
                                </select></td>
                        </tr>
                         
                    </table>

                    <br><br>

                    <p>Maklumat Perhubungan</p>
                    <table class="col-md-5">
                        <tr>
                            <th>Tel(R)</th>
                            <td><input type="text" name="tel_R" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Tel(P)</th>
                            <td><input type="text" name="tel_P" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Tel(HP)</th>
                            <td><input type="text" name="tel_HP" class="form-control"></td>
                            <td><select name="tel_HP_type" id="tel_HP_type" class="form-select">
                                    <option value="Pilih satu">Pilih satu</option>
                                    <option value="Celcom">Celcom</option>
                                    <option value="DiGi">DiGi</option>
                                    <option value="Maxis">Maxis</option>
                                    <option value="U Mobile">U Mobile</option>
                                    <option value=""></option>
                                </select></td>
                        </tr>
                        <tr>
                            <th>Faks</th>
                            <td><input type="text" name="faks" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>E-mail</th>
                            <td><input type="text" name="email" class="form-control"></td>
                        </tr>
                    </table>
                    <br><br>
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <a href="{{route('home')}}" class="btn btn-danger">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection