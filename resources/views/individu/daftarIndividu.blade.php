@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">KOPERASI - Daftar Individu</div>
            <div class="card-body" style="background-color:orange">
                <form action="{{route('pengesahanIndividu')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                    <p>Maklumat Individu</p>
                    <table >
                        <tr>
                            <th>Nama</th>
                            <td><input type="text" class="form-control" name="nama"></td>
                        </tr>
                        <tr>
                            <th>No KP Baru</th>
                            <td><input type="text" name="noKP" class="form-control" minlength="12" maxlength="12"></td>
                        </tr>
                        <tr>
                            <th>No KP Lama/Tentera/Polis&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            <td><input type="text" name="noKPlama" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Jantina</th>
                            <td>
                                <input type="radio" id="Lelaki" name="jantina" value="Lelaki">
                                <label for="Lelaki">Lelaki</label>&nbsp;&nbsp;&nbsp;
                                <input type="radio" id="Perempuan" name="jantina" value="Perempuan">
                                <label for="Perempuan">Perempuan</label>
                            </td>
                        </tr>
                        <tr>
                            <th>Tarikh Lahir</th>
                            <td><input type="date" name="tarikh_lahir" id="" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Tempat Lahir</th>
                            <td><input type="text" name="tempat_lahir" class="form-control"></td>
                        </tr>
                    </table>
                    <br><br>
                    <button class="btn btn-primary" type="submit">Submit</button>&nbsp;&nbsp;
                    <button class="btn btn-secondary" type="reset">Reset</button>&nbsp;&nbsp;
                    <a href="{{route('home')}}" class="btn btn-danger">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection