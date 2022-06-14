<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inter XS</title>
</head>
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
<link href="{{ asset('public/css/bootstrap-4-navbar.css') }}" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('public/js/bootstrap-4-navbar.js') }}"></script>

<!-- Alert -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">

<style>
    #t {
        border: 1px solid black;
        border-collapse: collapse;
        background: burlywood;
    }

    #td {
        border: 1px solid black;
        border-collapse: collapse;
    }

</style>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ __('Inter XS') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ahli</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('maklumatAhli') }}">Maklumat Ahli</a></li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Pendaftaran {{--&raquo;--}}</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('daftarAhli') }}">Daftar Ahli</a></li>
                                        <li><a class="dropdown-item" href="{{ route('daftarYuran') }}">Yuran Pendaftaran</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item dropdown-toggle" href="#">Pemberhentian</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('daftarBerhenti') }}">Daftar Berhenti</a></li>
                                        <li><a class="dropdown-item" href="{{ route('maklumatBerhenti') }}">Maklumat Berhenti</a></li>
                                        <li><a class="dropdown-item" href="{{ route('kelulusanPemberhentian') }}">Kemaskini Kelulusan Pemberhentian</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="#">Pemberhentian</a></li>
                                <li><a class="dropdown-item" href="#">Laporan Keahlian</a></li>
                                <li><a class="dropdown-item" href="#">Transaksi Ahli</a></li>
                                <li><a class="dropdown-item" href="#">Penyata</a></li>
                                <li><a class="dropdown-item" href="#">Tuntutan</a></li>
                                <li><a class="dropdown-item" href="#">Tuntutan Tak Berbayar</a></li>
                                <li><a class="dropdown-item" href="#">Laporan Baki Caruman</a></li>
                                <li><a class="dropdown-item" href="#">Sticker Anggota</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Individu
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('daftarIndividu') }}">Daftar Individu</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('maklumatIndividu') }}">Maklumat
                                        Individu</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Syarikat
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('daftarSyarikat') }}">Daftar Syarikat</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('maklumatSyarikat') }}">Maklumat
                                        Syarikat</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Akaun
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Pentadbiran Akaun</a></li>
                                <li><a class="dropdown-item" href="#">Laporan Akaun Semasa</a></li>
                                <li><a class="dropdown-item" href="#">Laporan Bulanan</a></li>
                                <li><a class="dropdown-item" href="#">Pemiutang</a></li>
                                <li><a class="dropdown-item" href="#">Transaksi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Pelbagai
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Perubatan</a></li>
                                <li><a class="dropdown-item" href="#">Pembekuan Akaun</a></li>
                                <li><a class="dropdown-item" href="#">Derma</a></li>
                                <li><a class="dropdown-item" href="#">Dividen/Keuntungan</a></li>
                                <li><a class="dropdown-item" href="#">Keuntungan Pembiayaan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Kakitangan
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('daftarKakitangan') }}">Daftar Kakitangan</a></li>
                                <li><a class="dropdown-item" href="{{ route('maklumatStaff') }}">Maklumat Kakitangan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Pembiayaan
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Kira Kelayakan</a></li>
                                <li><a class="dropdown-item" href="#">Daftar Pembiayaan</a></li>
                                <li><a class="dropdown-item" href="#">Maklumat Pembiayaan</a></li>
                                <li><a class="dropdown-item" href="#">Kelulusan</a></li>
                                <li><a class="dropdown-item" href="#">Bon</a></li>
                                <li><a class="dropdown-item" href="#">Transaksi Pembiayaan</a></li>
                                <li><a class="dropdown-item" href="#">Maklumat Penjamin</a></li>
                                <li><a class="dropdown-item" href="#">Jadual Pembayaran</a></li>
                                <li><a class="dropdown-item" href="#">Kira Rebat</a></li>
                                <li><a class="dropdown-item" href="#">Kira Insuran</a></li>
                                <li><a class="dropdown-item" href="#">Laporan Pembiayaan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Pentadbiran
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Ahli</a></li>
                                <li><a class="dropdown-item" href="#">Caruman</a></li>
                                <li><a class="dropdown-item" href="#">Pembiayaan</a></li>
                                <li><a class="dropdown-item" href="#">Akaun</a></li>
                                <li><a class="dropdown-item" href="#">No Rujukan</a></li>
                                <li><a class="dropdown-item" href="#">Sekuriti</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Kaunter
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Yuran Pendaftaran</a></li>
                                <li><a class="dropdown-item" href="#">Transaksi Ahli</a></li>
                                <li><a class="dropdown-item" href="#">Transaksi Pembiayaan</a></li>
                                <li><a class="dropdown-item" href="#">Transaksi Am</a></li>
                                <li><a class="dropdown-item" href="#">Transaksi Dalaman</a></li>
                                <li><a class="dropdown-item" href="#">Laporan Penerimaan Harian</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">i-Akaun</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Laporan TTB</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Site Settings</a></li>
                                <li><a class="dropdown-item" href="#">Tabs</a></li>
                                <li><a class="dropdown-item" href="#">Security Roles</a></li>
                                <li><a class="dropdown-item" href="#">User Accounts</a></li>
                                <li><a class="dropdown-item" href="#">Vendors</a></li>
                                <li><a class="dropdown-item" href="#">Site Log</a></li>
                                <li><a class="dropdown-item" href="#">Bulk Email</a></li>
                                <li><a class="dropdown-item" href="#">File Manager</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Host
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Host Settings</a></li>
                                <li><a class="dropdown-item" href="#">Portals</a></li>
                                <li><a class="dropdown-item" href="#">Module Definitions</a></li>
                                <li><a class="dropdown-item" href="#">File Manager</a></li>
                                <li><a class="dropdown-item" href="#">Vendors</a></li>
                                <li><a class="dropdown-item" href="#">SQL</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">KOPERASI - Maklumat Syarikat</div>
                <div class="card-body" >
                    <p>Kemaskini Maklumat Syarikat</p>
                    <br>
                    <div class="col-md-8">
                        <table style="background: white" class="table table-bordered table-striped">
                            <tr>
                                <th>Nama Jabatan/Syarikat</th>
                                <th>Kod Jabatan/Syarikat</th>
                                <th>Ketua Jabatan/Syarikat</th>
                                <th>Maklumat Jabatan/Syarikat</th>
                                <th>Kategori</th>
                                <th colspan="2"></th>
                            </tr>
                            <tr>
                                <td>{{ $syarikat->nama_jabatan }}</td>
                                <td>{{ $syarikat->kod_jabatan }}</td>
                                <td>{{ $syarikat->ketua_jabatan }}</td>
                                <td>{{ $syarikat->maklumat_jabatan }}</td>
                                <td>{{ $syarikat->kategori }}</td>
                                <td><button id="updateDaftar" class="btn btn-success">Kemaskini</button></td>
                                <td><a class="btn btn-danger" id="syarikatDelete">Padam</a></td>
                            </tr>
                        </table>
                    </div>
                    <br><br>
                    <div class="col-md-8" id="kemaskiniDaftar" style="display: none">
                        <form action="{{ route('maklumatSyarikatUpdate', $syarikat->id) }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <table style="background: white" class="table table-bordered table-striped">
                                <tr>
                                    <th>Nama Jabatan/Syarikat</th>
                                    <th>Kod Jabatan/Syarikat</th>
                                    <th>Ketua Jabatan/Syarikat</th>
                                    <th>Maklumat Jabatan/Syarikat</th>
                                    <th>Kategori</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" name="nama_jabatan"
                                            value="{{ $syarikat->nama_jabatan }}"></td>
                                    <td><input type="text" class="form-control" name="kod_jabatan"
                                            value="{{ $syarikat->kod_jabatan }}"></td>
                                    <td><input type="text" class="form-control" name="ketua_jabatan"
                                            value="{{ $syarikat->ketua_jabatan }}"></td>
                                    <td><input type="text" class="form-control" name="maklumat_jabatan"
                                            value="{{ $syarikat->maklumat_jabatan }}"></td>
                                    <td><select name="kategori" id="kategori" class="form-select">
                                            <option value="{{ $syarikat->kategori }}">{{ $syarikat->kategori }}
                                            </option>
                                            <option value="Lain-lain">Lain-lain</option>
                                            <option value="Pusat Gaji">Pusat Gaji</option>
                                            <option value="Pejabat">Pejabat</option>
                                        </select></td>
                                        <td><button type="submit" class="btn btn-primary">Simpan</button></td>
                                </tr>
                            </table>
                            <br><br>
                            
                            <button class="btn btn-danger">Batal</button>
                        </form>
    
                    </div>
                    <br><br>

                    <!--Search selection -->
                    <label for="jenis_maklumat">Jenis Maklumat:</label>
                    <select name="jenis_maklumat" id="jenis_maklumat" onclick="display();">
                        <option value="">Pilihan</option>
                        <option value="semua">Semua</option>
                        <option value="alamat">Alamat</option>
                        <option value="perhubungan">Perhubungan</option>
                    </select>
                    <br>
                    <br>

                    <div class="col-md-12" id="alamatSyarikat" style="display: none">
                        <div class="card">
                            <div class="card-header">Maklumat Alamat</div>
                            <div class="card-body">
                                <br>
                                <table>
                                    <tr>
                                        <th id="t">Jenis Alamat</th>
                                        <th id="t">Alamat</th>
                                        <th id="t">Poskod</th>
                                        <th id="t">Daerah</th>
                                        <th id="t">Negeri</th>
                                        <th id="t">Kemaskini</th>
                                        <th id="t">Padam</th>
                                    </tr>
                                    @if ($syarikatAlamat == true)
                                        <tr>
                                            <td id="td">{{ $syarikatAlamat->jenis_alamat }}</td>
                                            <td id="td">{{ $syarikatAlamat->alamat }}</td>
                                            <td id="td">{{ $syarikatAlamat->poskod }}</td>
                                            <td id="td">{{ $syarikatAlamat->daerah }}</td>
                                            <td id="td">{{ $syarikatAlamat->negeri }}</td>
                                            <td id="td"><button id="updateAlamat"
                                                    class="btn btn-success">Kemaskini</button></td>
                                            <td id="td"><a id="alamatSyarikatDelete" class="btn btn-danger">Padam</a>
                                            </td>
                                        </tr>
                                    @endif
                                </table>
                                <br>
                                <br>

                                @if ($syarikatAlamat == true)
                                    <div class="col-md-10" id="kemaskiniAlamat" style="display: none">
                                        <form action="{{ route('alamatSyarikatUpdate', $syarikatAlamat->id) }}"
                                            method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <table>
                                                <tr>
                                                    <th id="t">Jenis Alamat</th>
                                                    <th id="t">Alamat</th>
                                                    <th id="t">Poskod</th>
                                                    <th id="t">Daerah</th>
                                                    <th id="t">Negeri</th>
                                                    <th id="t">Kemaskini</th>
                                                </tr>
                                                <tr>
                                                    <td id="td"><select name="jenis_alamat" id="jenis_alamat"
                                                            class="form-select">
                                                            <option value="{{ $syarikatAlamat->jenis_alamat }}">
                                                                {{ $syarikatAlamat->jenis_alamat }}</option>
                                                            <option value="KEDIAMAN">Kediaman</option>
                                                            <option value="PEJABAT">Pejabat</option>
                                                        </select></td>
                                                    <td id="td"><input type="text" name="alamat" class="form-control"
                                                            value="{{ $syarikatAlamat->alamat }}"></td>
                                                    <td id="td"><input type="text" name="poskod" class="form-control"
                                                            value="{{ $syarikatAlamat->poskod }}"></td>
                                                    <td id="td"><input type="text" name="daerah" class="form-control"
                                                            value="{{ $syarikatAlamat->daerah }}"></td>
                                                    <td id="td"><input type="text" name="negeri" class="form-control"
                                                            value="{{ $syarikatAlamat->negeri }}"></td>
                                                    <td id="td"><button type="submit"
                                                            class="btn btn-primary">Simpan</button></td>

                                                </tr>
                                            </table>
                                        </form>
                                        <br>

                                    </div>
                                @endif

                                @if ($syarikatAlamat == false)
                                    <button id="btnAlamat" class="btn btn-secondary">Daftar alamat</button>
                                    <br><br>
                                @endif


                                <div class="col-md-10" id="daftarAlamat" style="display: none">
                                    <br>
                                    <p>Daftar alamat</p>
                                    <form action="{{ route('daftarAlamatSyarikat', $syarikat->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <table>
                                            <tr>
                                                <th>Alamat</th>
                                                <td>
                                                    <textarea name="alamat" cols="50" rows="3" class="form-control"></textarea>
                                                </td>
                                                <input type="hidden" name="id" value="{{ $syarikat->id }}">
                                            </tr>
                                            <tr>
                                                <th style="width: 100px;">Poskod</th>
                                                <td style="width: 150px;"><input type="text" name="poskod"
                                                        class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th>Daerah</th>
                                                <td><input type="text" name="daerah" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th>Negeri</th>
                                                <td><select name="negeri" id="negeri" class="form-select">
                                                        <option value="">Pilih Satu</option>
                                                        <option value="PERAK DARUL RIDZUAN">PERAK DARUL RIDZUAN</option>
                                                        <option value="SELANGOR DARUL EHSAN">SELANGOR DARUL EHSAN
                                                        </option>
                                                        <option value="PAHANG DARUL MAKMUR">PAHANG DARUL MAKMUR</option>
                                                        <option value="KELANTAN DARUL NAIM">KELANTAN DARUL NAIM</option>
                                                        <option value="JOHOR DARUL TAKZIM">JOHOR DARUL TAKZIM</option>
                                                        <option value="KEDAH DARUL AMAN">KEDAH DARUL AMAN</option>
                                                        <option value="W.P. LABUAN">W.P. LABUAN</option>
                                                        <option value="MELAKA">MELAKA</option>
                                                        <option value="NEGERI SEMBILAN DARUL KHUSUS">NEGERI SEMBILAN
                                                            DARUL KHUSUS</option>
                                                        <option value="PULAU PINANG">PULAU PINANG</option>
                                                        <option value="PERLIS INDRA KAYANGAN">PERLIS INDRA KAYANGAN
                                                        </option>
                                                        <option value="SARAWAK">SARAWAK</option>
                                                        <option value="TERENGGANU DARUL IMAN">TERENGGANU DARUL IMAN
                                                        </option>
                                                        <option value="SABAH">SABAH</option>
                                                        <option value="W.P. KUALA LUMPUR">W.P. KUALA LUMPUR</option>
                                                        <option value="W.P PUTRAJAYA">W.P. PUTRAJAYA</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <th>Jenis Alamat</th>
                                                <td><select name="jenis_alamat" id="jenis_alamat"
                                                        class="form-select">
                                                        <option value="">Pilih satu</option>
                                                        <option value="KEDIAMAN">Kediaman</option>
                                                        <option value="PEJABAT">Pejabat</option>
                                                    </select></td>
                                            </tr>

                                        </table>
                                        <br>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                    <br><br>
                                </div>

                                <button id="closeAlamat" class="btn btn-danger">Close</button>
                            </div>
                        </div>
                    </div>
                    <!-- End of alamat syarikat -->
                    <br><br>
                    <!--Start of perhubungan syarikat-->
                    <div class="col-md-12" id="perhubunganSyarikat" style="display: none">
                        <div class="card">
                            <div class="card-header">Maklumat Perhubungan</div>
                            <div class="card-body">

                                <table style="background: white" id="td">
                                    <tr>

                                        <th id="t">Jenis maklumat perhubungan</th>
                                        <th id="t">Maklumat perhubungan</th>
                                        <th id="t">Telco</th>
                                        <th style="width: 10%" id="t">Kemaskini</th>
                                        <th style="width: 8%" id="t">Padam</th>
                                    </tr>
                                    <tr>

                                        <td id="td">Tel(HP)</td>
                                        <td id="td">{{ $syarikatPerhubungan->tel_HP }}</td>
                                        <td id="td">{{ $syarikatPerhubungan->tel_HP_type }}</td>
                                        <td id="td"><button class="btn btn-success" id="update1">Kemaskini</button>
                                        </td>
                                        <td id="td"><a id="padamTelHP" class="btn btn-danger">Padam</a></td>
                                    </tr>
                                    <tr>

                                        <td id="td">Tel(P)</td>
                                        <td id="td">{{ $syarikatPerhubungan->tel_P }}</td>
                                        <td id="td"></td>
                                        <td id="td"><button class="btn btn-success" id="update2">Kemaskini</button>
                                        </td>
                                        <td id="td"><a id="padamTelP" class="btn btn-danger">Padam</a></td>
                                    </tr>
                                    <tr>

                                        <td id="td">Tel(R)</td>
                                        <td id="td">{{ $syarikatPerhubungan->tel_R }}</td>
                                        <td id="td"></td>
                                        <td id="td"><button class="btn btn-success" id="update3">Kemaskini</button>
                                        </td>
                                        <td id="td"><a id="padamTelR" class="btn btn-danger">Padam</a></td>
                                    </tr>
                                    <tr>

                                        <td id="td">Faks</td>
                                        <td id="td">{{ $syarikatPerhubungan->faks }}</td>
                                        <td id="td"></td>
                                        <td id="td"><button class="btn btn-success" id="update4">Kemaskini</button>
                                        </td>
                                        <td id="td"><a id="padamFaks" class="btn btn-danger">Padam</a></td>
                                    </tr>
                                    <tr>

                                        <td id="td">E-mail</td>
                                        <td id="td">{{ $syarikatPerhubungan->email }}</td>
                                        <td id="td"></td>
                                        <td id="td"><button class="btn btn-success" id="update5">Kemaskini</button>
                                        </td>
                                        <td id="td"><a id="padamEmail" class="btn btn-danger">Padam</a></td>
                                    </tr>
                                </table>



                                <div class="col-md-12" id="kemaskini1" style="display: none">
                                    <br><br>
                                    <p>Kemaskini Tel(HP)</p>
                                    <form action="{{ route('tel_HP_update', $syarikatPerhubungan->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <table>
                                            <tr>
                                                <th id="t">Jenis maklumat</th>
                                                <th id="t">Maklumat perhubungan</th>
                                                <th id="t">Telco</th>
                                                <th id="t">Simpan</th>
                                            </tr>
                                            <tr>
                                                <td id="td">Tel(HP)</td>
                                                <td id="td"><input type="text" name="tel_HP"
                                                        value="{{ $syarikatPerhubungan->tel_HP }}"
                                                        class="form-control"></td>
                                                <td id="td"><select name="tel_HP_type" id="tel_HP_type"
                                                        class="form-select">
                                                        <option value="{{ $syarikatPerhubungan->tel_HP_type }}">
                                                            {{ $syarikatPerhubungan->tel_HP_type }}</option>
                                                        <option value="Celcom">Celcom</option>
                                                        <option value="DiGi">DiGi</option>
                                                        <option value="Maxis">Maxis</option>
                                                        <option value="U Mobile">U Mobile</option>
                                                        <option value=""></option>
                                                    </select></td>
                                                <td id="td"><button type="submit"
                                                        class="btn btn-primary">Simpan</button></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>

                                <div class="col-md-12" id="kemaskini2" style="display: none">
                                    <br><br>
                                    <p>Kemaskini Tel(P)</p>
                                    <form action="{{ route('tel_P_update', $syarikatPerhubungan->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <table>
                                            <tr>
                                                <th id="t">Jenis maklumat</th>
                                                <th id="t">Maklumat perhubungan</th>
                                                <th id="t">Simpan</th>
                                            </tr>
                                            <tr>
                                                <td id="td">Tel(P)</td>
                                                <td id="td"><input type="text" name="tel_P"
                                                        value="{{ $syarikatPerhubungan->tel_P }}"
                                                        class="form-control"></td>
                                                <td id="td"><button type="submit"
                                                        class="btn btn-primary">Simpan</button></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>

                                <div class="col-md-12" id="kemaskini3" style="display: none">
                                    <br><br>
                                    <p>Kemaskini Tel(R)</p>
                                    <form action="{{ route('tel_R_update', $syarikatPerhubungan->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <table>
                                            <tr>
                                                <th id="t">Jenis maklumat</th>
                                                <th id="t">Maklumat perhubungan</th>
                                                <th id="t">Simpan</th>
                                            </tr>
                                            <tr>
                                                <td id="td">Tel(R)</td>
                                                <td id="td"><input type="text" name="tel_R"
                                                        value="{{ $syarikatPerhubungan->tel_R }}"
                                                        class="form-control"></td>
                                                <td id="td"><button type="submit"
                                                        class="btn btn-primary">Simpan</button></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>

                                <div class="col-md-12" id="kemaskini4" style="display: none">
                                    <br><br>
                                    <p>Kemaskini Faks</p>
                                    <form action="{{ route('faks_update', $syarikatPerhubungan->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <table>
                                            <tr>
                                                <th id="t">Jenis maklumat</th>
                                                <th id="t">Maklumat perhubungan</th>
                                                <th id="t">Simpan</th>
                                            </tr>
                                            <tr>
                                                <td id="td">Faks</td>
                                                <td id="td"><input type="text" name="faks"
                                                        value="{{ $syarikatPerhubungan->faks }}"
                                                        class="form-control"></td>
                                                <td id="td"><button type="submit"
                                                        class="btn btn-primary">Simpan</button></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>

                                <div class="col-md-12" id="kemaskini5" style="display: none">
                                    <br><br>
                                    <p>Kemaskini Email</p>
                                    <form action="{{ route('email_update', $syarikatPerhubungan->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <table>
                                            <tr>
                                                <th id="t">Jenis maklumat</th>
                                                <th id="t">Maklumat perhubungan</th>
                                                <th id="t">Simpan</th>
                                            </tr>
                                            <tr>
                                                <td id="td">Email</td>
                                                <td id="td"><input type="text" name="email"
                                                        value="{{ $syarikatPerhubungan->email }}"
                                                        class="form-control"></td>
                                                <td id="td"><button type="submit"
                                                        class="btn btn-primary">Simpan</button></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>

                                <br><br>
                                <button id="closePerhubungan" class="btn btn-danger">Close</button>

                            </div>
                        </div>
                    </div>
                    <!-- End of maklumat perhubungan-->

                </div>
                <!--End of card body -->
            </div>
        </div>
    </div>

    <!--New Script 11/5/2022 -->
    <script type="text/javascript">
        $('#syarikatDelete').on('click', function() {
            console.log("btn click");
            Swal.fire({
                title: 'Anda ingin memadam data ini ?',
                text: "Data tidak akan dapat dikembalikan!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Padam'
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.cancel) {

                } else {
                    Swal.fire(
                        'Telah dipadam!',
                        'Maklumat syarikat anda telah dipadam.',
                        'success'
                    )
                    @if ($syarikat == true)
                        window.location = '{{ route('maklumatSyarikatDelete', $syarikat->id) }}';
                    @endif
                }

            })

        })


        $('#alamatSyarikatDelete').on('click', function() {
            console.log("btn click");
            Swal.fire({
                title: 'Anda ingin memadam data ini ?',
                text: "Data tidak akan dapat dikembalikan!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Padam'
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.cancel) {

                } else {
                    Swal.fire(
                        'Telah dipadam!',
                        'Alamat anda telah dipadam.',
                        'success'
                    )
                    @if ($syarikatAlamat == true)
                        window.location = '{{ route('alamatSyarikatDelete', $syarikatAlamat->id) }}';
                    @endif
                }

            })

        })


        $('#padamTelHP').on('click', function() {
            console.log("btn click");
            Swal.fire({
                title: 'Anda ingin memadam data ini ?',
                text: "Data tidak akan dapat dikembalikan!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Padam'
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.cancel) {

                } else {
                    Swal.fire(
                        'Telah dipadam!',
                        'Alamat anda telah dipadam.',
                        'success'
                    )
                    @if ($syarikatPerhubungan == true)
                        window.location = '{{ route('tel_HP_delete', $syarikatPerhubungan->id) }}';
                    @endif
                }

            })

        })


        $('#padamTelP').on('click', function() {
            console.log("btn click");
            Swal.fire({
                title: 'Anda ingin memadam data ini ?',
                text: "Data tidak akan dapat dikembalikan!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Padam'
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.cancel) {

                } else {
                    Swal.fire(
                        'Telah dipadam!',
                        'Alamat anda telah dipadam.',
                        'success'
                    )
                    @if ($syarikatPerhubungan == true)
                        window.location = '{{ route('tel_P_delete', $syarikatPerhubungan->id) }}';
                    @endif
                }

            })

        })


        $('#padamTelR').on('click', function() {
            console.log("btn click");
            Swal.fire({
                title: 'Anda ingin memadam data ini ?',
                text: "Data tidak akan dapat dikembalikan!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Padam'
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.cancel) {

                } else {
                    Swal.fire(
                        'Telah dipadam!',
                        'Alamat anda telah dipadam.',
                        'success'
                    )
                    @if ($syarikatPerhubungan == true)
                        window.location = '{{ route('tel_R_delete', $syarikatPerhubungan->id) }}';
                    @endif
                }

            })

        })


        $('#padamFaks').on('click', function() {
            console.log("btn click");
            Swal.fire({
                title: 'Anda ingin memadam data ini ?',
                text: "Data tidak akan dapat dikembalikan!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Padam'
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.cancel) {

                } else {
                    Swal.fire(
                        'Telah dipadam!',
                        'Alamat anda telah dipadam.',
                        'success'
                    )
                    @if ($syarikatPerhubungan == true)
                        window.location = '{{ route('faks_delete', $syarikatPerhubungan->id) }}';
                    @endif
                }

            })

        })


        $('#padamEmail').on('click', function() {
            console.log("btn click");
            Swal.fire({
                title: 'Anda ingin memadam data ini ?',
                text: "Data tidak akan dapat dikembalikan!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Padam'
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.cancel) {

                } else {
                    Swal.fire(
                        'Telah dipadam!',
                        'Alamat anda telah dipadam.',
                        'success'
                    )
                    @if ($syarikatPerhubungan == true)
                        window.location = '{{ route('email_delete', $syarikatPerhubungan->id) }}';
                    @endif
                }

            })

        })


    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>

    <!--New Script 23/4/2022 -->
    <script type="text/javascript">
        function display() {
            var x = document.getElementById('jenis_maklumat').value;

            var alamat = document.getElementById('alamatSyarikat');
            var perhubungan = document.getElementById('perhubunganSyarikat');

            if (x == "semua") {
                alamat.style.display = "block";
                perhubungan.style.display = "block";

            } else if (x == "alamat") {
                alamat.style.display = "block";
                perhubungan.style.display = "none";

            } else if (x == "perhubungan") {
                alamat.style.display = "none";
                perhubungan.style.display = "block";

            }
        }
    </script>

    <script type="text/javascript">
        //function button
        $('#btnAlamat').click(
            function() {
                $("#daftarAlamat").show();
            }
        );

        $('#updateDaftar').click(
            function(){
                $('#kemaskiniDaftar').show();
            }
        );

        $("#updateAlamat").click(
            function() {
                $("#kemaskiniAlamat").show();
            }
        );

        $("#closeAlamat").click(
            function() {
                $("#alamatSyarikat").hide();
                $("#kemaskiniAlamat").hide();
            }
        );

        $("#closePerhubungan").click(
            function() {
                $("#perhubunganSyarikat").hide();
            }
        );

        $("#update1").click(
            function() {
                $("#kemaskini1").show();
            }
        );

        $("#update2").click(
            function() {
                $("#kemaskini2").show();
            }
        );

        $("#update3").click(
            function() {
                $("#kemaskini3").show();
            }
        );

        $("#update4").click(
            function() {
                $("#kemaskini4").show();
            }
        );

        $("#update5").click(
            function() {
                $("#kemaskini5").show();
            }
        );
    </script>

    <script src="{{ asset('public/js/app.js') }}" defer></script>

</body>

</html>
