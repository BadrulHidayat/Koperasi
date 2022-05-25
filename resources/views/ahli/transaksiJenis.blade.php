@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Koperasi - Transaksi Masuk</h2>

            <div class="card">
                <div class="card-body">
                    <h4>Sila Pilih Jenis Transaksi</h4>
                    <form action="" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <table>
                        <tr>
                            <td>
                                <label><input type="radio" name="jenisTrans" value="Transaksi Biasa"
                                        class="form-check-input" onclick="radio(0)">Transaksi Biasa</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><input type="radio" name="jenisTrans" value="Transaksi Tanpa Rekod"
                                        class="form-check-input" onclick="radio(1)">Transaksi Tanpa Rekod</label>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <div class="col-md-8" id="appear" style="display: none">
                        <table>
                            <tr>
                                <td>
                                    <label for="noRujukan">No Rujukan</label>
                                </td>
                                <td>
                                    <input type="text" name="noRujukan" class="form-control">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-secondary btn-block">Cari</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <br>
                    <a href="{{ route('transaksiTarikh') }}" class="btn btn-secondary btn-block">Seterusnya</a>
                    </form>

                    <script>
                        function radio(x) 
                        {
                            if (x == 1) {
                                document.getElementById('appear').style.display="table";
                            }
                            else {
                                document.getElementById('appear').style.display="none";
                            }
                        }
                    </script>
                </div>

            </div>
        </div>
    </div>
@endsection
