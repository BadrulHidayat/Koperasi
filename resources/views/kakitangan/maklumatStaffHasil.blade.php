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

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ 'Inter XS' }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ 'Toggle navigation' }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
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
                                <li><a class="dropdown-item" href="{{ route('maklumatIndividu') }}">Maklumat Individu</a></li>
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
                                <li><a class="dropdown-item" href="{{ route('maklumatSyarikat') }}">Maklumat Syarikat</a></li>
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
                                data-bs-toggle="dropdown" aria-expanded="false"> Pelbagai
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
                                    <a class="nav-link" href="{{ route('login') }}">{{ 'Login' }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ 'Register' }}</a>
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
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Koperasi - Maklumat Kakitangan</h2>

                    <div class="card-body">
                        <h4>Maklumat Kakitangan</h4>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th scope="col">Penyata</th>
                                <th scope="col">No Kakitangan</th>
                                <th scope="col">Tarikh Mula Berkhidmat</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No KP Baru</th>
                                <th scope="col">No KP Lama</th>
                                <th scope="col">Status</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <th>{{ $staff->noStaff }}</th>
                                <th>{{ $pekerjaan->tarikhMulaKerja }}</th>
                                <th>{{ $staff->nama }}</th>
                                <th>{{ $staff->noKPBaru }}</th>
                                <th>{{ $staff->noKPLama }}</th>
                                <th>{{ $pekerjaan->statusStaff }}</th>
                                <th>
                                    <a href="{{ route('maklumatStaffKemaskini', $staff->noKPBaru) }}"
                                        class="btn btn-success btn-block">Kemaskini</a>
                                </th>
                            </tr>
                        </table>
                        <br>
                        <button class="btn btn-secondary btn-block" id="btn_alamat">Alamat</button>

                        <button class="btn btn-secondary btn-block" id="btn_perhubungan">Perhubungan</button>

                        <button class="btn btn-secondary btn-block" id="btn_bank">Akaun Bank</button>

                        <button class="btn btn-secondary btn-block" id="btn_pendidikan">Pendidikan</button>

                        <button class="btn btn-secondary btn-block" id="btn_saudara">Saudara Mara</button>

                        <button class="btn btn-secondary btn-block" id="btn_caruman">Caruman</button>
                    </div>

                    <div class="card-body">
                        <div class="col-md-12" id="appearAlamat" style="display: none">
                            <h4>Maklumat Alamat</h4>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th scope="col">Jenis Alamat</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Poskod</th>
                                    <th scope="col">Bandar</th>
                                    <th scope="col">Negeri</th>
                                    <th scope="col">Dicipta Oleh</th>
                                    <th scope="col">Dicipta pada</th>
                                    <th scope="col">Dikemaskini oleh</th>
                                    <th scope="col">Dikemaskini pada</th>
                                    <th scope="col">Kemaskini</th>
                                    <th scope="col">Padam</th>
                                </tr>
                                @if($alamat2 == true)
                                <tr>
                                    <th scope="row">{{ $alamat2->jenisAlamat }}</th>
                                    <th>{{ $alamat2->alamat }}</th>
                                    <th>{{ $alamat2->poskod }}</th>
                                    <th>{{ $alamat2->daerah }}</th>
                                    <th>{{ $alamat2->negeri }}</th>
                                    <th></th>
                                    <th>{{ $alamat2->created_at }}</th>
                                    <th></th>
                                    <th>{{ $alamat2->updated_at }}</th>
                                    <th><a id="edit_alamat" class="btn btn-success btn-block">Kemaskini</a></th>
                                    <th>
                                        <a href="{{ route('padamAlamatStaff', $alamat2->noKPBaru) }}"
                                            class="btn btn-danger btn-block">Padam</a>
                                    </th>
                                </tr>
                                @endif
                            </table>

                            <a id="daftar_alamat" class="btn btn-primary btn-block">Daftar Alamat</a>
                            <button id="closeAlamat" class="btn btn-danger">Close</button>
                            <br><br>
                            @if($alamat2 == true)
                            <div class="col-md-12" id="appearEditAlamat" style="display: none">
                                <form action="{{ route('updateAlamatStaff', $alamat2->noKPBaru) }}" method="POST"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <th scope="col">Jenis Alamat</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Poskod</th>
                                            <th scope="col">Bandar</th>
                                            <th scope="col">Negeri</th>
                                            <th scope="col">Kemaskini</th>
                                            <th scope="col">Batal</th>
                                        </tr>
                                        <tr>
                                            <input type="hidden" name="noStaff" value="{{ $alamat2->noStaff }}">
                                            <input type="hidden" name="noKPBaru" value="{{ $alamat2->noKPBaru }}">
                                            <th scope="row">
                                                <select name="jenisAlamat" class="form-select">
                                                    <option value="{{ $alamat2->jenisAlamat }}">
                                                        {{ $alamat2->jenisAlamat }}
                                                    </option>
                                                    <option value="Kediaman">Kediaman</option>
                                                    <option value="Pejabat">Pejabat</option>
                                                    <option value="ReturnR">Return-R</option>
                                                    <option value="ReturnP">Return-P</option>
                                                </select>
                                            </th>
                                            <th>
                                                <textarea type="text" name="alamat" class="form-control" rows="3"
                                                    style="resize: none;">{{ $alamat2->alamat }}</textarea>
                                            </th>
                                            <th>
                                                <input type="text" name="poskod" class="form-control"
                                                    value="{{ $alamat2->poskod }}">
                                            </th>
                                            <th>
                                                <input type="text" name="daerah" class="form-control"
                                                    value="{{ $alamat2->daerah }}">
                                            </th>
                                            <th>
                                                <select name="negeri" class="form-select">
                                                    <option value="{{ $alamat2->negeri }}">{{ $alamat2->negeri }}
                                                    </option>
                                                    <option value="Perlis">Perlis</option>
                                                    <option value="Kedah">Kedah</option>
                                                    <option value="Pulau Pinang">Pulau Pinang</option>
                                                    <option value="Perak">Perak</option>
                                                    <option value="Kelantan">Kelantan</option>
                                                    <option value="Terengganu">Terengganu</option>
                                                    <option value="Pahang">Pahang</option>
                                                    <option value="Melaka">Melaka</option>
                                                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                                                    <option value="Selangor">Selangor</option>
                                                    <option value="Johor">Johor</option>
                                                    <option value="Sarawak">Sarawak</option>
                                                    <option value="Sabah">Sabah</option>
                                                    <option value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan
                                                        Kuala Lumpur</option>
                                                    <option value="Wilayah Persekutuan Putrajaya">Wilayah Persekutuan
                                                        Putrajaya</option>
                                                    <option value="Wilayah Persekutuan Labuan">Wilayah Persekutuan
                                                        Labuan
                                                    </option>
                                                </select>
                                            </th>
                                            <th>
                                                <button class="btn btn-success btn-block" type="submit">Kemaskini</button>
                                            </th>
                                            <th>
                                                <a id="closeEditAlamat" class="btn btn-danger btn-block">Batal</a>
                                            </th>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            @endif
                            <br><br>
                            @if($alamat2 == false)
                            <div class="col-md-6" id="appearDaftarAlamat" style="display: none">
                                <form action="{{ route('daftarAlamatStaff', $staff->noKPBaru) }}" method="POST"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <input type="hidden" name="noStaff" value="{{ $staff->noStaff }}">
                                            <th style="width: 20%">
                                                <label for="alamat">Alamat</label>
                                            </th>
                                            <td>
                                                <textarea type="text" name="alamat" class="form-control" rows="3" style="resize: none"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="poskod">Poskod</label>
                                            </th>
                                            <td>
                                                <input type="text" name="poskod" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="daerah">Bandar</label>
                                            </th>
                                            <td>
                                                <input type="text" name="daerah" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="negeri">Negeri</label>
                                            </th>
                                            <td>
                                                <select name="negeri" class="form-select">
                                                    <option value="">Pilih</option>
                                                    <option value="Perlis">Perlis</option>
                                                    <option value="Kedah">Kedah</option>
                                                    <option value="Pulau Pinang">Pulau Pinang</option>
                                                    <option value="Perak">Perak</option>
                                                    <option value="Kelantan">Kelantan</option>
                                                    <option value="Terengganu">Terengganu</option>
                                                    <option value="Pahang">Pahang</option>
                                                    <option value="Melaka">Melaka</option>
                                                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                                                    <option value="Selangor">Selangor</option>
                                                    <option value="Johor">Johor</option>
                                                    <option value="Sarawak">Sarawak</option>
                                                    <option value="Sabah">Sabah</option>
                                                    <option value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan
                                                        Kuala Lumpur</option>
                                                    <option value="Wilayah Persekutuan Putrajaya">Wilayah Persekutuan
                                                        Putrajaya</option>
                                                    <option value="Wilayah Persekutuan Labuan">Wilayah Persekutuan
                                                        Labuan
                                                    </option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="jenisAlamat">Jenis Alamat</label>
                                            </th>
                                            <td>
                                                <select name="jenisAlamat" class="form-select">
                                                    <option value="">Pilih</option>
                                                    <option value="Kediaman">Kediaman</option>
                                                    <option value="Pejabat">Pejabat</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                    <button class="btn btn-success btn-block" type="submit">Submit</button>
                                    <br><br>
                                </form>
                                <button id="closeDaftarAlamat" class="btn btn-danger">Close</button>
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="col-md-6" id="appear_perhubungan" style="display: none">
                            <h4>Maklumat Perhubungan</h4>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th scope="col">Jenis Maklumat Perhubungan</th>
                                    <th scope="col">Maklumat Perhubungan</th>
                                    <th scope="col">Kemaskini</th>
                                    <th scope="col">Padam</th>
                                </tr>
                                <tr>
                                    <th scope="row">No Tel Rumah</th>
                                    <th>{{ $perhubungan->telRumah }}</th>
                                    <th> <a id="edit_telR" class="btn btn-success btn-block">Kemaskini</a></th>
                                    <th><a href="{{ route('padamTelRStaff', $perhubungan->noKPBaru) }}"
                                            class="btn btn-danger btn-block">Padam</a></th>
                                </tr>
                                <tr>
                                    <th scope="row">No Tel Pejabat</th>
                                    <th>{{ $perhubungan->telPejabat }}</th>
                                    <th> <a id="edit_telP" class="btn btn-success btn-block">Kemaskini</a></th>
                                    <th><a href="{{ route('padamTelPStaff', $perhubungan->noKPBaru) }}"
                                        class="btn btn-danger btn-block">Padam</a></th>
                                </tr>
                                <tr>
                                    <th scope="row">No Tel Bimbit</th>
                                    <th>{{ $perhubungan->telHP }}</th>
                                    <th> <a id="edit_telHP" class="btn btn-success btn-block">Kemaskini</a></th>
                                    <th><a href="{{ route('padamTelHPStaff', $perhubungan->noKPBaru) }}"
                                        class="btn btn-danger btn-block">Padam</a></th>
                                </tr>
                                <tr>
                                    <th scope="row">Faks</th>
                                    <th>{{ $perhubungan->faks }}</th>
                                    <th> <a id="edit_faks" class="btn btn-success btn-block">Kemaskini</a></th>
                                    <th><a href="{{ route('padamFaksStaff', $perhubungan->noKPBaru) }}"
                                        class="btn btn-danger btn-block">Padam</a></th>
                                </tr>
                                <tr>
                                    <th scope="row">E-mail</th>
                                    <th>{{ $perhubungan->email }}</th>
                                    <th> <a id="edit_email" class="btn btn-success btn-block">Kemaskini</a></th>
                                    <th><a href="{{ route('padamEmailStaff', $perhubungan->noKPBaru) }}"
                                        class="btn btn-danger btn-block">Padam</a></th>
                                </tr>
                            </table>

                            <button id="close_perhubungan" class="btn btn-danger">Close</button>

                            <br><br>

                            <div class="col-md-12" id="appearEditTelR" style="display: none">
                                <form action="{{ route('updateTelRStaff', $perhubungan->noKPBaru) }}" method="POST"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <th scope="col">Jenis Maklumat Perhubungan</th>
                                            <th scope="col">Maklumat Perhubungan</th>
                                            <th scope="col">Kemaskini</th>
                                            <th scope="col">Batal</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">No Tel Rumah</th>
                                            <th>
                                                <input type="text" name="telRumah" value="{{ $perhubungan->telRumah }}" class="form-control">
                                            </th>
                                            <th>
                                                <button type="submit"
                                                    class="btn btn-success btn-block">Kemaskini</button>
                                            </th>
                                            <th>
                                                <a id="closeEditTelR" class="btn btn-danger btn-block">Batal</a>
                                            </th>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            <br>
                            <div class="col-md-12" id="appearEditTelP" style="display: none">
                                <form action="{{ route('updateTelPStaff', $perhubungan->noKPBaru) }}" method="POST"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <th scope="col">Jenis Maklumat Perhubungan</th>
                                            <th scope="col">Maklumat Perhubungan</th>
                                            <th scope="col">Kemaskini</th>
                                            <th scope="col">Batal</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">No Tel Pejabat</th>
                                            <th>
                                                <input type="text" name="telPejabat"
                                                    value="{{ $perhubungan->telPejabat }}" class="form-control">
                                            </th>
                                            <th>
                                                <button type="submit"
                                                    class="btn btn-success btn-block">Kemaskini</button>
                                            </th>
                                            <th>
                                                <a id="closeEditTelP" class="btn btn-danger btn-block">Batal</a>
                                            </th>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            <br>
                            <div class="col-md-12" id="appearEditTelHP" style="display: none">
                                <form action="{{ route('updateTelHPStaff', $perhubungan->noKPBaru) }}" method="POST"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <th scope="col">Jenis Maklumat Perhubungan</th>
                                            <th scope="col">Maklumat Perhubungan</th>
                                            <th scope="col">Kemaskini</th>
                                            <th scope="col">Batal</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">No Tel Bimbit</th>
                                            <th>
                                                <input type="text" name="telHP" value="{{ $perhubungan->telHP }}"
                                                    class="form-control">
                                            </th>
                                            <th>
                                                <button type="submit"
                                                    class="btn btn-success btn-block">Kemaskini</button>
                                            </th>
                                            <th>
                                                <a id="closeEditTelHP" class="btn btn-danger btn-block">Batal</a>
                                            </th>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            <br>
                            <div class="col-md-12" id="appearEditFaks" style="display: none">
                                <form action="{{ route('updatefaksStaff', $perhubungan->noKPBaru) }}" method="POST"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <th scope="col">Jenis Maklumat Perhubungan</th>
                                            <th scope="col">Maklumat Perhubungan</th>
                                            <th scope="col">Kemaskini</th>
                                            <th scope="col">Batal</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Faks</th>
                                            <th>
                                                <input type="text" name="faks" value="{{ $perhubungan->faks }}"
                                                    class="form-control">
                                            </th>
                                            <th>
                                                <button type="submit"
                                                    class="btn btn-success btn-block">Kemaskini</button>
                                            </th>
                                            <th>
                                                <a id="closeEditFaks" class="btn btn-danger btn-block">Batal</a>
                                            </th>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            <br>
                            <div class="col-md-12" id="appearEditEmail" style="display: none">
                                <form action="{{ route('updateEmailStaff', $perhubungan->noKPBaru) }}" method="POST"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <th scope="col">Jenis Maklumat Perhubungan</th>
                                            <th scope="col">Maklumat Perhubungan</th>
                                            <th scope="col">Kemaskini</th>
                                            <th scope="col">Batal</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Email</th>
                                            <th>
                                                <input type="text" name="email" value="{{ $perhubungan->email }}"
                                                    class="form-control">
                                            </th>
                                            <th>
                                                <button type="submit"
                                                    class="btn btn-success btn-block">Kemaskini</button>
                                            </th>
                                            <th>
                                                <a id="closeEditEmail" class="btn btn-danger btn-block">Batal</a>
                                            </th>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="col-md-12" id="appear_bank" style="display: none">
                            <h4>Maklumat Akaun No Bank</h4>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th scope="col">Jenis Bank</th>
                                    <th scope="col">No Akaun</th>
                                    <th scope="col">Dicipta Oleh</th>
                                    <th scope="col">Dicipta pada</th>
                                    <th scope="col">Dikemaskini oleh</th>
                                    <th scope="col">Dikemaskini pada</th>
                                    <th scope="col">Akaun Bank Utama</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col">Kemaskini</th>
                                    <th scope="col">Padam</th>
                                </tr>
                                @if($bank2 == true)
                                <tr>
                                    <th scope="row">{{ $bank2->jenisBank }}</th>
                                    <th>{{ $bank2->noAkaunBank }}</th>
                                    <th></th>
                                    <th>{{ $bank2->created_at }}</th>
                                    <th></th>
                                    <th>{{ $bank2->updated_at }}</th>
                                    <th></th>
                                    <th>
                                        <a href="#">Set Akaun No Utama</a>
                                    </th>
                                    <th>
                                        <a href="#">Bukan Akaun No Utama</a>
                                    </th>
                                    <th><a id="edit_bank" class="btn btn-success btn-block">Kemaskini</a></th>
                                    <th>
                                        <a href="{{ route('padamBankStaff', $bank2->noKPBaru) }}"
                                            class="btn btn-danger btn-block">Padam</a>
                                    </th>
                                </tr>
                                @endif
                            </table>
                            <button id="daftar_bank" class="btn btn-primary">Daftar Akaun No</button>
                            <button id="close_bank" class="btn btn-danger">Close</button>
                        </div>
                        <br>
                        @if($bank2 == true)
                        <div class="col-md-8" id="appearEditBank" style="display: none">
                            <form action="{{ route('updateBankStaff', $staff->noKPBaru) }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th scope="col">Jenis Bank</th>
                                        <th scope="col">No Akaun</th>
                                        <th scope="col">Akaun Bank Utama</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col">Kemaskini</th>
                                        <th scope="col">Batal</th>
                                    </tr>
                                    <tr>
                                        <input type="hidden" name="noStaff" value="{{ $bank2->noStaff }}">
                                        <th scope="row">
                                            <select name="jenisBank" class="form-select">
                                                <option value="{{ $bank2->jenisBank }}">{{ $bank2->jenisBank }}
                                                </option>
                                                <option value="BANK ISLAM">Bank Islam</option>
                                                <option value="AGRO BANK">Agro Bank</option>
                                                <option value="MAYBANK">Maybank</option>
                                                <option value="RHB BANK">RHB Bank</option>
                                                <option value="CIMB BANK">CIMB Bank</option>
                                                <option value="AM BANK">Am Bank</option>
                                                <option value="BANK SIMPANAN NASIONAL">Bank Simpanan Nasional</option>
                                                <option value="BANK RAKYAT">Bank Rakyat</option>
                                                <option value="BANK MUAMALAT">Bank Muamalat</option>
                                                <option value="PUBLIC BANK">Public Bank</option>
                                                <option value="ALLIANCE BANK">Alliance Bank</option>
                                                <option value="STANDARD CHARTERED BANK">Standard Chartered Bank</option>
                                                <option value="EON BANK">EON Bank</option>
                                                <option value="HONG LEONG BANK">Hong Leong Bank</option>
                                                <option value="HSBC BANK">HSBC Bank</option>
                                                <option value="AFFIN BANK">Affin Bank</option>
                                                <option value="CITY BANK">City Bank</option>
                                                <option value="UNITED OVERSEAS BANK">United Overseas Bank</option>
                                                <option value="OCBC BANK">OCBC Bank</option>
                                                <option value="AL RAJHI BANK">Al Rajhi Bank</option>
                                            </select>
                                        </th>
                                        <th>
                                            <input type="text" name="noAkaunBank" class="form-control"
                                                value="{{ $bank2->noAkaunBank }}">
                                        </th>
                                        <th></th>
                                        <th>
                                            <a href="#">Set Akaun No Utama</a>
                                        </th>
                                        <th>
                                            <a href="#">Bukan Akaun No Utama</a>
                                        </th>
                                        <th>
                                            <button type="submit" class="btn btn-success btn-block">Kemaskini</button>
                                        </th>
                                        <th>
                                            <a id="closeEditBank" class="btn btn-danger btn-block">Batal</a>
                                        </th>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        @endif
                        <br>
                        @if($bank2 == false)
                        <div class="col-md-8" id="appearDaftarBank" style="display: none">
                            <form action="{{ route('daftarBankStaff', $staff->noKPBaru) }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th scope="col">Jenis Bank</th>
                                        <th scope="col">No Akaun</th>
                                        <th scope="col">Kemaskini</th>
                                        <th scope="col">Batal</th>
                                    </tr>
                                    <tr>
                                        <input type="hidden" name="noAhli" value="{{ $staff->noStaff }}">
                                        <th scope="row">
                                            <select name="jenisBank" class="form-select">
                                                <option value="">Pilih</option>
                                                <option value="BANK ISLAM">Bank Islam</option>
                                                <option value="AGRO BANK">Agro Bank</option>
                                                <option value="MAYBANK">Maybank</option>
                                                <option value="RHB BANK">RHB Bank</option>
                                                <option value="CIMB BANK">CIMB Bank</option>
                                                <option value="AM BANK">Am Bank</option>
                                                <option value="BANK SIMPANAN NASIONAL">Bank Simpanan Nasional</option>
                                                <option value="BANK RAKYAT">Bank Rakyat</option>
                                                <option value="BANK MUAMALAT">Bank Muamalat</option>
                                                <option value="PUBLIC BANK">Public Bank</option>
                                                <option value="ALLIANCE BANK">Alliance Bank</option>
                                                <option value="STANDARD CHARTERED BANK">Standard Chartered Bank</option>
                                                <option value="EON BANK">EON Bank</option>
                                                <option value="HONG LEONG BANK">Hong Leong Bank</option>
                                                <option value="HSBC BANK">HSBC Bank</option>
                                                <option value="AFFIN BANK">Affin Bank</option>
                                                <option value="CITY BANK">City Bank</option>
                                                <option value="UNITED OVERSEAS BANK">United Overseas Bank</option>
                                                <option value="OCBC BANK">OCBC Bank</option>
                                                <option value="AL RAJHI BANK">Al Rajhi Bank</option>
                                            </select>
                                        </th>
                                        <th>
                                            <input type="text" name="noAkaunBank" class="form-control">
                                        </th>
                                        <th>
                                            <button type="submit" class="btn btn-success btn-block">Kemaskini</button>
                                        </th>
                                        <th>
                                            <a id="closeDaftarBank" class="btn btn-danger btn-block">Batal</a>
                                        </th>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        @endif
                    </div>

                    <div class="card-body">
                        <div class="col-md-12" id="appear_pendidikan" style="display: none">
                            <h4>Maklumat Pendidikan</h4>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th scope="col">Peringkat</th>
                                    <th scope="col">Tahun</th>
                                    <th scope="col">Dicipta Oleh</th>
                                    <th scope="col">Dicipta pada</th>
                                    <th scope="col">Dikemaskini oleh</th>
                                    <th scope="col">Dikemaskini pada</th>
                                    <th scope="col">Kemaskini</th>
                                    <th scope="col">Padam</th>
                                </tr>
                                @if($pendidikan == true)
                                <tr>
                                    <th scope="row">{{ $pendidikan->tarafPendidikan }}</th>
                                    <th>{{ $pendidikan->tahun }}</th>
                                    <th></th>
                                    <th>{{ $pendidikan->created_at }}</th>
                                    <th></th>
                                    <th>{{ $pendidikan->updated_at }}</th>
                                    <th><a id="edit_pendidikan" class="btn btn-success btn-block">Kemaskini</a></th>
                                    <th>
                                        <a href="{{ route('padamPendidikanStaff', $pendidikan->noKPBaru) }}" class="btn btn-danger btn-block">Padam</a>
                                    </th>
                                </tr>
                                @endif
                            </table>
                            <button id="daftar_pendidikan" class="btn btn-primary">Daftar Pendidikan</button>
                            <button id="close_pendidikan" class="btn btn-danger">Close</button>
                        </div>
                        <br>

                        @if($pendidikan == true)
                        <div class="col-md-8" id="appearEditPendidikan" style="display: none">
                            <form action="{{ route('updatePendidikanStaff', $pendidikan->noKPBaru) }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th scope="col">Peringkat</th>
                                        <th scope="col">Tahun</th>
                                        <th scope="col">Kemaskini</th>
                                        <th scope="col">Batal</th>
                                    </tr>
                                    <tr>
                                        <input type="hidden" name="noStaff" value="{{ $pendidikan->noStaff }}">
                                        <th scope="row">
                                            <select name="tarafPendidikan" class="form-select">
                                                <option value="{{ $pendidikan->tarafPendidikan }}">{{ $pendidikan->tarafPendidikan }}
                                                </option>
                                                <option value="TIADA">TIADA</option>
                                                <option value="TIDAK BERSEKOLAH">TIDAK BERSEKOLAH</option>
                                                <option value="UPSR">UPSR</option>
                                                <option value="PMR">PMR</option>
                                                <option value="SPM">SPM</option>
                                                <option value="STPM">STPM</option>
                                                <option value="STAM">STAM</option>
                                                <option value="DIPLOMA">DIPLOMA</option>
                                                <option value="SARJANA MUDA">SARJANA MUDA</option>
                                                <option value="SARJANA">SARJANA</option>
                                                <option value="PHD">PHD</option>
                                                <option value="HAFIZ">HAFIZ</option>
                                            </select>
                                        </th>
                                        <th>
                                            <input type="text" name="tahun" class="form-control" value="{{ $pendidikan->tahun }}">
                                        </th>
                                        <th>
                                            <button type="submit" class="btn btn-success btn-block">Kemaskini</button>
                                        </th>
                                        <th>
                                            <a id="closeEditPendidikan" class="btn btn-danger btn-block">Batal</a>
                                        </th>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        @endif
                        <br>
                        @if($pendidikan == false)
                         <div class="col-md-6" id="appearDaftarPendidikan" style="display: none">
                            <form action="{{ route('daftarPendidikanStaff', $staff->noKPBaru) }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th scope="col">Peringkat</th>
                                        <th scope="col">Tahun</th>
                                    </tr>
                                    <tr>
                                        <input type="hidden" name="noStaff" value="{{ $staff->noStaff }}">
                                        <th scope="row">
                                            <select name="tarafPendidikan" class="form-select">
                                                <option value="TIADA">TIADA</option>
                                                <option value="TIDAK BERSEKOLAH">TIDAK BERSEKOLAH</option>
                                                <option value="UPSR">UPSR</option>
                                                <option value="PMR">PMR</option>
                                                <option value="SPM">SPM</option>
                                                <option value="STPM">STPM</option>
                                                <option value="STAM">STAM</option>
                                                <option value="DIPLOMA">DIPLOMA</option>
                                                <option value="SARJANA MUDA">SARJANA MUDA</option>
                                                <option value="SARJANA">SARJANA</option>
                                                <option value="PHD">PHD</option>
                                                <option value="HAFIZ">HAFIZ</option>
                                            </select>
                                        </th>
                                        <th>
                                            <input type="text" name="tahun" class="form-control">
                                        </th> 
                                    </tr>
                                </table>
                                 <button type="submit" class="btn btn-success btn-block">Simpan</button>
                            </form>
                            <br>
                            <a id="closeDaftarPendidikan" class="btn btn-danger btn-block">Batal</a>
                        </div>
                        @endif
                    </div>

                    <div class="card-body">
                        <div class="col-md-12" id="appear_saudara" style="display: none">
                            <h4>Maklumat Saudara / Mara</h4>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th scope="col">Jenis Hubungan</th>
                                    <th scope="col">Pewaris</th>
                                    <th scope="col">Penerima Wasiat</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">No K/P Baru</th>
                                    <th scope="col">No K/P Lama</th>
                                    <th scope="col">Kemaskini</th>
                                    <th scope="col">Padam</th>
                                </tr>
                                @if ($saudara == true)
                                <tr>
                                    <th scope="row">{{$saudara->jenisHubungan}}</th>
                                    <th>{{$saudara->pewaris}}</th>
                                    <th>{{$saudara->pemegangWasiat}}</th>
                                    <th>{{$saudara->nama}}</th>
                                    <th>{{$saudara->noKP}}</th>
                                    <th></th>
                                    <th><a id="edit_saudara" class="btn btn-success btn-block">Kemaskini</a></th>
                                    <th><a href="{{route('padamSaudara', $staff->noKPBaru)}}" class="btn btn-danger btn-block">Padam</a></th>
                                </tr>
                                @endif
                            </table>
                            <button id="daftar_saudara" class="btn btn-primary">Daftar Saudara / Mara</button>
                            <button id="closeSaudara" class="btn btn-danger">Close</button>
                        </div>
    
                        <br>
    
                        @if ($saudara == true)
                        <div class="col-md-12" id="appearEditSaudara" style="display: none">
                            <form action="{{ route('updateSaudara', $staff->noKPBaru) }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <h4>Carian</h4>
                                <table>
                                    <input type="hidden" name="noStaff" value="{{ $staff->noStaff }}">
                                    <tr>
                                        <th>Carian Individu</th>
                                        <td>
                                            <input type="text" name="cariIndi" class="form-control" value="{{$saudara->cariIndi}}">
                                        </td>
                                        <td>
                                            <a href="{{ route('daftarIndividu') }}" class="btn btn-primary">Daftar Individu</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Carian</th>
                                        <td>
                                            <select name="jenisCariIndi" class="form-select">
                                                <option value="{{$saudara->jenisCariIndi}}">{{$saudara->jenisCariIndi}}</option>
                                                <option value="No Ahli">No Ahli</option>
                                                <option value="No KP">No KP</option>
                                                <option value="No KP Lama">No KP Lama</option>
                                                <option value="Nama">Nama</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <button class="btn btn-secondary btn-block">Cari</button>
                                        </th>
                                    </tr>
                                </table>
    
                                <br>
    
                                <table style="width:30%">
                                    <tr>
                                        <th style="width: 40%">Jenis Hubungan</th>
                                        <td>
                                            <select name="jenisHubungan" class="form-select">
                                                <option value="{{$saudara->jenisHubungan}}">{{$saudara->jenisHubungan}}</option>
                                                <option value="SUAMI">Suami</option>
                                                <option value="ISTERI">Isteri</option>
                                                <option value="IBU">Ibu</option>
                                                <option value="BAPA">Bapa</option>
                                                <option value="ABANG">Abang</option>
                                                <option value="KAKAK">Kakak</option>
                                                <option value="ADIK">Adik</option>
                                                <option value="ANAK">Anak</option>
                                                <option value="BAPA SAUDARA">Bapa Saudara</option>
                                                <option value="IBU SAUDARA">Ibu Saudara</option>
                                                <option value="ANAK SAUDARA">Anak Saudara</option>
                                                <option value="SEPUPU">Sepupu</option>
                                                <option value="CUCU">Cucu</option>
                                                <option value="ABANG IPAR">Abang Ipar</option>
                                                <option value="KAKAK IPAR">Kakak Ipar</option>
                                                <option value="ADIK IPAR">Adik Ipar</option>
                                                <option value="TUNANG">Tunang</option>
                                                <option value="WAKIL WARITH">Wakil Warith</option>
                                                <option value="SAHABAT QARIB">Sahabat Qarib</option>
                                                <option value="LAIN-LAIN">Lain-lain</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                                <table style="width: 30%">
                                    <tr>
                                        <th style="width: 40%">
                                            <label>Pewaris</label>
                                        </th>
                                        <td>
                                            <label><input type="radio" name="pewaris" value="Ya" class="form-check-input" <?php if ($saudara->pewaris == "Ya") echo "checked" ?>>Ya</label>
                                        </td>
                                        <td>
                                            <label><input type="radio" name="pewaris" value="Tidak" class="form-check-input" <?php if ($saudara->pewaris == "Tidak") echo "checked" ?>>Tidak</label>
                                        </td>
                                    </tr>
                                </table>
                                <table style="width: 30%">
                                    <tr>
                                        <th style="width: 40%">
                                            <label>Pemegang Wasiat</label>
                                        </th>
                                        <td>
                                            <label><input type="radio" name="pemegangWasiat" value="Ya" class="form-check-input" <?php if ($saudara->pemegangWasiat == "Ya") echo "checked" ?>>Ya</label>
                                        </td>
                                        <td>
                                            <label><input type="radio" name="pemegangWasiat" value="Tidak" class="form-check-input" <?php if ($saudara->pemegangWasiat == "Tidak") echo "checked" ?>>Tidak</label>
                                        </td>
                                    </tr>
                                </table>
                                
                                <br>
                                
                                <button type="submit" class="btn btn-primary btn-block">Kemaskini Saudaara / Mara</button>
                            </form>
                            <br>
                            <button id="closeEditSaudara" class="btn btn-danger">Close</button>
                        </div>
                        @endif
    
                        <br>
    
                        @if ($saudara == false)
                        <div class="col-md-12" id="appearDaftarSaudara" style="display: none">
                            <form action="{{ route('daftarSaudara', $staff->noKPBaru) }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <h4>Carian</h4>
                                <table>
                                    <input type="hidden" name="noStaff" value="{{ $staff->noStaff }}">
                                    <tr>
                                        <th>Carian Individu</th>
                                        <td>
                                            <input type="text" name="cariIndi" class="form-control">
                                        </td>
                                        <td>
                                            <a href="{{ route('daftarIndividu') }}" class="btn btn-primary">Daftar
                                                Individu</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Carian</th>
                                        <td>
                                            <select name="jenisCariIndi" class="form-select">
                                                <option value="Pilih satu">Pilih satu</option>
                                                <option value="No Ahli">No Ahli</option>
                                                <option value="No KP">No KP</option>
                                                <option value="No KP Lama">No KP Lama</option>
                                                <option value="Nama">Nama</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <button class="btn btn-secondary btn-block">Cari</button>
                                        </th>
                                    </tr>
                                </table>
    
                                <br>
    
                                <table style="width:30%">
                                    <tr>
                                        <th style="width: 40%">Jenis Hubungan</th>
                                        <td>
                                            <select name="jenisHubungan" class="form-select">
                                                <option value="Pilih satu">Pilih satu</option>
                                                <option value="SUAMI">Suami</option>
                                                <option value="ISTERI">Isteri</option>
                                                <option value="IBU">Ibu</option>
                                                <option value="BAPA">Bapa</option>
                                                <option value="ABANG">Abang</option>
                                                <option value="KAKAK">Kakak</option>
                                                <option value="ADIK">Adik</option>
                                                <option value="ANAK">Anak</option>
                                                <option value="BAPA SAUDARA">Bapa Saudara</option>
                                                <option value="IBU SAUDARA">Ibu Saudara</option>
                                                <option value="ANAK SAUDARA">Anak Saudara</option>
                                                <option value="SEPUPU">Sepupu</option>
                                                <option value="CUCU">Cucu</option>
                                                <option value="ABANG IPAR">Abang Ipar</option>
                                                <option value="KAKAK IPAR">Kakak Ipar</option>
                                                <option value="ADIK IPAR">Adik Ipar</option>
                                                <option value="TUNANG">Tunang</option>
                                                <option value="WAKIL WARITH">Wakil Warith</option>
                                                <option value="SAHABAT QARIB">Sahabat Qarib</option>
                                                <option value="LAIN-LAIN">Lain-lain</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                                <table style="width: 30%">
                                    <tr>
                                        <th style="width: 40%">
                                            <label>Pewaris</label>
                                        </th>
                                        <td>
                                            <label><input type="radio" name="pewaris" value="Ya" class="form-check-input">Ya</label>
                                        </td>
                                        <td>
                                            <label><input type="radio" name="pewaris" value="Tidak" class="form-check-input">Tidak</label>
                                        </td>
                                    </tr>
                                </table>
                                <table style="width: 30%">
                                    <tr>
                                        <th style="width: 40%">
                                            <label>Pemegang Wasiat</label>
                                        </th>
                                        <td>
                                            <label><input type="radio" name="pemegangWasiat" value="Ya" class="form-check-input">Ya</label>
                                        </td>
                                        <td>
                                            <label><input type="radio" name="pemegangWasiat" value="Tidak" class="form-check-input">Tidak</label>
                                        </td>
                                    </tr>
                                </table>
                                
                                <br>
                                
                                <button type="submit" class="btn btn-primary btn-block">Daftar Saudara / Mara</button>
                            </form>
                            <br>
                            <button id="closeDaftarSaudara" class="btn btn-danger">Close</button>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Scripts -->
    <script type="text/javascript">
        $("#btn_alamat").click(
            function() {
                $("#appearAlamat").show();
            }
        );

        $("#edit_alamat").click(
            function() {
                $("#appearEditAlamat").show();
            }
        );

        $("#daftar_alamat").click(
            function() {
                $("#appearDaftarAlamat").show();
            }
        );

        $("#btn_perhubungan").click(
            function() {
                $("#appear_perhubungan").show();
            }
        );

        $("#edit_telR").click(
            function() {
                $("#appearEditTelR").show();
            }
        );

        $("#edit_telP").click(
            function() {
                $("#appearEditTelP").show();
            }
        );

        $("#edit_telHP").click(
            function() {
                $("#appearEditTelHP").show();
            }
        );

        $("#edit_faks").click(
            function() {
                $("#appearEditFaks").show();
            }
        );

        $("#edit_email").click(
            function() {
                $("#appearEditEmail").show();
            }
        );

        $("#btn_bank").click(
            function() {
                $("#appear_bank").show();
            }
        );

        $("#edit_bank").click(
            function() {
                $("#appearEditBank").show();
            }
        );

        $("#daftar_bank").click(
            function() {
                $("#appearDaftarBank").show();
            }
        );

        $("#btn_pendidikan").click(
            function() {
                $("#appear_pendidikan").show();
            }
        );

        $("#edit_pendidikan").click(
            function() {
                $("#appearEditPendidikan").show();
            }
        );

        $("#daftar_pendidikan").click(
            function() {
                $("#appearDaftarPendidikan").show();
            }
        );

        $("#btn_saudara").click(
            function() {
                $("#appear_saudara").show();
            }
        );

        $("#edit_saudara").click(
            function() {
                $("#appearEditSaudara").show();
            }
        );

        $("#daftar_saudara").click(
            function() {
                $("#appearDaftarSaudara").show();
            }
        );

        $("#closeAlamat").click(
            function() {
                $("#appearAlamat").hide();
            }
        );

        $("#closeEditAlamat").click(
            function() {
                $("#appearEditAlamat").hide();
            }
        );

        $("#closeDaftarAlamat").click(
            function() {
                $("#appearDaftarAlamat").hide();
            }
        );

        $("#close_perhubungan").click(
            function() {
                $("#appear_perhubungan").hide();
            }
        );

        $("#closeEditTelR").click(
            function() {
                $("#appearEditTelR").hide();
            }
        );

        $("#closeEditTelP").click(
            function() {
                $("#appearEditTelP").hide();
            }
        );

        $("#closeEditTelHP").click(
            function() {
                $("#appearEditTelHP").hide();
            }
        );

        $("#closeEditFaks").click(
            function() {
                $("#appearEditFaks").hide();
            }
        );

        $("#closeEditEmail").click(
            function() {
                $("#appearEditEmail").hide();
            }
        );

        $("#close_bank").click(
            function() {
                $("#appear_bank").hide();
            }
        );

        $("#closeEditBank").click(
            function() {
                $("#appearEditBank").hide();
            }
        );

        $("#closeDaftarBank").click(
            function() {
                $("#appearDaftarBank").hide();
            }
        );

        $("#close_pendidikan").click(
            function() {
                $("#appear_pendidikan").hide();
            }
        );

        $("#closeEditPendidikan").click(
            function() {
                $("#appearEditPendidikan").hide();
            }
        );

        $("#closeDaftarPendidikan").click(
            function() {
                $("#appearDaftarPendidikan").hide();
            }
        );

        $("#closeSaudara").click(
            function() {
                $("#appear_saudara").hide();
            }
        );

        $("#closeEditSaudara").click(
            function() {
                $("#appearEditSaudara").hide();
            }
        );

        $("#closeDaftarSaudara").click(
            function() {
                $("#appearDaftarSaudara").hide();
            }
        );
    </script>

    <script src="{{ asset('public/js/app.js') }}" defer></script>
    </div>
</body>
