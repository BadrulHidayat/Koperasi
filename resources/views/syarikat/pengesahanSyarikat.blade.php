@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">KOPERASI - Daftar Syarikat</div>
            <div class="card-body">
                <p>Maklumat Jabatan/Syarikat</p>
                <form action="{{route('storeSyarikat')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                    <table>
                        <tr>
                            <th>Nama Jabatan/Syarikat</th>
                            <td><input type="text" style="color:red" name="nama_jabatan" class="form-control" value="{{$nama_jabatan}}" readonly></td>
                        </tr>
                        <tr>
                            <th width="40%">Kod Jabatan/Syarikat</th>
                            <td width="40%"><input type="text" style="color:red" name="kod_jabatan" class="form-control" value="{{$kod_jabatan}}" readonly></td>
                        </tr>
                        <tr>
                            <th>Ketua Jabatan/Syarikat</th>
                            <td><input type="text" style="color:red" name="ketua_jabatan" class="form-control" value="{{$ketua_jabatan}}" readonly></td>
                        </tr>
                        <tr>
                            <th>Maklumat Jabatan/Syarikat</th>
                            <td><input type="text" style="color: red" name="maklumat_jabatan" class="form-control" value="{{$maklumat_jabatan}}" readonly></td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td><input type="text" style="color: red" name="kategori" class="form-control" value="{{$kategori}}" readonly></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td><input type="text" style="color:red" name="alamat" class="form-control" value="{{$alamat}}" readonly></td>
                        </tr>
                        <tr>
                            <th>Poskod</th>
                            <td><input type="text" style="color:red" name="poskod" class="form-control" value="{{$poskod}}" readonly></td>
                        </tr>
                        <tr>
                            <th>Daerah</th>
                            <td><input type="text" style="color: red" name="daerah" class="form-control" value="{{$daerah}}" readonly></td>
                        </tr>
                        <tr>
                            <th>Negeri</th>
                            <td><input type="text" style="color:red" name="negeri" class="form-control" value="{{$negeri}}" readonly></td>
                        </tr>
                        <tr>
                            <th>Jenis Alamat</th>
                            <td><input type="text" style="color: red" name="jenis_alamat" class="form-control" value="{{$jenis_alamat}}" readonly></td>
                        </tr>
                        <tr>
                            <th>Tel(R)</th>
                            <td><input type="text" style="color:red" name="tel_R" class="form-control" value="{{$tel_R}}" readonly></td>
                        </tr>
                        <tr>
                            <th>Tel(P)</th>
                            <td><input type="text" style="color:red" name="tel_P" class="form-control" value="{{$tel_P}}" readonly></td>
                        </tr>
                        <tr>
                            <th>Tel(HP)</th>
                            <td><input type="text" style="color:red" name="tel_HP" class="form-control" value="{{$tel_HP}}" readonly></td>
                            <td><input type="text" style="color:red" name="tel_HP_type" class="form-control" value="{{$tel_HP_type}}" readonly></td>
                        </tr>
                        <tr>
                            <th>Faks</th>
                            <td><input type="text" style="color:red" name="faks" class="form-control" value="{{$faks}}" readonly></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><input type="email" style="color:red" name="email" class="form-control" value="{{$email}}" readonly></td>
                        </tr>
                    </table>
                    <br><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>

@endsection