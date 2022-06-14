<?php

namespace App\Http\Controllers;

use App\Models\individu_daftar;
use App\Models\individu_alamat;
use App\Models\individu_perhubungan;
use App\Models\individu_akaun;
use Illuminate\Http\Request;

class IndividuController extends Controller
{
    public function daftarIndividu()
    {
        return view('individu.daftarIndividu');
    }

    public function pengesahanIndividu()
    {
        $nama = $_POST['nama'];
        $noKP = $_POST['noKP'];
        $noKPlama = $_POST['noKPlama'];
        $jantina = $_POST['jantina'];
        $tarikh_lahir = $_POST['tarikh_lahir'];
        $tempat_lahir = $_POST['tempat_lahir'];

        return view('individu.pengesahanIndividu', [
            "nama" => $nama,
            "noKP" => $noKP,
            "noKPlama" => $noKPlama,
            "jantina" => $jantina,
            "tarikh_lahir" => $tarikh_lahir,
            "tempat_lahir" => $tempat_lahir
        ]);
    }

    public function storeIndividu(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'noKP' => 'required',
            'jantina' => 'required',
            'tarikh_lahir' => 'required',
            'tempat_lahir' => 'required'
        ]);

        $daftar = new individu_daftar;

        $daftar->nama = $request->nama;
        $daftar->noKP = $request->noKP;
        $daftar->jantina = $request->jantina;
        $daftar->tarikh_lahir = $request->tarikh_lahir;
        $daftar->tempat_lahir = $request->tempat_lahir;

        $daftar->save();

        $nama = $_POST['nama'];
        $noKP = $_POST['noKP'];

        return view('individu.pengesahanIndividu2', [
            "nama" => $nama,
            "noKP" => $noKP,
        ]);
    }

    public function daftarIndividu2()
    {
        return view('individu.daftarIndividu2', compact('individu'));
    }

    //maklumat individu
    public function maklumatIndividu()
    {
        return view('individu.maklumatIndividu');
    }

    //search individu data
    public function carianIndividu()
    {
        $search = $_POST['search'];
        $search_type = $_POST['query'];

        $individu = individu_daftar::where($search_type, 'LIKE', '%' . $search . '%')->get();
        return view('individu.maklumatIndividu2', compact('individu'));
    }

    //display all individu data
    public function displayIndividu()
    {
        $individu = individu_daftar::all();

        return view('individu.displayIndividu', compact('individu'));
    }

    //delete maklumat individu
    public function maklumatIndividuDelete($id)
    {
        $individu = individu_daftar::find($id);
        $individu->delete();
        return redirect()->route('home');
    }

    //edit maklumat individu
    public function maklumatIndividuEdit($id)
    {
        $individu = individu_daftar::find($id);
        $individuAlamat = individu_alamat::find($id);
        $individuPerhubungan = individu_perhubungan::find($id);
        $individuAkaun = individu_akaun::find($id);
        return view('individu.maklumatIndividuEdit',compact('individu','individuAlamat','individuPerhubungan','individuAkaun'));
    }

    //update maklumat individu
    public function maklumatIndividuUpdate(Request $request,$id)
    {
        $individu = individu_daftar::find($id);

        $individu->nama = $request->nama;
        $individu->noKP = $request->noKP;
        $individu->jantina = $request->jantina;
        $individu->tarikh_lahir = $request->tarikh_lahir;
        $individu->tempat_lahir = $request->tempat_lahir;

        $individu->save();

        return redirect()->route('home');
    }


    //maklumat individu alamat
    public function maklumatIndividuAlamat(Request $request,$id)
    {
        $individuAlamat = new individu_alamat;
        $individuAlamat->id = $request->id;
        $individuAlamat->noKP = $request->noKP;
        $individuAlamat->alamat = $request->alamat;
        $individuAlamat->poskod = $request->poskod;
        $individuAlamat->daerah = $request->daerah;
        $individuAlamat->negeri = $request->negeri;
        $individuAlamat->jenis_alamat = $request->jenis_alamat;
        
        $individuAlamat->save();

        return redirect()->route('maklumatIndividuEdit',$id);
    }

    //maklumat individu perhubungan
    public function maklumatIndividuPerhubungan(Request $request,$id)
    {
        $individuPerhubungan = new individu_perhubungan;
        $individuPerhubungan->id = $request->id;
        $individuPerhubungan->noKP = $request->noKP;
        $individuPerhubungan->jenis_maklumat = $request->jenis_maklumat;
        $individuPerhubungan->maklumat_perhubungan = $request->maklumat_perhubungan;

        $individuPerhubungan->save();

        return redirect()->route('maklumatIndividuEdit',$id);
    }


    //maklumat individu akaun
    public function maklumatIndividuAkaun(Request $request,$id)
    {
        $individuAkaun = new individu_akaun;
        $individuAkaun->id = $request->id;
        $individuAkaun->noKP = $request->noKP;
        $individuAkaun->no_akaun = $request->no_akaun;
        $individuAkaun->jenis_akaun = $request->jenis_akaun;

        $individuAkaun->save();

        return redirect()->route('maklumatIndividuEdit',$id);

    }

    //update alamat individu
    public function alamatIndividuUpdate(Request $request,$id)
    {
        $individuAlamat = individu_alamat::find($id);
        $individuAlamat->alamat = $request->alamat;
        $individuAlamat->poskod = $request->poskod;
        $individuAlamat->daerah = $request->daerah;
        $individuAlamat->negeri = $request->negeri;
        $individuAlamat->jenis_alamat = $request->jenis_alamat;
        
        $individuAlamat->save();

        return redirect()->route('maklumatIndividuEdit',$id);
    }

    //update perhubungan individu
    public function perhubunganIndividuUpdate(Request $request,$id)
    {
        $individuPerhubungan = individu_perhubungan::find($id);
        $individuPerhubungan->jenis_maklumat = $request->jenis_maklumat;
        $individuPerhubungan->maklumat_perhubungan = $request->maklumat_perhubungan;

        $individuPerhubungan->save();

        return redirect()->route('maklumatIndividuEdit',$id);
    }

    //update akaun individu
    public function akaunIndividuUpdate(Request $request,$id)
    {
        $individuAkaun = individu_akaun::find($id);
        $individuAkaun->no_akaun = $request->no_akaun;
        $individuAkaun->jenis_akaun = $request->jenis_akaun;

        $individuAkaun->save();

        return redirect()->route('maklumatIndividuEdit',$id);
    }

    //delete alamat individu
    public function alamatIndividuDelete($id)
    {
        $individuAlamat = individu_alamat::find($id);
        $individuAlamat->delete();
        return redirect()->route('maklumatIndividuEdit',$id);
    }

    //delete perhubungan individu
    public function perhubunganIndividuDelete($id)
    {
        $individuPerhubungan = individu_perhubungan::find($id);
        $individuPerhubungan->delete();
        return redirect()->route('maklumatIndividuEdit',$id);
    }

    //delete akaun individu
    public function akaunIndividuDelete($id)
    {
        $individuAkaun = individu_akaun::find($id);
        $individuAkaun->delete();
        return redirect()->route('maklumatIndividuEdit',$id);
    }


}
