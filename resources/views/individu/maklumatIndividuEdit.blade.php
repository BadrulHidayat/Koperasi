<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inter XS</title>

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

</head>

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


    <!--Start content -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Maklumat Individu</div>
                <div class="card-body">

                    <div class="col-md-10">
                        <table style="background: white" class="table table-bordered table-striped">
                            <tr>
                                <th>Nama</th>
                                <th>No KP Baru</th>
                                <th>No KP Lama/Tentera/Polis</th>
                                <th>Jantina</th>
                                <th>Tarikh lahir</th>
                                <th>Tempat lahir</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>{{ $individu->nama }}</td>
                                <td>{{ $individu->noKP }}</td>
                                <td>{{ $individu->noKPlama }}</td>
                                <td>{{ $individu->jantina }}</td>
                                <td>{{ $individu->tarikh_lahir }}</td>
                                <td>{{ $individu->tempat_lahir }}</td>
                                <td><button id="kemaskiniMaklumat" class="btn btn-success">Kemaskini</button></td>
                            </tr>
                        </table>
                    </div>


                    <div class="col-md-10" id="maklumatUpdate" style="display: none">

                        <br><br>
                        <p>Kemaskini maklumat individu</p>
                        <form action="{{ route('maklumatIndividuUpdate', $individu->id) }}" method="POST"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <table style="background: white" class="table table-bordered table-striped">
                                <tr>
                                    <th>Nama</th>
                                    <th>No KP Baru</th>
                                    <th>No KP Lama/Tentera/Polis</th>
                                    <th>Jantina</th>
                                    <th>Tarikh Lahir</th>
                                    <th>Tempat Lahir</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" name="nama"
                                            value="{{ $individu->nama }}"></td>
                                    <td><input type="text" name="noKP" class="form-control" minlength="12"
                                            maxlength="12" value="{{ $individu->noKP }}"></td>
                                    <td><input type="text" name="noKPlama" class="form-control"
                                            value="{{ $individu->noKPlama }}"></td>
                                    <td>
                                        <select name="jantina" id="jantina" class="form-select">
                                            <option value="{{ $individu->jantina }}">{{ $individu->jantina }}
                                            </option>
                                            <option value="Lelaki">Lelaki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </td>
                                    <td><input type="date" name="tarikh_lahir" id="" class="form-control"
                                            value="{{ $individu->tarikh_lahir }}"></td>
                                    <td><input type="text" name="tempat_lahir" class="form-control"
                                            value="{{ $individu->tempat_lahir }}"></td>
                                    <td><button class="btn btn-primary" type="submit">Submit</button></td>
                                    <td><button class="btn btn-danger">Batal</button></td>
                                </tr>
                            </table>
                    </div>

                    </form>


                    <br><br>


                    <!--Search selection -->
                    <label for="jenis_maklumat">Jenis Maklumat:</label>
                    <select name="jenis_maklumat" id="jenis_maklumat" onclick="display();">
                        <option value="">Pilihan</option>
                        <option value="semua">Semua</option>
                        <option value="alamat">Alamat</option>
                        <option value="perhubungan">Perhubungan</option>
                        <option value="akaun">Akaun Bank</option>
                    </select>

                    <br><br><br>
                    <!--Form  -->

                    <!--Daftar Alamat  -->
                    <div class="col-md-10" style="display: none;" id="alamatIndividu">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-header">Maklumat Alamat</div>
                                    <div class="card-body">

                                        <table>
                                            <tr>

                                                <th id="t">Jenis Alamat</th>
                                                <th id="t">Alamat</th>
                                                <th id="t">Poskod</th>
                                                <th id="t">Daerah</th>
                                                <th id="t">Negeri</th>
                                                <th id="t">Dicipta pada</th>
                                                <th id="t">Kemaskini</th>
                                                <th id="t">Padam</th>
                                            </tr>
                                            @if ($individuAlamat == true)
                                                <tr>

                                                    <td id="td">{{ $individuAlamat->jenis_alamat }}</td>
                                                    <td id="td">{{ $individuAlamat->alamat }}</td>
                                                    <td id="td">{{ $individuAlamat->poskod }}</td>
                                                    <td id="td">{{ $individuAlamat->daerah }}</td>
                                                    <td id="td">{{ $individuAlamat->negeri }}</td>
                                                    <td id="td">{{ $individuAlamat->created_at }}</td>
                                                    <td id="td"><button class="btn btn-success"
                                                            id="edit1">Kemaskini</button></td>
                                                    <td id="td"><a class="btn btn-danger"
                                                            id="alamatIndividuDelete">Padam</a>
                                                    </td>
                                                </tr>
                                            @endif
                                        </table>

                                        @if ($individuAlamat == false)
                                            <br><br>
                                            <button id="daftar1" class="btn btn-secondary">Daftar alamat</button>
                                            <br><br>
                                        @endif


                                        <!--Edit maklumat alamat -->
                                        <div class="col-md-12">
                                            @if ($individuAlamat == true)
                                                <br><br>


                                                <div class="col-md-12" id="editAlamat" style="display: none;">
                                                    <p>Kemaskini maklumat alamat</p>
                                                    <form
                                                        action="{{ route('alamatIndividuUpdate', $individuAlamat->id) }}"
                                                        method="post">
                                                        {{ csrf_field() }}
                                                        <table>
                                                            <tr>
                                                                <th id="t">Jenis Alamat</th>
                                                                <th id="t">Alamat</th>
                                                                <th id="t">Poskod</th>
                                                                <th id="t">Daerah</th>
                                                                <th id="t">Negeri</th>
                                                            </tr>

                                                            <tr>
                                                                <td id="td">
                                                                    <select name="jenis_alamat" id="jenis_alamat"
                                                                        class="form-select">
                                                                        <option
                                                                            value="{{ $individuAlamat->jenis_alamat }}">
                                                                            {{ $individuAlamat->jenis_alamat }}
                                                                        </option>
                                                                        <option value="KEDIAMAN">Kediaman</option>
                                                                        <option value="PEJABAT">Pejabat</option>
                                                                    </select>
                                                                </td>
                                                                <td id="td">
                                                                    <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control">{{ $individuAlamat->alamat }}</textarea>
                                                                </td>
                                                                <td id="td"><input type="text" name="poskod"
                                                                        class="form-control"
                                                                        value="{{ $individuAlamat->poskod }}"></td>
                                                                <td id="td"><input type="text" name="daerah"
                                                                        class="form-control"
                                                                        value="{{ $individuAlamat->daerah }}"></td>
                                                                <td id="td">
                                                                    <select name="negeri" id="negeri"
                                                                        class="form-select">
                                                                        <option
                                                                            value="{{ $individuAlamat->negeri }}">
                                                                            {{ $individuAlamat->negeri }}</option>
                                                                        <option value="PERAK DARUL RIDZUAN">PERAK DARUL
                                                                            RIDZUAN
                                                                        </option>
                                                                        <option value="SELANGOR DARUL EHSAN">SELANGOR
                                                                            DARUL EHSAN
                                                                        </option>
                                                                        <option value="PAHANG DARUL MAKMUR">PAHANG DARUL
                                                                            MAKMUR
                                                                        </option>
                                                                        <option value="KELANTAN DARUL NAIM">KELANTAN
                                                                            DARUL NAIM
                                                                        </option>
                                                                        <option value="JOHOR DARUL TAKZIM">JOHOR DARUL
                                                                            TAKZIM
                                                                        </option>
                                                                        <option value="KEDAH DARUL AMAN">KEDAH DARUL
                                                                            AMAN</option>
                                                                        <option value="W.P. LABUAN">W.P. LABUAN</option>
                                                                        <option value="MELAKA">MELAKA</option>
                                                                        <option value="NEGERI SEMBILAN DARUL KHUSUS">
                                                                            NEGERI SEMBILAN
                                                                            DARUL KHUSUS</option>
                                                                        <option value="PULAU PINANG">PULAU PINANG
                                                                        </option>
                                                                        <option value="PERLIS INDRA KAYANGAN">PERLIS
                                                                            INDRA KAYANGAN
                                                                        </option>
                                                                        <option value="SARAWAK">SARAWAK</option>
                                                                        <option value="TERENGGANU DARUL IMAN">TERENGGANU
                                                                            DARUL IMAN
                                                                        </option>
                                                                        <option value="SABAH">SABAH</option>
                                                                        <option value="W.P. KUALA LUMPUR">W.P. KUALA
                                                                            LUMPUR</option>
                                                                        <option value="W.P PUTRAJAYA">W.P. PUTRAJAYA
                                                                        </option>
                                                                    </select>
                                                                </td>
                                                            </tr>

                                                        </table>

                                                        <br><br>
                                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                                    </form>

                                                </div>
                                            @endif
                                        </div>


                                        <!--FORM -->
                                        <div class="col-md-12" id="daftarAlamat" style="display: none;">

                                            <p>Daftar Alamat</p>

                                            <form action="{{ route('maklumatIndividuAlamat', $individu->id) }}"
                                                method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <table>
                                                    <tr>
                                                        <th>Alamat</th>
                                                        <td>
                                                            <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control"></textarea>
                                                            <input type="hidden" id="id" name="id"
                                                                value="{{ $individu->id }}">
                                                            <input type="hidden" id="noKP" name="noKP"
                                                                value="{{ $individu->noKP }}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Poskod</th>
                                                        <td><input type="text" name="poskod" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Daerah</th>
                                                        <td><input type="text" name="daerah" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Negeri</th>
                                                        <td><select name="negeri" id="negeri" class="form-select">
                                                                <option value="">Pilih Satu</option>
                                                                <option value="PERAK DARUL RIDZUAN">PERAK DARUL RIDZUAN
                                                                </option>
                                                                <option value="SELANGOR DARUL EHSAN">SELANGOR DARUL
                                                                    EHSAN
                                                                </option>
                                                                <option value="PAHANG DARUL MAKMUR">PAHANG DARUL MAKMUR
                                                                </option>
                                                                <option value="KELANTAN DARUL NAIM">KELANTAN DARUL NAIM
                                                                </option>
                                                                <option value="JOHOR DARUL TAKZIM">JOHOR DARUL TAKZIM
                                                                </option>
                                                                <option value="KEDAH DARUL AMAN">KEDAH DARUL AMAN
                                                                </option>
                                                                <option value="W.P. LABUAN">W.P. LABUAN</option>
                                                                <option value="MELAKA">MELAKA</option>
                                                                <option value="NEGERI SEMBILAN DARUL KHUSUS">NEGERI
                                                                    SEMBILAN
                                                                    DARUL KHUSUS</option>
                                                                <option value="PULAU PINANG">PULAU PINANG</option>
                                                                <option value="PERLIS INDRA KAYANGAN">PERLIS INDRA
                                                                    KAYANGAN
                                                                </option>
                                                                <option value="SARAWAK">SARAWAK</option>
                                                                <option value="TERENGGANU DARUL IMAN">TERENGGANU DARUL
                                                                    IMAN
                                                                </option>
                                                                <option value="SABAH">SABAH</option>
                                                                <option value="W.P. KUALA LUMPUR">W.P. KUALA LUMPUR
                                                                </option>
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
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <br>
                                            </form>
                                        </div>
                                        <br>
                                        <button id="close" class="btn btn-danger">Close</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br><br><br>
                    </div>
                    <!--End daftar alamat -->

                    <!--Daftar Maklumat Perhubungan-->
                    <div class="col-md-10" id="perhubunganIndividu" style="display: none;">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-header">Maklumat Perhubungan</div>
                                    <div class="card-body">

                                        <table>
                                            <tr>
                                                <th id="t">Jenis Maklumat Perhubungan</th>
                                                <th id="t">Maklumat Perhubungan</th>
                                                <th id="t">Dicipta pada</th>
                                                <th id="t">Kemaskini</th>
                                                <th id="t">Padam</th>
                                            </tr>
                                            @if ($individuPerhubungan == true)
                                                <tr>
                                                    <td id="td">{{ $individuPerhubungan->jenis_maklumat }}</td>
                                                    <td id="td">{{ $individuPerhubungan->maklumat_perhubungan }}</td>
                                                    <td id="td">{{ $individuPerhubungan->created_at }}</td>
                                                    <td id="td"><button class="btn btn-success"
                                                            id="edit2">Kemaskini</button></td>
                                                    <td id="td"><a class="btn btn-danger"
                                                            id="perhubunganIndividuDelete">Padam</a>
                                                    </td>
                                                </tr>
                                            @endif
                                        </table>

                                        @if ($individuPerhubungan == false)
                                            <br><br>
                                            <button id="daftar2" class="btn btn-secondary">Daftar Maklumat
                                                Perhubungan</button>
                                        @endif
                                        <br><br>

                                        <div class="col-md-12">
                                            @if ($individuPerhubungan == true)
                                                <br><br>

                                                <div class="col-md-12" id="editPerhubungan" style="display: none">
                                                    <p>Kemaskini maklumat perhubungan</p>

                                                    <form
                                                        action="{{ route('perhubunganIndividuUpdate', $individu->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        {{ csrf_field() }}
                                                        <table>
                                                            <tr>
                                                                <th id="t">Jenis Maklumat Perhubungan</th>
                                                                <th id="t">Maklumat Perhubungan</th>
                                                            </tr>

                                                            <tr>
                                                                <td id="td">
                                                                    <select name="jenis_maklumat" id="jenis_maklumat"
                                                                        class="form-select">
                                                                        <option
                                                                            value="{{ $individuPerhubungan->jenis_maklumat }}">
                                                                            {{ $individuPerhubungan->jenis_maklumat }}
                                                                        </option>
                                                                        <option value="No Tel Bimbit">No Tel Bimbit
                                                                        </option>
                                                                        <option value="No Tel Rumah">No Tel Rumah
                                                                        </option>
                                                                        <option value="No Tel Pejabat">No Tel Pejabat
                                                                        </option>
                                                                        <option value="Fax">Fax</option>
                                                                        <option value="Email">Email</option>
                                                                    </select>
                                                                </td>
                                                                <td id="td">
                                                                    <input type="text" name="maklumat_perhubungan"
                                                                        class="form-control"
                                                                        value="{{ $individuPerhubungan->maklumat_perhubungan }}">
                                                                </td>
                                                            </tr>

                                                        </table>
                                                        <br><br>
                                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                                    </form>

                                                </div>
                                            @endif
                                        </div>

                                        <div class="col-md-12" id="daftarPerhubungan" style="display: none">
                                            <form action="{{ route('maklumatIndividuPerhubungan', $individu->id) }}"
                                                method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <table>
                                                    <tr>
                                                        <th>Jenis Maklumat Perhubungan</th>
                                                        <td><select name="jenis_maklumat" id="jenis_maklumat"
                                                                class="form-select">
                                                                <option value="">Pilih</option>
                                                                <option value="No Tel Bimbit">No Tel Bimbit</option>
                                                                <option value="No Tel Rumah">No Tel Rumah</option>
                                                                <option value="No Tel Pejabat">No Tel Pejabat</option>
                                                                <option value="Fax">Fax</option>
                                                                <option value="Email">Email</option>
                                                            </select></td>
                                                        <td><input type="hidden" id="id" name="id"
                                                                value="{{ $individu->id }}"></td>
                                                        <td><input type="hidden" id="noKP" name="noKP"
                                                                value="{{ $individu->noKP }}"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Maklumat Perhubungan</th>
                                                        <td><input type="text" name="maklumat_perhubungan"
                                                                class="form-control"></td>
                                                    </tr>
                                                </table>
                                                <br>
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </form>
                                        </div>
                                        <br>
                                        <button class="btn btn-danger" id="close2">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br><br>
                    </div>
                    <!--End Daftar Maklumat Perhubungan -->

                    <!--Daftar akaun bank -->
                    <div class="col-md-10" id="akaunIndividu" style="display: none;">

                        <div class="row">
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-header">Daftar No Akaun Bank</div>
                                    <div class="card-body">

                                        <table>
                                            <tr>

                                                <th id="t">Jenis Bank</th>
                                                <th id="t">No akaun</th>
                                                <th id="t">Akaun Bank Utama</th>
                                                <th id="t">Dicipta pada</th>
                                                <th id="t">Kemaskini</th>
                                                <th id="t">Padam</th>
                                            </tr>
                                            @if ($individuAkaun == true)
                                                <tr>

                                                    <td id="td">{{ $individuAkaun->jenis_akaun }}</td>
                                                    <td id="td">{{ $individuAkaun->no_akaun }}</td>
                                                    <td id="td">Tidak</td>
                                                    <td id="td">{{ $individuAkaun->created_at }}</td>
                                                    <td id="td"><button class="btn btn-success"
                                                            id="edit3">Kemaskini</button></td>
                                                    <td id="td"><a class="btn btn-danger"
                                                            id="akaunIndividuDelete">Padam</a>
                                                    </td>
                                                </tr>
                                            @endif
                                        </table>

                                        @if ($individuAkaun == false)
                                            <br><br>
                                            <button class="btn btn-secondary" id="daftar3">Daftar No Akaun</button>
                                        @endif

                                        <br><br>

                                        <div class="col-md-12">
                                            @if ($individuAkaun == true)
                                                <br><br>


                                                <div class="col-md-12" id="editAkaun" style="display: none">
                                                    <p>Kemaskini maklumat akaun</p>
                                                    <form action="{{ route('akaunIndividuUpdate', $individu->id) }}"
                                                        method="post">
                                                        {{ csrf_field() }}
                                                        <table>
                                                            <tr>
                                                                <th id="t">Jenis Bank</th>
                                                                <th id="t">No akaun</th>
                                                            </tr>

                                                            <tr>
                                                                <td id="td">
                                                                    <select name="jenis_akaun" id="jenis_ak"
                                                                        class="form-select">
                                                                        <option
                                                                            value="{{ $individuAkaun->jenis_akaun }}">
                                                                            {{ $individuAkaun->jenis_akaun }}
                                                                        </option>
                                                                        <option value="BANK ISLAM">Bank Islam</option>
                                                                        <option value="AGRO BANK">Agro Bank</option>
                                                                        <option value="MAYBANK">Maybank</option>
                                                                        <option value="RHB BANK">RHB Bank</option>
                                                                        <option value="CIMB BANK">CIMB Bank</option>
                                                                        <option value="AM BANK">Am Bank</option>
                                                                        <option value="BANK SIMPANAN NASIONAL">Bank
                                                                            Simpanan
                                                                            Nasional</option>
                                                                        <option value="BANK RAKYAT">Bank Rakyat</option>
                                                                        <option value="BANK MUAMALAT">Bank Muamalat
                                                                        </option>
                                                                        <option value="PUBLIC BANK">Public Bank</option>
                                                                        <option value="ALLIANCE BANK">Alliance Bank
                                                                        </option>
                                                                        <option value="STANDARD CHARTERED BANK">Standard
                                                                            Chartered
                                                                            Bank</option>
                                                                        <option value="EON BANK">EON Bank</option>
                                                                        <option value="HONG LEONG BANK">Hong Leong Bank
                                                                        </option>
                                                                        <option value="HSBC BANK">HSBC Bank</option>
                                                                        <option value="AFFIN BANK">Affin Bank</option>
                                                                        <option value="CITY BANK">City Bank</option>
                                                                        <option value="UNITED OVERSEAS BANK">United
                                                                            Overseas
                                                                            Bank
                                                                        </option>
                                                                        <option value="OCBC BANK">OCBC Bank</option>
                                                                        <option value="AL RAJHI BANK">Al Rajhi Bank
                                                                        </option>
                                                                    </select>
                                                                </td>
                                                                <td id="td">
                                                                    <input type="text" name="no_akaun"
                                                                        class="form-control"
                                                                        value="{{ $individuAkaun->no_akaun }}">
                                                                </td>
                                                            </tr>

                                                        </table>
                                                        <br>
                                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                                    </form>

                                                </div>
                                            @endif
                                        </div>

                                        <div class="col-md-12" id="daftarAkaun" style="display: none">
                                            <form action="{{ route('maklumatIndividuAkaun', $individu->id) }}"
                                                method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <table>
                                                    <tr>
                                                        <th>No Akaun Bank</th>
                                                        <td><input type="text" name="no_akaun" class="form-control">
                                                        </td>
                                                        <td><input type="hidden" id="id" name="id"
                                                                value="{{ $individu->id }}"></td>
                                                        <td><input type="hidden" id="noKP" name="noKP"
                                                                value="{{ $individu->noKP }}"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jenis akaun</th>
                                                        <td><select name="jenis_akaun" id="jenis_ak"
                                                                class="form-select">
                                                                <option value="">Pilih</option>
                                                                <option value="BANK ISLAM">Bank Islam</option>
                                                                <option value="AGRO BANK">Agro Bank</option>
                                                                <option value="MAYBANK">Maybank</option>
                                                                <option value="RHB BANK">RHB Bank</option>
                                                                <option value="CIMB BANK">CIMB Bank</option>
                                                                <option value="AM BANK">Am Bank</option>
                                                                <option value="BANK SIMPANAN NASIONAL">Bank Simpanan
                                                                    Nasional</option>
                                                                <option value="BANK RAKYAT">Bank Rakyat</option>
                                                                <option value="BANK MUAMALAT">Bank Muamalat</option>
                                                                <option value="PUBLIC BANK">Public Bank</option>
                                                                <option value="ALLIANCE BANK">Alliance Bank</option>
                                                                <option value="STANDARD CHARTERED BANK">Standard
                                                                    Chartered
                                                                    Bank</option>
                                                                <option value="EON BANK">EON Bank</option>
                                                                <option value="HONG LEONG BANK">Hong Leong Bank</option>
                                                                <option value="HSBC BANK">HSBC Bank</option>
                                                                <option value="AFFIN BANK">Affin Bank</option>
                                                                <option value="CITY BANK">City Bank</option>
                                                                <option value="UNITED OVERSEAS BANK">United Overseas
                                                                    Bank
                                                                </option>
                                                                <option value="OCBC BANK">OCBC Bank</option>
                                                                <option value="AL RAJHI BANK">Al Rajhi Bank</option>
                                                            </select></td>
                                                    </tr>
                                                </table>
                                                <br>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>

                                        <br>
                                        <button id="close3" class="btn btn-danger">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of display data -->

                    <!--End form -->



                </div>
            </div>
        </div>
    </div>

    <!-- New scripts 11/5/2022-->

    <script type="text/javascript">
        $('#alamatIndividuDelete').on('click', function() {
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
                    @if ($individuAlamat == true)
                        window.location = '{{ route('alamatIndividuDelete', $individuAlamat->id) }}';
                    @endif
                }

            })

        })

        $('#perhubunganIndividuDelete').on('click', function() {
            console.log("btn click");
            Swal.fire({
                title: 'Anda ingin memadam data ini?',
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
                        'Maklumat perhubungan anda telah dipadam.',
                        'success'
                    )
                    @if ($individuPerhubungan == true)
                        window.location =
                            '{{ route('perhubunganIndividuDelete', $individuPerhubungan->id) }}';
                    @endif
                }

            })

        })

        $('#akaunIndividuDelete').on('click', function() {
            console.log("btn click");
            Swal.fire({
                title: 'Anda ingin memadam data ini?',
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
                        'Maklumat akaun anda telah dipadam.',
                        'success'
                    )
                    @if ($individuAkaun == true)
                        window.location = '{{ route('akaunIndividuDelete', $individuAkaun->id) }}';
                    @endif
                }

            })

        })
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>


    <!-- New scripts 28/3/2022-->

    <script type="text/javascript">
        function display() {
            var x = document.getElementById('jenis_maklumat').value;

            var alamat = document.getElementById('alamatIndividu');
            var perhubungan = document.getElementById('perhubunganIndividu');
            var akaun = document.getElementById('akaunIndividu');
            var daftar1 = document.getElementById('daftarAlamat');
            var daftar2 = document.getElementById('daftarPerhubungan');
            var daftar3 = document.getElementById('daftarAkaun');

            var edit1 = document.getElementById('editAlamat');
            var edit2 = document.getElementById('editPerhubungan');
            var edit3 = document.getElementById('editAkaun');

            if (x == "semua") {
                alamat.style.display = "block";
                perhubungan.style.display = "block";
                akaun.style.display = "block";
                daftar1.style.display = "none";
                daftar2.style.display = "none";
                daftar3.style.display = "none";
                edit1.style.display = "none";
                edit2.style.display = "none";
                edit3.style.display = "none";
            } else if (x == "alamat") {
                alamat.style.display = "block";
                perhubungan.style.display = "none";
                akaun.style.display = "none";
                daftar1.style.display = "none";
                daftar2.style.display = "none";
                daftar3.style.display = "none";
                edit1.style.display = "none";
                edit2.style.display = "none";
                edit3.style.display = "none";
            } else if (x == "perhubungan") {
                alamat.style.display = "none";
                perhubungan.style.display = "block";
                akaun.style.display = "none";
                daftar1.style.display = "none";
                daftar2.style.display = "none";
                daftar3.style.display = "none";
                edit1.style.display = "none";
                edit2.style.display = "none";
                edit3.style.display = "none";
            } else if (x == "akaun") {
                alamat.style.display = "none";
                perhubungan.style.display = "none";
                akaun.style.display = "block";
                daftar1.style.display = "none";
                daftar2.style.display = "none";
                daftar3.style.display = "none";
                edit1.style.display = "none";
                edit2.style.display = "none";
                edit3.style.display = "none";
            }
        }
    </script>


    <script type="text/javascript">
        //function button
        $("#kemaskiniMaklumat").click(
            function() {
                $("#maklumatUpdate").show();
            }
        );
        $("#daftar1").click(
            function() {
                $("#daftarAlamat").show();
            }
        );

        $("#daftar2").click(
            function() {
                $("#daftarPerhubungan").show();
            }
        );

        $("#daftar3").click(
            function() {
                $("#daftarAkaun").show();
            }
        );


        $("#close").click(
            function() {
                $("#alamatIndividu").hide();
                $("#daftarAlamat").hide();
                $("#editAlamat").hide();
            }
        );

        $("#close2").click(
            function() {
                $("#perhubunganIndividu").hide();
                $("#daftarPerhubungan").hide();
                $("#editPerhubungan").hide();
            }
        );

        $("#close3").click(
            function() {
                $("#akaunIndividu").hide();
                $("#daftarAkaun").hide();
                $("#editAkaun").hide();
            }
        );

        $("#edit1").click(
            function() {
                $("#editAlamat").show();
            }
        );

        $("#edit2").click(
            function() {
                $("#editPerhubungan").show();
            }
        );

        $("#edit3").click(
            function() {
                $("#editAkaun").show();
            }
        );
    </script>

    <script src="{{ asset('public/js/app.js') }}" defer></script>

</body>

</html>
