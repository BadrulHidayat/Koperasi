@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">KOPERASI - Maklumat Individu</div>
            <div class="card-body" style="background-color: orange;">
                <p>Carian Individu</p>
                <form action="{{route('carianIndividu')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <table>
                        <tr>
                            <td>Masukkan Carian Anda:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" name="search" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Jenis Carian:</td>
                            <td>
                                <select name="query" id="query" class="form-select">
                                    <option value="nama">Nama</option>
                                    <option value="noKP">No Kp Baru</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="35%"></td>
                            <td><button class="btn btn-secondary" type="submit">Cari</button></td>
                        </tr>
                    </table>
                </form>
                <br>
                <a class="btn btn-primary" href="{{route('displayIndividu')}}">Display All</a>
                <br>

                
                <br>
                
            </div>
        </div>
    </div>

    
</div>




@endsection