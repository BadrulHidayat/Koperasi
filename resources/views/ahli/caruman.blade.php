@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>Koperasi - Maklumat Ahli</h2>
            </div>
                <div class="card-body">
                    <h4>Maklumat Caruman</h4>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Transaksi</th>
                            <th scope="col">Kod</th>
                            <th scope="col">Keterangan Caruman</th>
                            <th scope="col">Caruman Bulanan</th>
                            <th scope="col">Tarikh Mula</th>
                            <th scope="col">Caruman Bulanan Baru</th>
                            <th scope="col">Tarikh Berkuatkuasa</th>
                            <th scope="col">Baki Semasa</th>
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
                            </tr>
                        @endforeach
                    </table>
                </div>
        </div>
    </div>
</div>
@endsection