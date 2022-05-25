@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>Koperasi - Maklumat Ahli</h2>
            </div>
                <div class="card-body">
                    <h4>Maklumat Pejabat</h4>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th scope="col">Pilih</th>
                            <th scope="col">Kod</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>

                        </tr>
                        @foreach ($ahli as $item)
                            <tr>
                                <th scope="row">
                                    <a href="" class="btn btn-primary btn-block">Pilih</a>
                                </th>
                                <th>{{$item->jenisCarian}}</th>
                                <th>{{ $item->jenisAlamat }}</th>
                                <th>{{ $item->alamat }}</th>
                        @endforeach
                    </table>
                    <br>
                    <h4>Maklumat Pembayar Gaji</h4>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th scope="col">Pilih</th>
                            <th scope="col">Kod</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>

                        </tr>
                        @foreach ($ahli as $item)
                            <tr>
                                <th scope="row"><a href="" class="btn btn-primary btn-block">Pilih</a></th>
                                <th>{{$item->jenisCarian}}</th>
                                <th>{{ $item->jenisAlamat }}</th>
                                <th>{{ $item->alamat }}</th>
                        @endforeach
                    </table>
                </div>
        </div>
    </div>
</div>
@endsection