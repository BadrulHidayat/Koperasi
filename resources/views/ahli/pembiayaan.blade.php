@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Koperasi - Maklumat Ahli</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Maklumat Pembiayaan</h4>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col">Transaksi</th>
                                <th scope="col">No Rujukan</th>
                                <th scope="col">No Anggota</th>
                                <th scope="col">Nama Pemohon</th>
                                <th scope="col">Kod</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Jumlah Mohon</th>
                                <th scope="col">Jumlah Biaya</th>
                                <th scope="col">Jumlah Untung</th>
                                <th scope="col">Tempoh</th>
                                <th scope="col">Ansuran</th>
                                <th scope="col">Baki Pembiayaan</th>
                                <th scope="col">Tarikh Mula</th>
                                <th scope="col">Tarikh Akhir</th>
                                <th scope="col">Tarikh Lulus</th>
                                <th scope="col">Status</th>
                                <th scope="col">Cipta Akaun</th>
                                <th scope="col">Dicipta Oleh</th>
                                <th scope="col">Dicipta Pada</th>
                                <th scope="col">Dikemaskini Oleh</th>
                                <th scope="col">Dikemaskini Pada</th>
                            </tr>
                            @foreach ($ahli as $item)
                                <tr>
                                    <th scope="row"></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <br>
                    <h4>Maklumat Sebagai Penjamin</h4>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th scope="col">No Anggota</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No Rujukan</th>
                            <th scope="col">No Anggota Peminjam</th>
                            <th scope="col">Nama Peminjam</th>
                            <th scope="col">Kod</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Jumlah Mohon</th>
                            <th scope="col">Jumlah Biaya</th>
                            <th scope="col">Jumlah Untung</th>
                            <th scope="col">Tempoh (Bulan)</th>
                            <th scope="col">Baki Pembiayaan</th>
                            <th scope="col">Tarikh Mula</th>
                            <th scope="col">Tarikh Akhir</th>
                            <th scope="col">Status</th>
                        </tr>
                        @foreach ($ahli as $item)
                            <tr>
                                <th scope="row"></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
