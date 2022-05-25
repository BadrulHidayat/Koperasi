@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>Koperasi - Maklumat Ahli</h2>
            </div>
                <div class="card-body">
                    <h4>Maklumat Akaun No Bank</h4>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th scope="col">Kemaskini</th>
                            <th scope="col">Padam</th>
                            <th scope="col">Jenis Bank</th>
                            <th scope="col">No Akaun</th>
                            <th scope="col">Dicipta Oleh</th>
                            <th scope="col">Dicipta pada</th>
                            <th scope="col">Dikemaskini oleh</th>
                            <th scope="col">Dikemaskini pada</th>
                            <th scope="col">Akaun Bank Utama</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        @foreach ($ahli as $item)
                            <tr>
                                <th scope="row"><a href="" class="btn btn-success btn-block">Kemaskini</a></th>
                                <th><a href="" class="btn btn-danger btn-block">Padam</a></th>
                                <th>{{ $item->jenisBank }}</th>
                                <th>{{ $item->noAkaunBank }}</th>
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