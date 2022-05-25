@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>Koperasi - Maklumat Ahli</h2>
            </div>
                <div class="card-body">
                    <h4>Maklumat Tanggungan Waris</h4>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th scope="col">Pilih Satu</th>
                            <th scope="col"></th>
                            <th scope="col">Padam</th>
                            <th scope="col">Hubungan</th>
                            <th scope="col">Pewaris</th>
                            <th scope="col">Penerima Wasiat</th>
                            <th scope="col">Pembahagian (%)</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No K/P Baru</th>
                            <th scope="col">No K/P Lama</th>
                            <th scope="col">Jantina</th>
                            <th scope="col">Umur</th>
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
                            </tr>
                        @endforeach
                    </table>
                </div>
        </div>
    </div>
</div>
@endsection