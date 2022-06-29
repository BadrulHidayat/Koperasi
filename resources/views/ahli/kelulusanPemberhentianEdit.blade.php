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
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ahli</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('maklumatAhli') }}">Maklumat Ahli</a>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Pendaftaran
                                        {{-- &raquo; --}}</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('daftarAhli') }}">Daftar Ahli</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('daftarYuran') }}">Yuran
                                                Pendaftaran</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item dropdown-toggle" href="#">Pemberhentian</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('daftarBerhenti') }}">Daftar
                                                Berhenti</a></li>
                                        <li><a class="dropdown-item" href="{{ route('maklumatBerhenti') }}">Maklumat
                                                Berhenti</a></li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('kelulusanPemberhentian') }}">Kemaskini Kelulusan
                                                Pemberhentian</a></li>
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
                                <li><a class="dropdown-item" href="{{ route('daftarKakitangan') }}">Daftar
                                        Kakitangan</a></li>
                                <li><a class="dropdown-item" href="{{ route('maklumatStaff') }}">Maklumat
                                        Kakitangan</a></li>
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
        <div class="col-md-10">
            <h2>Koperasi - Kemaskini Kelulusan Pemberhentian</h2>

            <div class="card">
                <div class="card-body">
                    <h4>Kemaskini Status Anggota Berhenti</h4>
                    <hr>
                    <form action="{{ route('lulusBerhentiCari') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table>
                            <tr>
                                <th>
                                    <label for="carian">No Anggota</label>
                                </th>
                                <td>
                                    <input type="text" name="carian" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="submit" class="btn btn-secondary">Cari</button>
                                </td>
                            </tr>
                        </table>
                    </form>

                    <br><br>
                    
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Kemaskini</th>
                                <th>No Ahli</th>
                                <th>Nama</th>
                                <th>No KP Baru</th>
                                <th>No KP Lama</th>
                                <th>Tarikh Mohon</th>
                                <th>Sebab Berhenti</th>
                                <th>Nota Berhenti</th>
                                <th>Status Pemberhentian</th>
                                
                            </tr>
                            <tr>
                                <td><button class="btn btn-secondary btn-block" id="btn_edit">Kemaskini</button></td>
                                <td>{{ $ahli->noAhli }}</td>
                                <td>{{ $ahli->nama }}</td>
                                <td>{{ $ahli->noKPBaru }}</td>
                                <td>{{ $ahli->noKPLama}}</td>
                                <td>{{ $ahli->tarikhMohon }}</td>
                                <td>{{ $ahli->statusBerhenti }}</td>
                                <td>{{ $ahli->sebabBerhenti }}</td>

                                <form action="{{ route('kelulusanPemberhentianUpdate', $ahli->noKPBaru) }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <td>
                                    <select name="statusKelulusan" class="form-select">
                                        <option value="{{ $ahli->statusKelulusan }}">{{ $ahli->statusKelulusan }}
                                        </option>
                                        <option value="Belum Diluluskan">Belum Diluluskan</option>
                                        <option value="Telah Diluluskan">Telah Diluluskan</option>
                                        <option value="Telah Dibatalkan">Telah Dibatalkan</option>
                                        <option value="Telah Diluluskan Dengan Penyegeraan">Telah Diluluskan Dengan Penyegeraan</option>
                                        <option value="Tidak Diluluskan">Tidak Diluluskan</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <div class="col-md-8" id="appearEdit" style="display: none">
                            <table>
                                <tr>
                                    <th>
                                        <label for="tarikhLulus">Tarikh Lulus</label>
                                    </th>
                                    <td>
                                        <input type="date" name="tarikhLulus" class="form-control"
                                            value="{{ $ahli->tarikhLulus }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <label for="tarikhBerhenti">Tarikh Berhenti</label>
                                    </th>
                                    <td>
                                        <input type="date" name="tarikhBerhenti" class="form-control"
                                            value="{{ $ahli->tarikhBerhenti }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="2">
                                        <button type="submit" class="btn btn-secondary">Simpan</button>
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>

                <script>
                    $("#btn_edit").click(
                        function() {
                            $("#appearEdit").show();
                        }
                    );
                </script>

                <!-- Scripts -->
                <script src="{{ asset('public/js/app.js') }}" defer></script>
            </div>
        </div>
    </div>
    </div>
</body>
