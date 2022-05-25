@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Koperasi - Maklumat Ahli</h2>
                </div>
                    <div class="card-body">
                        <h4>Maklumat Alamat</h4>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th scope="col">Kemaskini</th>
                                <th scope="col">Padam</th>
                                <th scope="col">Jenis Alamat</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Poskod</th>
                                <th scope="col">Bandar</th>
                                <th scope="col">Negeri</th>
                                <th scope="col">Dicipta Oleh</th>
                                <th scope="col">Dicipta pada</th>
                                <th scope="col">Dikemaskini oleh</th>
                                <th scope="col">Dikemaskini pada</th>
                                <th scope="col">Alamat Surat Menyurat</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                            @foreach ($ahli as $item)
                                <tr>
                                    <th scope="row"><a href="" class="btn btn-success btn-block">Kemaskini</a></th>
                                    <th>
                                        <a href="" class="btn btn-danger btn-block">Padam</a>
                                    </th>
                                    <th>{{ $item->jenisAlamat}}</th>
                                    <th>{{ $item->alamat }}</th>
                                    <th>{{ $item->poskod }}</th>
                                    <th>{{ $item->bandar }}</th>
                                    <th>{{ $item->negeri }}</th>
                                    <th></th>
                                    <th>{{ $item->created_at }}</th>
                                    <th></th>
                                    <th>{{ $item->updated_at }}</th>
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
