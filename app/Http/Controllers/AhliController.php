<?php

namespace App\Http\Controllers;

use App\Models\ahli_daftar;
use App\Models\ahli_alamat;
use App\Models\ahli_bank;
use App\Models\ahli_berhenti;
use App\Models\ahli_perhubungan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AhliController extends Controller
{
    public function daftarAhli()
    {
        return view('ahli.daftarAhli');
    }

    public function pengesahanAhli()
    {
        //error_reporting(E_ALL ^ E_WARNING || E_NOTICE);
        if (
            isset($_POST['statusAhli']) ||  isset($_POST['noAhli']) || isset($_POST['tarikhDaftar']) || isset($_POST['nama']) ||
            isset($_POST['noKPBaru']) || isset($_POST['jantina']) || isset($_POST['bangsa']) || isset($_POST['agama']) ||
            isset($_POST['tarikhLahir']) || isset($_POST['tempatLahir']) || isset($_POST['caraPembayaran']) ||
            isset($_POST['alamat']) || isset($_POST['poskod']) || isset($_POST['bandar']) || isset($_POST['negeri']) ||
            isset($_POST['jenisAlamat']) || isset($_POST['telHP']) || isset($_POST['email']) || isset($_POST['noAkaunBank']) ||
            isset($_POST['jenisBank']) || isset($_POST['jawatan']) || isset($_POST['tarikhMulaKerja']) ||
            isset($_POST['noGaji']) || isset($_POST['Gaji']) || isset($_POST['potongan'])
        ) {

            $statusAhli = $_POST['statusAhli'];
            $noAhliTerkini = $_POST['noAhliTerkini'];
            $noAhli = $_POST['noAhli'];
            $tarikhDaftar = $_POST['tarikhDaftar'];
            $nama = $_POST['nama'];
            $noKPBaru = $_POST['noKPBaru'];
            $noKPLama = $_POST['noKPLama'];
            $jantina = $_POST['jantina'];
            $bangsa = $_POST['bangsa'];
            $agama = $_POST['agama'];
            $tarikhLahir = $_POST['tarikhLahir'];
            $tempatLahir = $_POST['tempatLahir'];
            $caraPembayaran = $_POST['caraPembayaran'];
            $alamat = $_POST['alamat'];
            $poskod = $_POST['poskod'];
            $bandar = $_POST['bandar'];
            $negeri = $_POST['negeri'];
            $jenisAlamat = $_POST['jenisAlamat'];
            $telRumah = $_POST['telRumah'];
            $telPejabat = $_POST['telPejabat'];
            $telHP = $_POST['telHP'];
            $faks = $_POST['faks'];
            $email = $_POST['email'];
            $noAkaunBank = $_POST['noAkaunBank'];
            $jenisBank = $_POST['jenisBank'];
            $carianPejabat = $_POST['carianPejabat'];
            $jenisCarianPejabat = $_POST['jenisCarianPejabat'];
            $carianPembayarGaji = $_POST['carianPembayarGaji'];
            $jenisCarianPembayarGaji = $_POST['jenisCarianPembayarGaji'];
            $jawatan = $_POST['jawatan'];
            $tarikMulaKerja = $_POST['tarikhMulaKerja'];
            $noGaji = $_POST['noGaji'];
            $Gaji = $_POST['Gaji'];
            $potongan = $_POST['potongan'];
            $perakuan = $_POST['perakuan'];

            return view('ahli.pengesahanAhli', [
                "statusAhli" => $statusAhli,
                "noAhliTerkini" => $noAhliTerkini,
                "noAhli" => $noAhli,
                "tarikhDaftar" => $tarikhDaftar,
                "nama" => $nama,
                "noKPLama" => $noKPLama,
                "noKPBaru" => $noKPBaru,
                "jantina" => $jantina,
                "bangsa" => $bangsa,
                "agama" => $agama,
                "tarikhLahir" => $tarikhLahir,
                "tempatLahir" => $tempatLahir,
                "caraPembayaran" => $caraPembayaran,
                "alamat" => $alamat,
                "poskod" => $poskod,
                "bandar" => $bandar,
                "negeri" => $negeri,
                "jenisAlamat" => $jenisAlamat,
                "telRumah" => $telRumah,
                "telPejabat" => $telPejabat,
                "telHP" => $telHP,
                "faks" => $faks,
                "email" => $email,
                "noAkaunBank" => $noAkaunBank,
                "jenisBank" => $jenisBank,
                "carianPejabat" => $carianPejabat,
                "carianPembayarGaji" => $carianPembayarGaji,
                "jenisCarianPejabat" => $jenisCarianPejabat,
                "jenisCarianPembayarGaji" => $jenisCarianPembayarGaji,
                "jawatan" => $jawatan,
                "tarikhMulaKerja" => $tarikMulaKerja,
                "noGaji" => $noGaji,
                "Gaji" => $Gaji,
                "potongan" => $potongan,
                "perakuan" => $perakuan,
            ]);
        }
    }

    public function simpanAhli(Request $request)
    {
        $this->validate($request, [
            'statusAhli' => 'required',
            'noAhli' => 'required',
            'tarikhDaftar' => 'required',
            'nama' => 'required',
            'noKPBaru' => 'required',
            'jantina' => 'required',
            'bangsa' => 'required',
            'agama' => 'required',
            'tarikhLahir' => 'required',
            'tempatLahir' => 'required',
            'caraPembayaran' => 'required',
            'alamat' => 'required',
            'poskod' => 'required',
            'bandar' => 'required',
            'negeri' => 'required',
            'jenisAlamat' => 'required',
            'telHP' => 'required',
            'email' => 'required',
            'noAkaunBank' => 'required',
            'jenisBank' => 'required',
            'jawatan' => 'required',
            'tarikhMulaKerja' => 'required',
            'noGaji' => 'required',
            'Gaji' => 'required',
            'potongan' => 'required',
        ]);

        $ahli = new ahli_daftar();

        $ahli->statusAhli = $request->statusAhli;
        $ahli->noAhliTerkini = $request->noAhliTerkini;
        $ahli->noAhli = $request->noAhli;
        $ahli->tarikhDaftar = $request->tarikhDaftar;
        $ahli->nama = $request->nama;
        $ahli->noKPBaru = $request->noKPBaru;
        $ahli->jantina = $request->jantina;
        $ahli->bangsa = $request->bangsa;
        $ahli->agama = $request->agama;
        $ahli->tarikhLahir = $request->tarikhLahir;
        $ahli->tempatLahir = $request->tempatLahir;
        $ahli->caraPembayaran = $request->caraPembayaran;
        $ahli->jawatan = $request->jawatan;
        $ahli->tarikhMulaKerja = $request->tarikhMulaKerja;
        $ahli->noGaji = $request->noGaji;
        $ahli->Gaji = $request->Gaji;
        $ahli->potongan = $request->potongan;
        $ahli->perakuan = $request->perakuan;
        $ahli->user_id = Auth::user()->id;

        $alamat = new ahli_alamat();

        $alamat->noAhli = $request->noAhli;
        $alamat->alamat = $request->alamat;
        $alamat->poskod = $request->poskod;
        $alamat->bandar = $request->bandar;
        $alamat->negeri = $request->negeri;
        $alamat->jenisAlamat = $request->jenisAlamat;
        $alamat->noKPBaru = $request->noKPBaru;
        $alamat->user_id = Auth::user()->id;

        $bank = new ahli_bank();

        $bank->noAhli = $request->noAhli;
        $bank->noAkaunBank = $request->noAkaunBank;
        $bank->jenisBank = $request->jenisBank;
        $bank->noKPBaru = $request->noKPBaru;
        $bank->user_id = Auth::user()->id;

        $noTelefon = new ahli_perhubungan();

        $noTelefon->noAhli = $request->noAhli;
        $noTelefon->telRumah = $request->telRumah;
        $noTelefon->telPejabat = $request->telPejabat;
        $noTelefon->telHP = $request->telHP;
        $noTelefon->faks = $request->faks;
        $noTelefon->email = $request->email;
        $noTelefon->noKPBaru = $request->noKPBaru;
        $noTelefon->user_id = Auth::user()->id;

        $ahli->save();
        $alamat->save();
        $bank->save();
        $noTelefon->save();

        $noAhli = $_POST['noAhli'];
        $nama = $_POST['nama'];
        $noKPBaru = $_POST['noKPBaru'];
        $tarikhDaftar = $_POST['tarikhDaftar'];

        return view('ahli.statusDaftar', [
            "noAhli" => $noAhli,
            "nama" => $nama,
            "noKPBaru" => $noKPBaru,
            "tarikhDaftar" => $tarikhDaftar,
        ]);
    }

    public function statusDaftar()
    {
    }

    public function maklumatAhli()
    {
        return view('ahli.maklumatAhli');
    }

    public function maklumatAhliCari()
    {
        $carian = $_POST['carian'];
        $jenisCarian = $_POST['jenisCarian'];

        $ahli = ahli_daftar::where($jenisCarian, 'LIKE', '%' . $carian . '%')->get();
        
        return view('ahli.maklumatAhli2', compact('ahli'));
    }

    public function maklumatAhliHasil($noKPBaru)
    {
        $ahli = ahli_daftar::where("noKPBaru", $noKPBaru)->first();
        $alamat = ahli_alamat::where("noKPBaru", $noKPBaru)->first();
        $bank = ahli_bank::where("noKPBaru", $noKPBaru)->first();
        $noTelefon = ahli_perhubungan::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil', compact('ahli', 'alamat', 'bank', 'noTelefon'));
    }

    public function maklumatAhliKemaskini(Request $request, $noKPBaru)
    {
        $ahli = ahli_daftar::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliKemaskini', compact('ahli'));
    }

    public function kemaskiniAhli(Request $request, $noKPBaru)
    {
        $ahli = ahli_daftar::where("noKPBaru", $noKPBaru)->first();

        $ahli->statusAhli = $request->statusAhli;
        $ahli->noAhliTerkini = $request->noAhliTerkini;
        $ahli->noAhli = $request->noAhli;
        $ahli->tarikhDaftar = $request->tarikhDaftar;
        $ahli->nama = $request->nama;
        $ahli->noKPBaru = $request->noKPBaru;
        $ahli->jantina = $request->jantina;
        $ahli->bangsa = $request->bangsa;
        $ahli->agama = $request->agama;
        $ahli->tarikhLahir = $request->tarikhLahir;
        $ahli->tempatLahir = $request->tempatLahir;
        $ahli->caraPembayaran = $request->caraPembayaran;
        $ahli->carianPejabat = $request->carianPejabat;
        $ahli->carianPembayarGaji = $request->carianPembayarGaji;
        $ahli->jawatan = $request->jawatan;
        $ahli->tarikhMulaKerja = $request->tarikhMulaKerja;
        $ahli->noGaji = $request->noGaji;
        $ahli->Gaji = $request->Gaji;
        $ahli->potongan = $request->potongan;
        $ahli->perakuan = $request->perakuan;

        $ahli->save();

        $alamat = ahli_alamat::where("noKPBaru", $noKPBaru)->first();
        $bank = ahli_bank::where("noKPBaru", $noKPBaru)->first();
        $noTelefon = ahli_perhubungan::where("noKPBaru", $noKPBaru)->first();

        //$message = "Kemaskini Berjaya";

        //return redirect()->route('maklumatAhliHasil', compact('ahli'))->with(['message' => 'Kemaskini Berjaya.']);

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'));


    }

    public function padamAlamat($id)
    {
        //$ahli = ahli_daftar::select('select'.$jenisAlamat,$alamat.'from ahli_daftars where id = ?',[$id]);
        //$ahli = ahli_daftar::where("id", $id);
        //$ahli = ahli_daftar::find($id);
        //$ahli_daftars = $ahli->select('select jenisAlamat, alamat from ahli_daftars');
        //$ahli_daftars->delete();
        //return redirect()->route('maklumatAhliHasil');

        /*$ahli = DB::table('ahli_daftars')
        ->select('select jenisAlamat, alamat, poskod, bandar, negeri from ahli_daftars')
        ->where("id", $id)->delete();*/

        $alamat = ahli_alamat::where("id", $id)->delete();

        return redirect()->route('maklumatAhli');
    }

    public function updateAlamat(Request $request, $noKPBaru)
    {
        $alamat = ahli_alamat::where('noKPBaru', $noKPBaru)->first();

        $alamat->noAhli = $request->noAhli;
        $alamat->jenisAlamat = $request->jenisAlamat;
        $alamat->alamat = $request->alamat;
        $alamat->poskod = $request->poskod;
        $alamat->bandar = $request->bandar;
        $alamat->negeri = $request->negeri;
        $alamat->noKPBaru = $request->noKPBaru;

        $alamat->save();

        $ahli = ahli_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank = ahli_bank::where("noKPBaru", $noKPBaru)->first();
        $noTelefon = ahli_perhubungan::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'));
    }

    public function daftarAlamat(Request $request, $noKPBaru)
    {
        $alamat = new ahli_alamat();

        $alamat->noAhli = $request->noAhli;
        $alamat->jenisAlamat = $request->jenisAlamat;
        $alamat->alamat = $request->alamat;
        $alamat->poskod = $request->poskod;
        $alamat->bandar = $request->bandar;
        $alamat->negeri = $request->negeri;
        $alamat->noKPBaru = $request->noKPBaru;
        $alamat->user_id = Auth::user()->id;

        $alamat->save();

        $ahli = ahli_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank = ahli_bank::where("noKPBaru", $noKPBaru)->first();
        $noTelefon = ahli_perhubungan::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'));
    }

    public function updateTelR(Request $request, $noKPBaru)
    {
        $noTelefon = ahli_perhubungan::where("noKPBaru", $noKPBaru)->first();

        $noTelefon->telRumah = $request->telRumah;

        $noTelefon->save();

        $alamat = ahli_alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank = ahli_bank::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'));
    }

    public function updateTelP(Request $request, $noKPBaru)
    {
        $noTelefon = ahli_perhubungan::where("noKPBaru", $noKPBaru)->first();

        $noTelefon->telPejabat = $request->telPejabat;

        $noTelefon->save();

        $alamat = ahli_alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank = ahli_bank::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'));
    }

    public function updateTelHP(Request $request, $noKPBaru)
    {
        $noTelefon = ahli_perhubungan::where("noKPBaru", $noKPBaru)->first();

        $noTelefon->telHP = $request->telHP;

        $noTelefon->save();

        $alamat = ahli_alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank = ahli_bank::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'));
    }

    public function updatefaks(Request $request, $noKPBaru)
    {
        $noTelefon = ahli_perhubungan::where("noKPBaru", $noKPBaru)->first();

        $noTelefon->faks = $request->faks;

        $noTelefon->save();

        $alamat = ahli_alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank = ahli_bank::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'));
    }

    public function updateEmail(Request $request, $noKPBaru)
    {
        $noTelefon = ahli_perhubungan::where("noKPBaru", $noKPBaru)->first();

        $noTelefon->email = $request->email;

        $noTelefon->save();

        $alamat = ahli_alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank = ahli_bank::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'))->with(['message' => 'Kemaskini Berjaya.']);
    }

    public function padamTelRAhli(Request $request, $noKPBaru)
    {
        $noTelefon = ahli_perhubungan::where('noKPBaru', $noKPBaru)->first();

        $reset=" ";
        $noTelefon->telRumah = $request->$reset;

        $noTelefon->save();

        $alamat = ahli_alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank = ahli_bank::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'))->with(['message' => 'Padam no telefon Pejabat Berjaya.']);
    }

    public function padamTelPAhli(Request $request, $noKPBaru)
    {
        $noTelefon = ahli_perhubungan::where('noKPBaru', $noKPBaru)->first();

        $reset=" ";
        $noTelefon->telPejabat = $request->$reset;

        $noTelefon->save();

        $alamat = ahli_alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank = ahli_bank::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'))->with(['message' => 'Padam no telefon Pejabat Berjaya.']);
    }

    public function padamTelHPAhli(Request $request, $noKPBaru)
    {
        $noTelefon = ahli_perhubungan::where('noKPBaru', $noKPBaru)->first();

        $reset=" ";
        $noTelefon->telHP = $request->$reset;

        $noTelefon->save();

        $alamat = ahli_alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank = ahli_bank::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'))->with(['message' => 'Padam no telefon Pejabat Berjaya.']);
    }

    public function padamFaksAhli(Request $request, $noKPBaru)
    {
        $noTelefon = ahli_perhubungan::where('noKPBaru', $noKPBaru)->first();

        $reset=" ";
        $noTelefon->faks = $request->$reset;

        $noTelefon->save();

        $alamat = ahli_alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank = ahli_bank::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'))->with(['message' => 'Padam no telefon Pejabat Berjaya.']);
    }

    public function padamEmailAhli(Request $request, $noKPBaru)
    {
        $noTelefon = ahli_perhubungan::where('noKPBaru', $noKPBaru)->first();

        $reset=" ";
        $noTelefon->email = $request->$reset;

        $noTelefon->save();

        $alamat = ahli_alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank = ahli_bank::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'))->with(['message' => 'Padam no telefon Pejabat Berjaya.']);
    }

    public function updateBank(Request $request, $noKPBaru)
    {
        $bank = ahli_bank::where('noKPBaru', $noKPBaru)->first();

        $bank->noAhli = $request->noAhli;
        $bank->jenisBank = $request->jenisBank;
        $bank->noAkaunBank = $request->noAkaunBank;
        $bank->noKPBaru = $request->noKPBaru;

        $bank->save();

        $alamat = ahli_alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli_daftar::where("noKPBaru", $noKPBaru)->first();
        $noTelefon = ahli_perhubungan::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'));
    }

    public function padamBankAhli($noKPBaru)
    {
        $bank = ahli_bank::where("noKPBaru", $noKPBaru)->delete();

        $alamat = ahli_alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli_daftar::where("noKPBaru", $noKPBaru)->first();
        $noTelefon = ahli_perhubungan::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'));
    }

    public function daftarBank(Request $request, $noKPBaru)
    {
        $bank = new ahli_bank();

        $bank->noAhli = $request->noAhli;
        $bank->jenisBank = $request->jenisBank;
        $bank->noAkaunBank = $request->noAkaunBank;
        $bank->noKPBaru = $request->noKPBaru;
        $bank->user_id = Auth::user()->id;

        $bank->save();

        $alamat = ahli_alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli_daftar::where("noKPBaru", $noKPBaru)->first();
        $noTelefon = ahli_perhubungan::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'));
    }

    public function daftarYuran()
    {
        return view('ahli.daftarYuran');
    }

    public function cariAhliYuran()
    {
        $carian = $_POST['carian'];
        $jenisCarian = $_POST['jenisCarian'];

        $ahli = ahli_daftar::where($jenisCarian, 'LIKE', '%' . $carian . '%')->get();

        return view('ahli.daftarYuran2', compact('ahli'));
    }

    public function daftarYuran2()
    {
        $carian = $_POST['carian'];
        $jenisCarian = $_POST['jenisCarian'];

        $ahli = ahli_daftar::where($jenisCarian, 'LIKE', '%' . $carian . '%')->get();

        return view('ahli.daftarYuran2', compact('ahli'));
    }

    public function transaksiJenis()
    {
        return view('ahli.transaksiJenis');
    }

    public function transaksiTarikh()
    {
        return view('ahli.transaksiTarikh');
    }

    public function transaksiMasuk()
    {
        return view('ahli.transaksiMasuk');
    }

    public function daftarBerhenti()
    {
        return view('ahli.daftarBerhenti');
    }

    public function cariAhliBerhenti()
    {
        $carian = $_POST['carian'];
        $jenisCarian = $_POST['jenisCarian'];

        $ahli = ahli_daftar::where($jenisCarian, 'LIKE', '%' . $carian . '%')->get();

        return view('ahli.daftarBerhenti2', compact('ahli',));
    }

    public function daftarBerhentiForm($noKPBaru)
    {
        $ahli = ahli_daftar::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.daftarBerhentiForm', compact('ahli'));
    }

    public function daftarBerhentiTambah(Request $request)
    {
        $this->validate($request, [
            'noKPBaru' => 'required',
            'tarikhMohon' => 'required',
            'statusBerhenti' => 'required',
        ]);

        $berhenti = new ahli_berhenti();

        $berhenti->noAhli = $request->noAhli;
        $berhenti->noKPBaru = $request->noKPBaru;
        $berhenti->tarikhMohon = $request->tarikhMohon;
        $berhenti->statusBerhenti = $request->statusBerhenti;
        $berhenti->sebabBerhenti = $request->sebabBerhenti;
        $berhenti->user_id = Auth::user()->id;

        $berhenti->save();

        return redirect()->route('daftarBerhenti')->with(['message' => 'Pendaftaran Berjaya.']);
    }

    public function maklumatBerhenti()
    {
        return view('ahli.maklumatBerhenti');
    }

    public function cariMaklumatBerhenti()
    {
        $carian = $_POST['carian'];
        $jenisCarian = $_POST['jenisCarian'];

        //$ahli = ahli::where($jenisCarian, 'LIKE', '%' . $carian . '%')->get();

        $ahli = DB::table('ahli_daftars')
            ->join('ahli_berhentis', 'ahli_daftars.noKPBaru', '=', 'ahli_berhentis.noKPBaru')
            ->select(
                'ahli_daftars.noAhli',
                'ahli_daftars.nama',
                'ahli_daftars.noKPBaru',
                'ahli_berhentis.id',
                'ahli_berhentis.tarikhMohon',
                'ahli_berhentis.statusBerhenti',
                'ahli_berhentis.sebabBerhenti',
                'ahli_berhentis.created_at',
                'ahli_berhentis.updated_at',
            )
            //->where($jenisCarian, 'LIKE', '%' . $carian . '%')
            ->get();

            //$ahli = ahli::where($jenisCarian, 'LIKE', '%' . $carian . '%')->first();
            //$berhenti = berhenti::where($jenisCarian, 'LIKE', '%' . $carian . '%')->first();

        return view('ahli.maklumatBerhenti2', compact('ahli'));
    }

    public function maklumatBerhenti2()
    {
        $ahli = DB::table('ahli_daftars')
        ->join('ahli_berhentis', 'ahli_daftars.noKPBaru', '=', 'ahli_berhentis.noKPBaru')
        ->select(
            'ahli_daftars.noAhli',
            'ahli_daftars.nama',
            'ahli_daftars.noKPBaru',
            'ahli_berhentis.id',
            'ahli_berhentis.tarikhMohon',
            'ahli_berhentis.statusBerhenti',
            'ahli_berhentis.sebabBerhenti',
            'ahli_berhentis.created_at',
            'ahli_berhentis.updated_at',
        )
        ->get();

        return view('ahli.maklumatBerhenti2', compact('ahli'));
    }

    public function maklumatBerhentiUpdate(Request $request, $noKPBaru)
    {
        $ahli = DB::table('ahli_daftars')
            ->join("ahli_berhentis", "ahli_berhentis.noKPBaru", "=", "ahli_daftars.noKPBaru")
            ->select(
                'ahli_daftars.noAhli',
                'ahli_daftars.tarikhDaftar',
                'ahli_berhentis.tarikhBerhenti',
                'ahli_berhentis.tarikhMohon',
                'ahli_berhentis.statusBerhenti',
                'ahli_berhentis.sebabBerhenti',
                'ahli_berhentis.akhirPotongan',
                'ahli_berhentis.tarikhPengembalian',
                'ahli_daftars.nama',
                'ahli_daftars.noKPBaru',
                'ahli_daftars.noKPLama',
            )
            ->first();

        return view('ahli.maklumatBerhentiUpdate')->with(compact('ahli'));
    }

    public function kemaskiniBerhenti(Request $request, $noKPBaru)
    {
        $berhenti = ahli_berhenti::where("noKPBaru", $noKPBaru)->first();

        $berhenti->tarikhMohon = $request->tarikhMohon;
        $berhenti->statusBerhenti = $request->statusBerhenti;
        $berhenti->sebabBerhenti = $request->sebabBerhenti;
        $berhenti->akhirPotongan = $request->akhirPotongan;
        $berhenti->tarikhPengembalian = $request->tarikhPengembalian;

        $berhenti->save();

        return redirect()->route('maklumatBerhenti')->with(['message' => 'Kemaskini Berjaya.']);
    }

    public function padamMaklumatBerhenti($id)
    {
        $berhenti = ahli_berhenti::where("id", $id)->first();

        $berhenti->delete();

        return redirect()->route('maklumatBerhenti');
    }

    public function kelulusanPemberhentian()
    {
        return view('ahli.kelulusanPemberhentian');
    }

    public function lulusBerhentiCari()
    {
        $carian = $_POST['carian'];

        //$ahli = ahli::where('noAhli', 'LIKE', '%' . $carian . '%')->get();

        $ahli = DB::table('ahli_daftars')
            ->join("ahli_berhentis", "ahli_berhentis.noAhli", "=", "ahli_daftars.noAhli")
            ->select(
                'ahli_daftars.noAhli',
                'ahli_daftars.nama',
                'ahli_daftars.noKPBaru',
                'ahli_berhentis.tarikhMohon',
                'ahli_berhentis.statusBerhenti',
                'ahli_berhentis.created_at',
                'ahli_berhentis.updated_at',
            )
            //->where('noAhli', 'LIKE', '%' . $carian . '%')
            ->get();

        return view('ahli.kelulusanPemberhentian2')->with(compact('ahli'));
    }

    public function kelulusanPemberhentianEdit($noKPBaru)
    {
        $ahli = DB::table('ahli_daftars')
            ->join("ahli_berhentis", "ahli_berhentis.noAhli", "=", "ahli_daftars.noAhli")
            ->select(
                'ahli_daftars.noAhli',
                'ahli_daftars.nama',
                'ahli_daftars.noKPBaru',
                'ahli_berhentis.tarikhMohon',
                'ahli_berhentis.statusBerhenti',
                'ahli_berhentis.sebabBerhenti',
                'ahli_berhentis.statusKelulusan',
                'ahli_berhentis.tarikhLulus',
                'ahli_berhentis.tarikhBerhenti',
                'ahli_berhentis.created_at',
                'ahli_berhentis.updated_at',
            )
            ->first();

        return view('ahli.kelulusanPemberhentianEdit', compact('ahli'));
    }

    public function kelulusanPemberhentianUpdate(Request $request, $noKPBaru)
    {
        $berhenti = ahli_berhenti::where("noKPBaru", $noKPBaru)->first();

        $berhenti->tarikhLulus = $request->tarikhLulus;
        $berhenti->tarikhBerhenti = $request->tarikhBerhenti;
        $berhenti->statusKelulusan = $request->statusKelulusan;

        $berhenti->save();

        return redirect()->route('kelulusanPemberhentian');
    }
}
