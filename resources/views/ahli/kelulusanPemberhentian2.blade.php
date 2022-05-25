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
                            <th>Nota Berhenti</th>
                            <th>Status Pemberhentian</th>
                            <th>Kemaskini</th>
                        </tr>
                        <tr>
                            <td>{{ $ahli->noAhli }}</td>
                            <td>{{ $ahli->nama }}</td>
                            <td>{{ $ahli->noKPBaru }}</td>
                            <td></td>
                            <td>{{ $ahli->tarikhMohon }}</td>
                            <td>{{ $ahli->statusBerhenti }}</td>
                            <td></td>
                            <td>
                                <select name="" class="form-select">
                                    <option value="Belum Diluluskan">Belum Diluluskan</option>
                                    <option value="Telah Diluluskan">Telah Diluluskan</option>
                                    <option value="Telah Dibatalkan">Telah Dibatalkan</option>
                                    <option value="Telah Diluluskan Dengan Penyegeraan">Telah Diluluskan Dengan Penyegeraan
                                    </option>
                                    <option value="Tidak Diluluskan">Tidak Diluluskan</option>
                                </select>
                            </td>
                            <td>
                                <button class="btn btn-secondary btn-block" id="btn_edit">Kemaskini</button>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <div class="col-md-8" id="appearEdit" style="display: none">
                        <form action="" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <table>
                                <tr>
                                    <th>
                                        <label for="tarikhLulus">Tarikh Lulus</label>
                                    </th>
                                    <td>
                                        <input type="date" name="tarikhLulus" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <label for="tarikhBerhenti">Tarikh Berhenti</label>
                                    </th>
                                    <td>
                                        <input type="date" name="tarikhBerhenti" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="2">
                                        <button type="submit" class="btn btn-secondary">Submit</button>
                                    </th>
                                </tr>
                            </table>
                        </form>
                    </div>

                    <script>
                        $("#btn_edit").click(
                            function() {
                                $("#appearEdit").show();
                            }
                        );
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
