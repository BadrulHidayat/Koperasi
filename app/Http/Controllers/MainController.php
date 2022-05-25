<?php

namespace App\Http\Controllers;

use App\Models\ahli_daftar;
use App\Models\ahli;
use App\Models\alamat;
use App\Models\bank;
use App\Models\berhenti;
use App\Models\kakitangan_alamat;
use App\Models\kakitangan_bank;
use App\Models\kakitangan_daftar;
use App\Models\kakitangan_pekerjaan;
use App\Models\kakitangan_pendidikan;
use App\Models\kakitangan_perhubungan;
use App\Models\noTelefon;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
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
            $carianPembayarGaji = $_POST['carianPembayarGaji'];
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

        /*$ahli = new ahli_daftar();

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
        $ahli->alamat = $request->alamat;
        $ahli->poskod = $request->poskod;
        $ahli->bandar = $request->bandar;
        $ahli->negeri = $request->negeri;
        $ahli->jenisAlamat = $request->jenisAlamat;
        $ahli->noAkaunBank = $request->noAkaunBank;
        $ahli->jenisBank = $request->jenisBank;
        $ahli->telRumah = $request->telRumah;
        $ahli->telPejabat = $request->telPejabat;
        $ahli->telHP = $request->telHP;
        $ahli->faks = $request->faks;
        $ahli->email = $request->email;
        $ahli->carianPejabat = $request->carianPejabat;
        $ahli->carianPembayarGaji = $request->carianPembayarGaji;
        $ahli->jawatan = $request->jawatan;
        $ahli->tarikhMulaKerja = $request->tarikhMulaKerja;
        $ahli->noGaji = $request->noGaji;
        $ahli->Gaji = $request->Gaji;
        $ahli->potongan = $request->potongan;
        $ahli->perakuan = $request->perakuan;
        $ahli->user_id = Auth::user()->id;*/

        $ahli = new ahli();

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

        $alamat = new alamat();

        $alamat->noAhli = $request->noAhli;
        $alamat->alamat = $request->alamat;
        $alamat->poskod = $request->poskod;
        $alamat->bandar = $request->bandar;
        $alamat->negeri = $request->negeri;
        $alamat->jenisAlamat = $request->jenisAlamat;
        $alamat->noKPBaru = $request->noKPBaru;
        $alamat->user_id = Auth::user()->id;

        $bank = new bank();

        $bank->noAhli = $request->noAhli;
        $bank->noAkaunBank = $request->noAkaunBank;
        $bank->jenisBank = $request->jenisBank;
        $bank->noKPBaru = $request->noKPBaru;
        $bank->user_id = Auth::user()->id;

        $noTelefon = new noTelefon();

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

        $ahli = ahli::where($jenisCarian, 'LIKE', '%' . $carian . '%')->first();
        $alamat = alamat::where($jenisCarian, 'LIKE', '%' . $carian . '%')->first();
        $bank = bank::where($jenisCarian, 'LIKE', '%' . $carian . '%')->first();
        $noTelefon = noTelefon::where($jenisCarian, 'LIKE', '%' . $carian . '%')->first();

        //dd($ahli->toArray());
        return view('ahli.maklumatAhliHasil', compact('ahli', 'alamat', 'bank', 'noTelefon'));
    }

    public function maklumatAhliHasil()
    {
        $ahli = ahli::all();
        $alamat = alamat::all();
        $bank = bank::all();
        $noTelefon = noTelefon::all();

        return view('ahli.maklumatAhliHasil', compact('ahli', 'alamat', 'bank', 'noTelefon'));
    }

    public function maklumatAhliKemaskini(Request $request, $noKPBaru)
    {
        $ahli = ahli::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliKemaskini', compact('ahli'));
    }

    public function kemaskiniAhli(Request $request, $noKPBaru)
    {
        $ahli = ahli::where("noKPBaru", $noKPBaru)->first();

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

        $alamat = alamat::where("noKPBaru", $noKPBaru)->first();
        $bank = bank::where("noKPBaru", $noKPBaru)->first();
        $noTelefon = noTelefon::where("noKPBaru", $noKPBaru)->first();

        //$message = "Kemaskini Berjaya";

        //return redirect()->route('maklumatAhliHasil', compact('ahli'))->with(['message' => 'Kemaskini Berjaya.']);

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'));


        /*?>
        @isset($message)
        <div class="alert alert-success">
        <strong>{{$message}}</strong>
        </div>
        <?php*/
    }

    public function padamAlamat($id)
    {
        //$ahli = ahli_daftar::select('select'.$jenisAlamat,$alamat.'from ahli_daftars where id = ?',[$id]);
        //$ahli = ahli_daftar::where("id", $id);
        //$ahli = ahli_daftar::find($id);
        //$ahlis = $ahli->select('select jenisAlamat, alamat from ahli_daftars');
        //$ahlis->delete();
        //return redirect()->route('maklumatAhliHasil');

        /*$ahli = DB::table('ahli_daftars')
        ->select('select jenisAlamat, alamat, poskod, bandar, negeri from ahli_daftars')
        ->where("id", $id)->delete();*/

        $alamat = alamat::where("id", $id)->delete();

        return redirect()->route('maklumatAhliHasil', compact('alamat'));
    }

    public function updateAlamat(Request $request, $noKPBaru)
    {
        $alamat = alamat::where('noKPBaru', $noKPBaru)->first();

        $alamat->noAhli = $request->noAhli;
        $alamat->jenisAlamat = $request->jenisAlamat;
        $alamat->alamat = $request->alamat;
        $alamat->poskod = $request->poskod;
        $alamat->bandar = $request->bandar;
        $alamat->negeri = $request->negeri;
        $alamat->noKPBaru = $request->noKPBaru;

        $alamat->save();

        $ahli = ahli::where("noKPBaru", $noKPBaru)->first();
        $bank = bank::where("noKPBaru", $noKPBaru)->first();
        $noTelefon = noTelefon::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'));
    }

    public function daftarAlamat(Request $request, $noKPBaru)
    {
        $alamat = new alamat();

        $alamat->noAhli = $request->noAhli;
        $alamat->jenisAlamat = $request->jenisAlamat;
        $alamat->alamat = $request->alamat;
        $alamat->poskod = $request->poskod;
        $alamat->bandar = $request->bandar;
        $alamat->negeri = $request->negeri;
        $alamat->noKPBaru = $request->noKPBaru;
        $alamat->user_id = Auth::user()->id;

        $alamat->save();

        $ahli = ahli::where("noKPBaru", $noKPBaru)->first();
        $bank = bank::where("noKPBaru", $noKPBaru)->first();
        $noTelefon = noTelefon::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'));
    }

    public function updateTelR(Request $request, $noKPBaru)
    {
        $noTelefon = noTelefon::where("noKPBaru", $noKPBaru)->first();

        $noTelefon->telRumah = $request->telRumah;

        $noTelefon->save();

        $alamat = alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli::where("noKPBaru", $noKPBaru)->first();
        $bank = bank::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'));
    }

    public function updateTelP(Request $request, $noKPBaru)
    {
        $noTelefon = noTelefon::where("noKPBaru", $noKPBaru)->first();

        $noTelefon->telPejabat = $request->telPejabat;

        $noTelefon->save();

        $alamat = alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli::where("noKPBaru", $noKPBaru)->first();
        $bank = bank::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'));
    }

    public function updateTelHP(Request $request, $noKPBaru)
    {
        $noTelefon = noTelefon::where("noKPBaru", $noKPBaru)->first();

        $noTelefon->telHP = $request->telHP;

        $noTelefon->save();

        $alamat = alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli::where("noKPBaru", $noKPBaru)->first();
        $bank = bank::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'));
    }

    public function updatefaks(Request $request, $noKPBaru)
    {
        $noTelefon = noTelefon::where("noKPBaru", $noKPBaru)->first();

        $noTelefon->faks = $request->faks;

        $noTelefon->save();

        $alamat = alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli::where("noKPBaru", $noKPBaru)->first();
        $bank = bank::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'));
    }

    public function updateEmail(Request $request, $noKPBaru)
    {
        $noTelefon = noTelefon::where("noKPBaru", $noKPBaru)->first();

        $noTelefon->email = $request->email;

        $noTelefon->save();

        $alamat = alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli::where("noKPBaru", $noKPBaru)->first();
        $bank = bank::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'))->with(['message' => 'Kemaskini Berjaya.']);
    }

    public function padamTelRAhli(Request $request, $noKPBaru)
    {
        $noTelefon = noTelefon::where('noKPBaru', $noKPBaru)->first();

        $reset=" ";
        $noTelefon->telRumah = $request->$reset;

        $noTelefon->save();

        $alamat = alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli::where("noKPBaru", $noKPBaru)->first();
        $bank = bank::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'))->with(['message' => 'Padam no telefon Pejabat Berjaya.']);
    }

    public function padamTelPAhli(Request $request, $noKPBaru)
    {
        $noTelefon = noTelefon::where('noKPBaru', $noKPBaru)->first();

        $reset=" ";
        $noTelefon->telPejabat = $request->$reset;

        $noTelefon->save();

        $alamat = alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli::where("noKPBaru", $noKPBaru)->first();
        $bank = bank::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'))->with(['message' => 'Padam no telefon Pejabat Berjaya.']);
    }

    public function padamTelHPAhli(Request $request, $noKPBaru)
    {
        $noTelefon = noTelefon::where('noKPBaru', $noKPBaru)->first();

        $reset=" ";
        $noTelefon->telHP = $request->$reset;

        $noTelefon->save();

        $alamat = alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli::where("noKPBaru", $noKPBaru)->first();
        $bank = bank::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'))->with(['message' => 'Padam no telefon Pejabat Berjaya.']);
    }

    public function padamFaksAhli(Request $request, $noKPBaru)
    {
        $noTelefon = noTelefon::where('noKPBaru', $noKPBaru)->first();

        $reset=" ";
        $noTelefon->faks = $request->$reset;

        $noTelefon->save();

        $alamat = alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli::where("noKPBaru", $noKPBaru)->first();
        $bank = bank::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'))->with(['message' => 'Padam no telefon Pejabat Berjaya.']);
    }

    public function padamEmailAhli(Request $request, $noKPBaru)
    {
        $noTelefon = noTelefon::where('noKPBaru', $noKPBaru)->first();

        $reset=" ";
        $noTelefon->email = $request->$reset;

        $noTelefon->save();

        $alamat = alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli::where("noKPBaru", $noKPBaru)->first();
        $bank = bank::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'))->with(['message' => 'Padam no telefon Pejabat Berjaya.']);
    }

    public function updateBank(Request $request, $noKPBaru)
    {
        $bank = bank::where('noKPBaru', $noKPBaru)->first();

        $bank->noAhli = $request->noAhli;
        $bank->jenisBank = $request->jenisBank;
        $bank->noAkaunBank = $request->noAkaunBank;
        $bank->noKPBaru = $request->noKPBaru;

        $bank->save();

        $alamat = alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli::where("noKPBaru", $noKPBaru)->first();
        $noTelefon = noTelefon::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'));
    }

    public function padamBankAhli($noKPBaru)
    {
        $bank = bank::where("noKPBaru", $noKPBaru)->delete();

        $alamat = alamat::where("noKPBaru", $noKPBaru)->first();
        $ahli = ahli::where("noKPBaru", $noKPBaru)->first();
        $noTelefon = noTelefon::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon'));
    }

    public function daftarBank(Request $request, $noKPBaru)
    {
        $bank = new bank();

        $bank->noAhli = $request->noAhli;
        $bank->jenisBank = $request->jenisBank;
        $bank->noAkaunBank = $request->noAkaunBank;
        $bank->noKPBaru = $request->noKPBaru;
        $bank->user_id = Auth::user()->id;

        $bank->save();

        $ahli = ahli::where("noKPBaru", $noKPBaru)->first();
        $alamat = alamat::where("noKPBaru", $noKPBaru)->first();
        $noTelefon = noTelefon::where("noKPBaru", $noKPBaru)->first();

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

        $ahli = ahli::where($jenisCarian, 'LIKE', '%' . $carian . '%')->get();

        return view('ahli.daftarYuran2', compact('ahli'));
    }

    public function daftarYuran2()
    {
        $carian = $_POST['carian'];
        $jenisCarian = $_POST['jenisCarian'];

        $ahli = ahli::where($jenisCarian, 'LIKE', '%' . $carian . '%')->get();

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

        $ahli = ahli::where($jenisCarian, 'LIKE', '%' . $carian . '%')->get();

        return view('ahli.daftarBerhenti2', compact('ahli',));
    }

    public function daftarBerhenti2()
    {
        $ahli = ahli::all();

        return view('ahli.daftarBerhenti2', compact('ahli'));
    }

    public function daftarBerhentiTambah(Request $request)
    {
        $this->validate($request, [
            'noKPBaru' => 'required',
            'tarikhMohon' => 'required',
            'statusBerhenti' => 'required',
        ]);

        $berhenti = new berhenti();

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

        $ahli = DB::table('ahlis')
            ->join("berhentis", "ahlis.noKPBaru", "=", "berhentis.noKPBaru")
            ->select(
                'ahlis.noAhli',
                'ahlis.nama',
                'ahlis.noKPBaru',
                'berhentis.tarikhMohon',
                'berhentis.statusBerhenti',
                'berhentis.sebabBerhenti',
                'berhentis.created_at',
                'berhentis.updated_at',
            )
            ->where($jenisCarian, 'LIKE', '%' . $carian . '%')
            ->get();

        return view('ahli.maklumatBerhenti2', compact('ahli'));
    }

    public function maklumatBerhenti2()
    {
        $ahli = DB::table('ahlis')
            ->join("berhentis", "berhentis.noKPBaru", "=", "ahlis.noKPBaru")
            ->select(
                'ahlis.noAhli',
                'ahlis.nama',
                'ahlis.noKPBaru',
                'berhentis.tarikhMohon',
                'berhentis.statusBerhenti',
                'berhentis.sebabBerhenti',
                'berhentis.created_at',
                'berhentis.updated_at',
            )
            ->first();

        return view('ahli.maklumatBerhenti2', compact('ahli'));
    }

    public function maklumatBerhentiUpdate(Request $request, $noKPBaru)
    {
        $ahli = DB::table('ahlis')
            ->join("berhentis", "berhentis.noKPBaru", "=", "ahlis.noKPBaru")
            ->select(
                'ahlis.noAhli',
                'ahlis.tarikhDaftar',
                'berhentis.tarikhBerhenti',
                'berhentis.tarikhMohon',
                'berhentis.statusBerhenti',
                'berhentis.sebabBerhenti',
                'berhentis.akhirPotongan',
                'berhentis.tarikhPengembalian',
                'ahlis.nama',
                'ahlis.noKPBaru',
                'ahlis.noKPLama',
            )
            ->first();

        return view('ahli.maklumatBerhentiUpdate')->with(compact('ahli'));
    }

    public function kemaskiniBerhenti(Request $request, $noKPBaru)
    {
        $berhenti = berhenti::where("noKPBaru", $noKPBaru)->first();

        $berhenti->tarikhMohon = $request->tarikhMohon;
        $berhenti->statusBerhenti = $request->statusBerhenti;
        $berhenti->sebabBerhenti = $request->sebabBerhenti;
        $berhenti->akhirPotongan = $request->akhirPotongan;
        $berhenti->tarikhPengembalian = $request->tarikhPengembalian;

        $berhenti->save();

        return redirect()->route('maklumatBerhenti')->with(['message' => 'Kemaskini Berjaya.']);
    }

    public function kelulusanPemberhentian()
    {
        return view('ahli.kelulusanPemberhentian');
    }

    public function lulusBerhentiCari()
    {
        $carian = $_POST['carian'];

        //$ahli = ahli::where('noAhli', 'LIKE', '%' . $carian . '%')->get();

        $ahli = DB::table('ahlis')
            ->join("berhentis", "berhentis.noAhli", "=", "ahlis.noAhli")
            ->select(
                'ahlis.noAhli',
                'ahlis.nama',
                'ahlis.noKPBaru',
                'berhentis.tarikhMohon',
                'berhentis.statusBerhenti',
                'berhentis.created_at',
                'berhentis.updated_at',
            )
            ->where('noAhli', 'LIKE', '%' . $carian . '%')
            ->first();

        return view('ahli.kelulusanPemberhentian2')->with(compact('ahli'));
    }

    public function kelulusanPemberhentian2()
    {
        return view('ahli.kelulusanPemberhentian2');
    }

    public function daftarKakitangan()
    {
        return view('kakitangan.daftarKakitangan');
    }

    public function pengesahanKakitangan()
    {
        if (
            isset($_POST['nama']) || isset($_POST['noKPBaru']) || isset($_POST['jantina']) || isset($_POST['bangsa']) ||
            isset($_POST['agama']) || isset($_POST['tarikhLahir']) || isset($_POST['tempatLahir']) ||
            isset($_POST['alamat']) || isset($_POST['poskod']) || isset($_POST['daerah']) || isset($_POST['negeri']) ||
            isset($_POST['jenisAlamat']) || isset($_POST['telHP']) || isset($_POST['email']) || isset($_POST['noAkaunBank']) ||
            isset($_POST['jenisBank']) || isset($_POST['jawatan']) || isset($_POST['tarikhMulaKerja']) || isset($_POST['statusKerja']) ||
            isset($_POST['noGaji']) || isset($_POST['gaji']) || isset($_POST['potongan']) || isset($_POST['statusStaff'])
        ) {
            $nama = $_POST['nama'];
            $noKPBaru = $_POST['noKPBaru'];
            $noKPLama = $_POST['noKPLama'];
            $jantina = $_POST['jantina'];
            $bangsa = $_POST['bangsa'];
            $agama = $_POST['agama'];
            $tarikhLahir = $_POST['tarikhLahir'];
            $tempatLahir = $_POST['tempatLahir'];
            $alamat = $_POST['alamat'];
            $poskod = $_POST['poskod'];
            $daerah = $_POST['daerah'];
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
            $bahagian = $_POST['bahagian'];
            $noStaff = $_POST['noStaff'];
            $jawatan = $_POST['jawatan'];
            $statusKerja = $_POST['statusKerja'];
            $noGaji = $_POST['noGaji'];
            $gaji = $_POST['gaji'];
            $potongan = $_POST['potongan'];
            $tarikhMulaKerja = $_POST['tarikhMulaKerja'];
            $tarikhAkhirKerja = $_POST['tarikhAkhirKerja'];
            $statusStaff = $_POST['statusStaff'];

            return view('kakitangan.pengesahanKakitangan', [
                "nama" => $nama,
                "noKPLama" => $noKPLama,
                "noKPBaru" => $noKPBaru,
                "jantina" => $jantina,
                "bangsa" => $bangsa,
                "agama" => $agama,
                "tarikhLahir" => $tarikhLahir,
                "tempatLahir" => $tempatLahir,
                "alamat" => $alamat,
                "poskod" => $poskod,
                "daerah" => $daerah,
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
                "bahagian" => $bahagian,
                "noStaff" => $noStaff,
                "jawatan" => $jawatan,
                "statusKerja" => $statusKerja,
                "noGaji" => $noGaji,
                "gaji" => $gaji,
                "potongan" => $potongan,
                "tarikhMulaKerja" => $tarikhMulaKerja,
                "tarikhAkhirKerja" => $tarikhAkhirKerja,
                "statusStaff" => $statusStaff,
            ]);
        }
    }

    public function simpanKakitangan(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'noKPBaru' => 'required',
            'jantina' => 'required',
            'bangsa' => 'required',
            'agama' => 'required',
            'tarikhLahir' => 'required',
            'tempatLahir' => 'required',
            'alamat' => 'required',
            'poskod' => 'required',
            'daerah' => 'required',
            'negeri' => 'required',
            'jenisAlamat' => 'required',
            'telHP' => 'required',
            'email' => 'required',
            'noAkaunBank' => 'required',
            'jenisBank' => 'required',
            'bahagian' => 'required',
            'noStaff' => 'required',
            'jawatan' => 'required',
            'statusKerja' => 'required',
            'noGaji' => 'required',
            'gaji' => 'required',
            'potongan' => 'required',
            'tarikhMulaKerja' => 'required',
            'statusStaff' => 'required',
        ]);

        $staff = new kakitangan_daftar();

        $staff->nama = $request->nama;
        $staff->noStaff = $request->noStaff;
        $staff->noKPBaru = $request->noKPBaru;
        $staff->noKPLama = $request->noKPLama;
        $staff->jantina = $request->jantina;
        $staff->bangsa = $request->bangsa;
        $staff->agama = $request->agama;
        $staff->tarikhLahir = $request->tarikhLahir;
        $staff->tempatLahir = $request->tempatLahir;
        $staff->carianPejabat = $request->carianPejabat;
        $staff->jenisCarianPejabat = $request->jenisCarianPejabat;
        $staff->carianPembayarGaji = $request->carianPembayarGaji;
        $staff->jenisCarianPembayarGaji = $request->jenisCarianPembayarGaji;
        $staff->user_id = Auth::user()->id;

        $alamat2 = new kakitangan_alamat();

        $alamat2->noStaff = $request->noStaff;
        $alamat2->alamat = $request->alamat;
        $alamat2->poskod = $request->poskod;
        $alamat2->daerah = $request->daerah;
        $alamat2->negeri = $request->negeri;
        $alamat2->jenisAlamat = $request->jenisAlamat;
        $alamat2->noKPBaru = $request->noKPBaru;
        $alamat2->user_id = Auth::user()->id;

        $bank2 = new kakitangan_bank();

        $bank2->noStaff = $request->noStaff;
        $bank2->noAkaunBank = $request->noAkaunBank;
        $bank2->jenisBank = $request->jenisBank;
        $bank2->noKPBaru = $request->noKPBaru;
        $bank2->user_id = Auth::user()->id;

        $perhubungan = new kakitangan_perhubungan();

        $perhubungan->noStaff = $request->noStaff;
        $perhubungan->telRumah = $request->telRumah;
        $perhubungan->telPejabat = $request->telPejabat;
        $perhubungan->telHP = $request->telHP;
        $perhubungan->faks = $request->faks;
        $perhubungan->email = $request->email;
        $perhubungan->noKPBaru = $request->noKPBaru;
        $perhubungan->user_id = Auth::user()->id;

        $pekerjaan = new kakitangan_pekerjaan();

        $pekerjaan->noStaff = $request->noStaff;
        $pekerjaan->bahagian = $request->bahagian;
        $pekerjaan->jawatan = $request->jawatan;
        $pekerjaan->statusKerja = $request->statusKerja;
        $pekerjaan->noGaji = $request->noGaji;
        $pekerjaan->gaji = $request->gaji;
        $pekerjaan->potongan = $request->potongan;
        $pekerjaan->tarikhMulaKerja = $request->tarikhMulaKerja;
        $pekerjaan->statusStaff = $request->statusStaff;
        $pekerjaan->noKPBaru = $request->noKPBaru;
        $pekerjaan->user_id = Auth::user()->id;

        $pendidikan = new kakitangan_pendidikan();

        $pendidikan->noStaff = $request->noStaff;
        $pendidikan->noKPBaru = $request->noKPBaru;
        $pendidikan->user_id = Auth::user()->id;

        $staff->save();
        $alamat2->save();
        $bank2->save();
        $perhubungan->save();
        $pekerjaan->save();
        $pendidikan->save();

        $noStaff = $_POST['noStaff'];
        $nama = $_POST['nama'];
        $noKPBaru = $_POST['noKPBaru'];
        $tarikhMulaKerja = $_POST['tarikhMulaKerja'];

        return view('kakitangan.statusKakitangan', [
            "noStaff" => $noStaff,
            "nama" => $nama,
            "noKPBaru" => $noKPBaru,
            "tarikhMulaKerja" => $tarikhMulaKerja,
        ]);
    }

    public function statusKakitangan()
    {
    }

    public function maklumatStaff()
    {
        return view('kakitangan.maklumatStaff');
    }

    public function maklumatStaffCari()
    {
        $carian = $_POST['carian'];
        $jenisCarian = $_POST['jenisCarian'];

        $staff = kakitangan_daftar::where($jenisCarian, 'LIKE', '%' . $carian . '%')->first();
        $alamat2 = kakitangan_alamat::where($jenisCarian, 'LIKE', '%' . $carian . '%')->first();
        $bank2 = kakitangan_bank::where($jenisCarian, 'LIKE', '%' . $carian . '%')->first();
        $perhubungan = kakitangan_perhubungan::where($jenisCarian, 'LIKE', '%' . $carian . '%')->first();
        $pekerjaan = kakitangan_pekerjaan::where($jenisCarian, 'LIKE', '%' . $carian . '%')->first();
        $pendidikan = kakitangan_pendidikan::where($jenisCarian, 'LIKE', '%' . $carian . '%')->first();

        return view('kakitangan.maklumatStaffHasil', compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan'));
    }

    public function maklumatStaffHasil()
    {
        $staff = kakitangan_daftar::all();
        $alamat2 = kakitangan_alamat::all();
        $bank2 = kakitangan_bank::all();
        $perhubungan = kakitangan_perhubungan::all();
        $pekerjaan = kakitangan_pekerjaan::all();
        $pendidikan = kakitangan_pendidikan::all();

        return view('kakitangan.maklumatStaffHasil', compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan'));
    }

    public function maklumatStaffKemaskini(Request $request, $noKPBaru)
    {
        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();

        return view('kakitangan.maklumatStaffKemaskini', compact('staff', 'pekerjaan'));
    }

    public function kemaskiniStaff(Request $request, $noKPBaru)
    {
        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();

        $staff->noStaff = $request->noStaff;
        $staff->nama = $request->nama;
        $staff->noKPBaru = $request->noKPBaru;
        $staff->noKPLama = $request->noKPLama;
        $staff->jantina = $request->jantina;
        $staff->bangsa = $request->bangsa;
        $staff->agama = $request->agama;
        $staff->tarikhLahir = $request->tarikhLahir;
        $staff->tempatLahir = $request->tempatLahir;
        $staff->carianPejabat = $request->carianPejabat;
        $staff->carianPembayarGaji = $request->carianPembayarGaji;
        $pekerjaan->bahagian = $request->bahagian;
        $pekerjaan->jawatan = $request->jawatan;
        $pekerjaan->statusKerja = $request->statusKerja;
        $pekerjaan->noGaji = $request->noGaji;
        $pekerjaan->gaji = $request->gaji;
        $pekerjaan->potongan = $request->potongan;
        $pekerjaan->tarikhMulaKerja = $request->tarikhMulaKerja;
        $pekerjaan->tarikhAkhirKerja = $request->tarikhAkhirKerja;
        $pekerjaan->statusStaff = $request->statusStaff;

        $staff->save();
        $pekerjaan->save();

        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan'));
    }

    public function padamAlamatStaff($noKPBaru)
    {
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->delete();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan'));
    }

    public function updateAlamatStaff(Request $request, $noKPBaru)
    {
        $alamat2 = kakitangan_alamat::where('noKPBaru', $noKPBaru)->first();

        $alamat2->noStaff = $request->noStaff;
        $alamat2->jenisAlamat = $request->jenisAlamat;
        $alamat2->alamat = $request->alamat;
        $alamat2->poskod = $request->poskod;
        $alamat2->daerah = $request->daerah;
        $alamat2->negeri = $request->negeri;
        $alamat2->noKPBaru = $request->noKPBaru;

        $alamat2->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan'));
    }

    public function daftarAlamatStaff(Request $request, $noKPBaru)
    {
        $alamat2 = new kakitangan_alamat();

        $alamat2->noStaff = $request->noStaff;
        $alamat2->jenisAlamat = $request->jenisAlamat;
        $alamat2->alamat = $request->alamat;
        $alamat2->poskod = $request->poskod;
        $alamat2->daerah = $request->daerah;
        $alamat2->negeri = $request->negeri;
        $alamat2->noKPBaru = $request->noKPBaru;
        $alamat2->user_id = Auth::user()->id;

        $alamat2->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan'));
    }


    public function updateTelRStaff(Request $request, $noKPBaru)
    {
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();

        $perhubungan->telRumah = $request->telRumah;

        $perhubungan->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan'));
    }

    public function updateTelPStaff(Request $request, $noKPBaru)
    {
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();

        $perhubungan->telPejabat = $request->telPejabat;

        $perhubungan->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan'));
    }

    public function updateTelHPStaff(Request $request, $noKPBaru)
    {
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();

        $perhubungan->telHP = $request->telHP;

        $perhubungan->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan'));
    }

    public function updatefaksStaff(Request $request, $noKPBaru)
    {
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();

        $perhubungan->faks = $request->faks;

        $perhubungan->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan'));
    }

    public function updateEmailStaff(Request $request, $noKPBaru)
    {
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();

        $perhubungan->email = $request->email;

        $perhubungan->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan'));
    }

    public function padamTelRStaff(Request $request, $noKPBaru)
    {

        $perhubungan = kakitangan_perhubungan::where('noKPBaru', $noKPBaru)->first();

        $reset=" ";
        $perhubungan->telRumah = $request->$reset;

        $perhubungan->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan'));
    }

    public function padamTelPStaff(Request $request, $noKPBaru)
    {

        $perhubungan = kakitangan_perhubungan::where('noKPBaru', $noKPBaru)->first();

        $reset=" ";
        $perhubungan->telPejabat = $request->$reset;

        $perhubungan->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan'));
    }

    public function padamTelHPStaff(Request $request, $noKPBaru)
    {

        $perhubungan = kakitangan_perhubungan::where('noKPBaru', $noKPBaru)->first();

        $reset=" ";
        $perhubungan->telHP = $request->$reset;

        $perhubungan->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan'));
    }

    public function padamFaksStaff(Request $request, $noKPBaru)
    {

        $perhubungan = kakitangan_perhubungan::where('noKPBaru', $noKPBaru)->first();

        $reset=" ";
        $perhubungan->faks = $request->$reset;

        $perhubungan->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan'));
    }

    public function padamEmailStaff(Request $request, $noKPBaru)
    {

        $perhubungan = kakitangan_perhubungan::where('noKPBaru', $noKPBaru)->first();

        $reset=" ";
        $perhubungan->email = $request->$reset;

        $perhubungan->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan'));
    }

    public function updateBankStaff(Request $request, $noKPBaru)
    {
        $bank2 = kakitangan_bank::where('noKPBaru', $noKPBaru)->first();

        $bank2->noStaff = $request->noStaff;
        $bank2->jenisBank = $request->jenisBank;
        $bank2->noAkaunBank = $request->noAkaunBank;
        $bank2->noKPBaru = $request->noKPBaru;

        $bank2->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan'));
    }

    public function padamBankStaff($noKPBaru)
    {
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->delete();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan'));
    }

    public function daftarBankStaff(Request $request, $noKPBaru)
    {
        $bank2 = new kakitangan_bank();

        $bank2->noStaff = $request->noStaff;
        $bank2->jenisBank = $request->jenisBank;
        $bank2->noAkaunBank = $request->noAkaunBank;
        $bank2->noKPBaru = $request->noKPBaru;
        $bank2->user_id = Auth::user()->id;

        $bank2->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan'));
    }

    public function updatePendidikanStaff(Request $request, $noKPBaru)
    {
        $pendidikan = kakitangan_pendidikan::where('noKPBaru', $noKPBaru)->first();

        $pendidikan->noStaff = $request->noStaff;
        $pendidikan->tarafPendidikan = $request->tarafPendidikan;
        $pendidikan->tahun = $request->tahun;
        $pendidikan->noKPBaru = $request->noKPBaru;

        $pendidikan->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan'));
    }

    public function padamPendidikanStaff($noKPBaru)
    {
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->delete();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan'));
    }

    public function daftarPendidikanStaff(Request $request, $noKPBaru)
    {
        $pendidikan = new kakitangan_pendidikan();

        $pendidikan->noStaff = $request->noStaff;
        $pendidikan->tarafPendidikan = $request->tarafPendidikan;
        $pendidikan->tahun = $request->tahun;
        $pendidikan->noKPBaru = $request->noKPBaru;
        $pendidikan->user_id = Auth::user()->id;

        $pendidikan->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan'));
    }
}
