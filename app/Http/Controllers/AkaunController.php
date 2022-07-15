<?php

namespace App\Http\Controllers;

use App\Models\ahli_daftar;
use Illuminate\Http\Request;

class AkaunController extends Controller
{
    public function daftarYuran()
    {
        return view('akaun.daftarYuran');
    }

    public function cariAhliYuran()
    {
        $carian = $_POST['carian'];
        $jenisCarian = $_POST['jenisCarian'];

        $ahli = ahli_daftar::where($jenisCarian, 'LIKE', '%' . $carian . '%')->get();

        return view('akaun.daftarYuran2', compact('ahli'));
    }

    public function daftarYuran2()
    {
        $carian = $_POST['carian'];
        $jenisCarian = $_POST['jenisCarian'];

        $ahli = ahli_daftar::where($jenisCarian, 'LIKE', '%' . $carian . '%')->get();

        return view('akaun.daftarYuran2', compact('ahli'));
    }

    public function transaksiJenis()
    {
        return view('akaun.transaksiJenis');
    }

    public function transaksiTarikh()
    {
        return view('akaun.transaksiTarikh');
    }

    public function transaksiMasuk()
    {
        return view('akaun.transaksiMasuk');
    }
}
