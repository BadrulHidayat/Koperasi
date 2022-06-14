@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="card">
        <div class="card-header">Maklumat Individu</div>
        <div class="card-body" style="background-color: orange;">
            <div class="col-md-8">
                <table style="background: white" class="table table-bordered table-striped">
                    <tr>
                        <th>Nama</th>
                        <th>No KP</th>
                        <th>Jantina</th>
                        <th>Tarikh lahir</th>
                        <th>Tempat lahir</th>
                    </tr>
                    @foreach($individu as $info)
                    <tr>
                        <td width="20%" >{{$info->nama}}</td>
                        <td width="20%" >{{$info->noKP}}</td>
                        <td width="20%" >{{$info->jantina}}</td>
                        <td width="20%" >{{$info->tarikh_lahir}}</td>
                        <td width="20%" >{{$info->tempat_lahir}}</td>
                    </tr>
                    @endforeach
                    <br>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection