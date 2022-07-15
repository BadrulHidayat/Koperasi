@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Koperasi - Maklumat Ahli</h2>

            <div class="card">
                <div class="card-body">
                    <h4>Sila Pilih Tarikh Transaksi</h4>
                    <form action="" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table>
                            <tr>
                                <td>
                                    <label><input type="radio" name="tarikhTrans" value="Transaksi Semasa"
                                        class="form-check-input" onclick="radio(0)">Transaksi Semasa</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label><input type="radio" name="tarikhTrans" value="Transaksi Back Dated"
                                            class="form-check-input" onclick="radio(1)">Transaksi Back Dated</label>
                                </td>
                            </tr>
                        </table>
                        <div class="col-md-8" id="appear" style="display: none">
                            <table>
                                <tr>
                                    <td align="center">
                                        <label for="backDated">Tarikh Transaksi</label>
                                    </td>
                                    <td>
                                        <input type="date" name="backDated" class="form-control">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <a href="{{ route('transaksiMasuk') }}" class="btn btn-secondary btn-block">Submit</a>
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
