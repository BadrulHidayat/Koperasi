<?php

namespace App\Http\Controllers;

use App\Models\syarikat_daftars;
use App\Models\syarikat_alamats;
use App\Models\syarikat_perhubungan;

use Illuminate\Http\Request;

class SyarikatController extends Controller
{
    //daftar syarikat
    public function daftarSyarikat()
    {
        return view('syarikat.daftarSyarikat');
    }

    public function pengesahanSyarikat()
    {
        $nama_jabatan = $_POST['nama_jabatan'];
        $kod_jabatan = $_POST['kod_jabatan'];
        $ketua_jabatan = $_POST['ketua_jabatan'];
        $maklumat_jabatan = $_POST['maklumat_jabatan'];
        $kategori = $_POST['kategori'];

        $alamat = $_POST['alamat'];
        $poskod = $_POST['poskod'];
        $daerah = $_POST['daerah'];
        $negeri = $_POST['negeri'];
        $jenis_alamat = $_POST['jenis_alamat'];

        $tel_R = $_POST['tel_R'];
        $tel_P = $_POST['tel_P'];
        $tel_HP = $_POST['tel_HP'];
        $tel_HP_type = $_POST['tel_HP_type'];
        $faks = $_POST['faks'];
        $email = $_POST['email'];

        return view('syarikat.pengesahanSyarikat', [
            "nama_jabatan" => $nama_jabatan,
            "kod_jabatan" => $kod_jabatan,
            "ketua_jabatan" => $ketua_jabatan,
            "maklumat_jabatan" => $maklumat_jabatan,
            "kategori" => $kategori,
            "alamat" => $alamat,
            "poskod" => $poskod,
            "daerah" => $daerah,
            "negeri" => $negeri,
            "jenis_alamat" => $jenis_alamat,
            "tel_R" => $tel_R,
            "tel_P" => $tel_P,
            "tel_HP" => $tel_HP,
            "tel_HP_type" => $tel_HP_type,
            "faks" => $faks,
            "email" => $email
        ]);
    }


    public function storeSyarikat(Request $request)
    {
        $this->validate($request, [
            'nama_jabatan' => 'required',
            'kategori' => 'required',
        ]);

        $daftar = new syarikat_daftars;
        
        $daftar->nama_jabatan = $request->nama_jabatan;
        $daftar->kod_jabatan = $request->kod_jabatan;
        $daftar->ketua_jabatan = $request->ketua_jabatan;
        $daftar->maklumat_jabatan = $request->maklumat_jabatan;
        $daftar->kategori = $request->kategori;

        $daftar->save();


        $daftarAlamat = new syarikat_alamats;

        $daftarAlamat->alamat = $request->alamat;
        $daftarAlamat->poskod = $request->poskod;
        $daftarAlamat->daerah = $request->daerah;
        $daftarAlamat->negeri = $request->negeri;
        $daftarAlamat->jenis_alamat = $request->jenis_alamat;

        $daftarAlamat->save();


        $daftarPerhubungan = new syarikat_perhubungan;

        $daftarPerhubungan->tel_R = $request->tel_R;
        $daftarPerhubungan->tel_P = $request->tel_P;
        $daftarPerhubungan->tel_HP = $request->tel_HP;
        $daftarPerhubungan->tel_HP_type = $request->tel_HP_type;
        $daftarPerhubungan->faks = $request->faks;
        $daftarPerhubungan->email = $request->email;

        $daftarPerhubungan->save();

        $nama = $_POST['nama_jabatan'];
        //return view('syarikat.pengesahanSyarikat2', ["nama" => $nama]);
        return redirect()->route('pengesahanSyarikat2',["nama" => $nama]);
        
    }

    public function pengesahanSyarikat2($nama)
    {
        return view('syarikat.pengesahanSyarikat2',["nama" => $nama]);
    }

    public function maklumatSyarikat()
    {
        return view('syarikat.maklumatSyarikat');
    }

    public function carianSyarikat()
    {
        $search = $_POST['search'];
        $search_type = $_POST['query'];

        $syarikat = syarikat_daftars::where($search_type, 'LIKE', '%' . $search . '%')->get();
        return view('syarikat.maklumatSyarikat2', compact('syarikat'));
    }


    //delete maklumat syarikat
    public function maklumatSyarikatDelete($id)
    {
        $syarikat = syarikat_daftars::find($id);
        $syarikat->delete();
        return redirect()->route('home');
    }

    public function maklumatSyarikatEdit($id)
    {
        $syarikat = syarikat_daftars::find($id);
        $syarikatAlamat = syarikat_alamats::find($id);
        $syarikatPerhubungan = syarikat_perhubungan::find($id);
        return view('syarikat.maklumatSyarikatEdit',compact('syarikat','syarikatAlamat','syarikatPerhubungan'));
    }

    //update maklumat syarikat
    public function maklumatSyarikatUpdate(Request $request,$id)
    {
        $syarikat = syarikat_daftars::find($id);

        $syarikat->nama_jabatan = $request->nama_jabatan;
        $syarikat->kod_jabatan = $request->kod_jabatan;
        $syarikat->ketua_jabatan = $request->ketua_jabatan;
        $syarikat->maklumat_jabatan = $request->maklumat_jabatan;
        $syarikat->kategori = $request->kategori;

        $syarikat->save();

        return redirect()->route('maklumatSyarikatEdit',$id);
    }

    public function alamatSyarikatUpdate(Request $request,$id)
    {
        $syarikatAlamat = syarikat_alamats::find($id);

        $syarikatAlamat->alamat = $request->alamat;
        $syarikatAlamat->poskod = $request->poskod;
        $syarikatAlamat->daerah = $request->daerah;
        $syarikatAlamat->negeri = $request->negeri;
        $syarikatAlamat->jenis_alamat = $request->jenis_alamat;

        $syarikatAlamat->save();

        return redirect()->route('maklumatSyarikatEdit',$id);
    }

    //alamat Delete
    public function alamatSyarikatDelete(Request $request,$id)
    {
        $syarikatAlamat = syarikat_alamats::find($id);
        $syarikatAlamat->delete();
        return redirect()->route('maklumatSyarikatEdit',$id);
    }

    //tel HP update
    public function tel_HP_update(Request $request,$id)
    {
        $syarikatPerhubungan = syarikat_perhubungan::find($id);
        $syarikatPerhubungan->tel_HP = $request->tel_HP;
        $syarikatPerhubungan->tel_HP_type = $request->tel_HP_type;

        $syarikatPerhubungan->save();
        return redirect()->route('maklumatSyarikatEdit',$id);
    }

    //tel HP delete
    public function tel_HP_delete(Request $request,$id)
    {
        $syarikatPerhubungan = syarikat_perhubungan::find($id);
        $tel_HP_reset=" ";
        $syarikatPerhubungan->tel_HP = $request->$tel_HP_reset;
        $syarikatPerhubungan->tel_HP_type = $request->$tel_HP_reset;
        $syarikatPerhubungan->save();
        return redirect()->route('maklumatSyarikatEdit',$id);
    }


    //tel R update
    public function tel_R_update(Request $request,$id)
    {
        $syarikatPerhubungan = syarikat_perhubungan::find($id);
        $syarikatPerhubungan->tel_R = $request->tel_R;

        $syarikatPerhubungan->save();
        return redirect()->route('maklumatSyarikatEdit',$id);
    }

    //tel R delete
    public function tel_R_delete(Request $request,$id)
    {
        $syarikatPerhubungan = syarikat_perhubungan::find($id);
        $tel_R_reset=" ";
        $syarikatPerhubungan->tel_R = $request->$tel_R_reset;
        $syarikatPerhubungan->save();
        return redirect()->route('maklumatSyarikatEdit',$id);
    }


    //tel P update
    public function tel_P_update(Request $request,$id)
    {
        $syarikatPerhubungan = syarikat_perhubungan::find($id);
        $syarikatPerhubungan->tel_P = $request->tel_P;

        $syarikatPerhubungan->save();
        return redirect()->route('maklumatSyarikatEdit',$id);
    }

    //tel P delete
    public function tel_P_delete(Request $request,$id)
    {
        $syarikatPerhubungan = syarikat_perhubungan::find($id);
        $tel_P_reset=" ";
        $syarikatPerhubungan->tel_P = $request->$tel_P_reset;
        $syarikatPerhubungan->save();
        return redirect()->route('maklumatSyarikatEdit',$id);
    }

    //faks update
    public function faks_update(Request $request,$id)
    {
        $syarikatPerhubungan = syarikat_perhubungan::find($id);
        $syarikatPerhubungan->faks = $request->faks;

        $syarikatPerhubungan->save();
        return redirect()->route('maklumatSyarikatEdit',$id);
    }

    //faks delete
    public function faks_delete(Request $request,$id)
    {
        $syarikatPerhubungan = syarikat_perhubungan::find($id);
        $reset=" ";
        $syarikatPerhubungan->faks = $request->$reset;
        $syarikatPerhubungan->save();
        return redirect()->route('maklumatSyarikatEdit',$id);
    }

    //email update
    public function email_update(Request $request,$id)
    {
        $syarikatPerhubungan = syarikat_perhubungan::find($id);
        $syarikatPerhubungan->email = $request->email;

        $syarikatPerhubungan->save();
        return redirect()->route('maklumatSyarikatEdit',$id);
    }

    public function email_delete(Request $request,$id)
    {
        $syarikatPerhubungan = syarikat_perhubungan::find($id);
        $reset=" ";
        $syarikatPerhubungan->email = $request->$reset;
        $syarikatPerhubungan->save();
        return redirect()->route('maklumatSyarikatEdit',$id);
    }


    //12.5.2022
    //daftar alamat
    public function daftarAlamatSyarikat(Request $request,$id)
    {
        $daftarAlamat = new syarikat_alamats;

        $daftarAlamat->id = $request->id;
        $daftarAlamat->alamat = $request->alamat;
        $daftarAlamat->poskod = $request->poskod;
        $daftarAlamat->daerah = $request->daerah;
        $daftarAlamat->negeri = $request->negeri;
        $daftarAlamat->jenis_alamat = $request->jenis_alamat;

        $daftarAlamat->save();

        return redirect()->route('maklumatSyarikatEdit',$id);
    }
}
