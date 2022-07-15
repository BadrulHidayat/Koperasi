@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Koperasi - Transaksi Masuk</h2>

            <div class="card">
                <div class="card-body">
                    <h4>Debit (Buku Tunai)</h4>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th scope="col">No Akaun</th>
                            <th scope="col">Nama Akaun</th>
                            <th scope="col">Baki Semasa</th>
                        </tr>
                        <tr>
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                    <br>
                    <h4>Daripada (Entity)</h4>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>
                                <label for="noAkaun">No Akaun</label>
                            </th>
                            <td>
                                <input type="text" name="noAkaun" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="namaAkaun">Nama Akaun</label>
                            </th>
                            <td>
                                <input type="text" name="namaAkaun" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <select name="jenisAkaun" class="form-select">
                                    <option value="Individu">Individu</option>
                                    <option value="Syarikat">Syarikat</option>
                                    <option value="No Anggota">No Anggota</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th scope="col">No Akaun</th>
                            <th scope="col">Nama Akaun</th>
                            <th scope="col">Baki semasa</th>
                            <th scope="col">No KP Baru</th>
                            <th scope="col">No KP Lama</th>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </table>
                    <br>
                    <h4>Kredit (Akaun)</h4>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>
                                <label for="noAkaun">No Akaun</label>
                            </th>
                            <td>
                                <input type="text" name="noAkaun" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="namaAkaun">Nama Akaun</label>
                            </th>
                            <td>
                                <input type="text" name="namaAkaun" class="form-control">
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th scope="col">No Akaun</th>
                            <th scope="col">Nama Akaun</th>
                            <th scope="col">Baki semasa</th>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </table>
                    <br>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Pembayaran Bulan</th>
                            <td>
                                <select name="bulan" class="form-select">
                                    <option value="Januari">Januari</option>
                                    <option value="Februari">Februari</option>
                                    <option value="Mac">Mac</option>
                                    <option value="April">April</option>
                                    <option value="Mei">Mei</option>
                                    <option value="Jun">Jun</option>
                                    <option value="Julai">Julai</option>
                                    <option value="Ogos">Ogos</option>
                                    <option value="September">September</option>
                                    <option value="Oktober">Oktober</option>
                                    <option value="November">November</option>
                                    <option value="Disember">Disember</option>
                                </select>
                            </td>
                            <td>
                                <select name="tahun" class="form-select">
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <a href="#" class="btn btn-secondary btn-block">Tambah Transaksi</a>
                    <br><br>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th scope="col">Id Akaun</th>
                            <th scope="col">No Akaun</th>
                            <th scope="col">Nama Akaun</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Bayaran Bulan</th>
                            <th scope="col"></th>
                        </tr>
                        <tr>
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                    <br>
                    <table style="width: 50%">
                        <tr>
                            <th style="width: 40%">
                                <label for="noCek">No Cek</label>
                            </th>
                            <td colspan="2">
                                <input type="text" name="noCek" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="jenisCek">Jenis Cek</label>
                            </th>
                            <td colspan="2">
                                <select name="jenisCek" class="form-select">
                                    <option value="">Pilih</option>
                                    <option value="RAMPAIAN">RAMPAIAN</option>
                                    <option value="LUAR">LUAR</option>
                                    <option value="CAWANGAN">CAWANGAN</option>
                                    <option value="TEMPATAN">TEMPATAN</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="namaCek">Bank\Nama Cek</label>
                            </th>
                            <td colspan="2">
                                <input type="text" name="namaCek" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="jumlah">Jumlah (RM)</label>
                            </th>
                            <td>
                                <input type="text" name="jumlah" class="form-control">
                            </td>
                            <td>
                                <a href="#" class="btn btn-secondary btn-block">Kira</a>
                            </td>
                        </tr>
                         <tr>
                            <th>
                                <label for="password">Password</label>
                            </th>
                            <td colspan="2"> 
                                <input type="password" name="password" class="form-control">
                            </td>
                        </tr>
                         <tr>
                            <th>
                                <label for="nota">Nota</label>
                            </th>
                            <td colspan="2">
                                <textarea type="text" name="nota" rows="3" class="form-control" style="resize: none"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="3">
                                <button type="submit" class="btn btn-success btn-block">Submit</button>
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
