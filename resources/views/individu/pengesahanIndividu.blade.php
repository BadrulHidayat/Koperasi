@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="card">
        <div class="card-header">KOPERASI - Daftar Individu</div>
        <div class="card-body">
            <p>Maklumat Individu</p>
            <form action="{{route('storeIndividu')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <table>
                    <tr>
                        <th style="width: 50%;">Nama :</th>
                        <td ><input type="text" style="color:red" class="form-control" name="nama" value="{{$nama}}" readonly></td>
                    </tr>
                    <tr>
                        <th>No KP Baru :</th>
                        <td ><input type="text" style="color:red" name="noKP" class="form-control" value="{{$noKP}}" readonly></td>
                    </tr>
                    <tr>
                        <th>No KP Lama/Tentera/Polis :</th>
                        <td ><input type="text" style="color:red" name="noKPlama" class="form-control" value="{{$noKPlama}}" readonly></td>
                    </tr>
                    <tr>
                        <th>Jantina</th>
                        <td><input type="text" style="color:red" name="jantina" class="form-control" value="{{$jantina}}" readonly></td>
                    </tr>
                    <tr>
                        <th>Tarikh Lahir :</th>
                        <td><input type="date" style="color:red" name="tarikh_lahir" class="form-control" value="{{$tarikh_lahir}}" readonly></td>
                    </tr>
                    <tr>
                        <th>Tempat Lahir :</th>
                        <td><input type="text" style="color:red" name="tempat_lahir" class="form-control" value="{{$tempat_lahir}}" readonly></td>
                    </tr>
                </table>
                <br>
                <button class="btn btn-primary" type="submit">Submit</button>&nbsp;&nbsp;

                <button class="btn btn-danger">Batal</button>
            </form>
        </div>
    </div>
</div>

@endsection