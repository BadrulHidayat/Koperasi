<?php

namespace App\Http\Controllers;

use App\Models\ahli_daftar;
use App\Models\ahli_alamat;
use App\Models\ahli_bank;
use App\Models\ahli_berhenti;
use App\Models\ahli_individu;
use App\Models\ahli_perhubungan;
use App\Models\ahli_syarikat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AhliController extends Controller
{
    public function daftarAhli()
    {
        return view('ahli.daftarAhli');
    }

    public function pengesahanAhli()
    {
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
            $cariP = $_POST['cariP'];
            $jenisCariP = $_POST['jenisCariP'];
            $cariPG = $_POST['cariPG'];
            $jenisCariPG = $_POST['jenisCariPG'];
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
                "cariP" => $cariP,
                "cariPG" => $cariPG,
                "jenisCariP" => $jenisCariP,
                "jenisCariPG" => $jenisCariPG,
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
            'perakuan' => 'required',
        ]);

        $ahli = new ahli_daftar();

        $ahli->statusAhli = $request->statusAhli;
        $ahli->noAhliTerkini = $request->noAhliTerkini;
        $ahli->noAhli = $request->noAhli;
        $ahli->tarikhDaftar = $request->tarikhDaftar;
        $ahli->nama = $request->nama;
        $ahli->noKPBaru = $request->noKPBaru;
        $ahli->noKPLama = $request->noKPLama;
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

        $pejabat = new ahli_syarikat();

        $pejabat->noAhli = $request->noAhli;
        $pejabat->cariP = $request->cariP;
        $pejabat->cariPG = $request->cariPG;
        $pejabat->jenisCariP = $request->jenisCariP;
        $pejabat->jenisCariPG = $request->jenisCariPG;
        $pejabat->nama = $request->nama;
        $pejabat->noKPBaru = $request->noKPBaru;
        $pejabat->noKPLama = $request->noKPLama;
        $pejabat->jawatan = $request->jawatan;
        $pejabat->pangkat = $request->pangkat;
        $pejabat->user_id = Auth::user()->id;

        $ahli->save();
        $alamat->save();
        $bank->save();
        $noTelefon->save();
        $pejabat->save();

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

        $pejabat = DB::table('syarikat_daftars')
            ->join('ahli_syarikats', 'syarikat_daftars.kod_jabatan', '=', 'ahli_syarikats.cariP')
            ->join('syarikat_alamats', 'syarikat_daftars.id', '=', 'syarikat_alamats.id')
            ->select(
                'syarikat_daftars.kod_jabatan',
                'syarikat_daftars.nama_jabatan',
                'syarikat_alamats.alamat',
                'syarikat_alamats.poskod',
                'syarikat_alamats.daerah',
                'syarikat_alamats.negeri',
            )
            ->where('ahli_syarikats.noKPBaru', $noKPBaru)
            ->get();

            $pembayarGaji = DB::table('syarikat_daftars')
            ->join('ahli_syarikats', 'syarikat_daftars.kod_jabatan', '=', 'ahli_syarikats.cariPG')
            ->join('syarikat_alamats', 'syarikat_daftars.id', '=', 'syarikat_alamats.id')
            ->select(
                'syarikat_daftars.kod_jabatan',
                'syarikat_daftars.nama_jabatan',
                'syarikat_alamats.alamat',
                'syarikat_alamats.poskod',
                'syarikat_alamats.daerah',
                'syarikat_alamats.negeri',
            )
            ->where('ahli_syarikats.noKPBaru', $noKPBaru)
            ->get();

            $waris = DB::table('individu_daftars as a')
            ->leftJoin('ahli_individus as b', function($join){
                $join->on('a.noKP', 'b.cariIndi')
                ->orOn('a.nama', 'b.cariIndi')
                ->orOn('a.noKPlama', 'b.cariIndi');
            })
            ->select(
                'b.noKPBaru',
                'b.cariIndi',
                'b.jenisCariIndi',
                'b.jenisHubungan',
                'b.pewaris',
                'b.pemegangWasiat',
                'b.pembahagian',
                'a.nama',
                'a.noKP',
                'a.noKPlama',
                'a.jantina',
            )
            ->where('b.noKPBaru', $noKPBaru)
            ->first();

        return view('ahli.maklumatAhliHasil')->with(compact('ahli', 'alamat', 'bank', 'noTelefon', 'pejabat', 'waris', 'pembayarGaji'));
    }

    public function maklumatAhliKemaskini(Request $request, $noKPBaru)
    {
        $ahli = ahli_daftar::where("noKPBaru", $noKPBaru)->first();
        $pejabat = ahli_syarikat::where("noKPBaru", $noKPBaru)->first();

        return view('ahli.maklumatAhliKemaskini', compact('ahli', 'pejabat'));
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

        $pejabat = ahli_syarikat::where("noKPBaru", $noKPBaru)->first();

        $pejabat->noAhli = $request->noAhli;
        $pejabat->cariP = $request->cariP;
        $pejabat->cariPG = $request->cariPG;
        $pejabat->jenisCariP = $request->jenisCariP;
        $pejabat->jenisCariPG = $request->jenisCariPG;
        $pejabat->noKPBaru = $request->noKPBaru;

        $pejabat->save();

        return redirect()->route('maklumatAhliHasil', $noKPBaru);
    }

    public function padamAlamat($noKPBaru)
    {
        $alamat = ahli_alamat::where('noKPBaru', $noKPBaru);
        $alamat->delete();

        return redirect()->route('maklumatAhliHasil', $noKPBaru);
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

        return redirect()->route('maklumatAhliHasil', $noKPBaru);
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

        return redirect()->route('maklumatAhliHasil', $noKPBaru);
    }

    public function updateTelR(Request $request, $noKPBaru)
    {
        $noTelefon = ahli_perhubungan::where("noKPBaru", $noKPBaru)->first();

        $noTelefon->telRumah = $request->telRumah;

        $noTelefon->save();

        return redirect()->route('maklumatAhliHasil', $noKPBaru);
    }

    public function updateTelP(Request $request, $noKPBaru)
    {
        $noTelefon = ahli_perhubungan::where("noKPBaru", $noKPBaru)->first();

        $noTelefon->telPejabat = $request->telPejabat;

        $noTelefon->save();

        return redirect()->route('maklumatAhliHasil', $noKPBaru);
    }

    public function updateTelHP(Request $request, $noKPBaru)
    {
        $noTelefon = ahli_perhubungan::where("noKPBaru", $noKPBaru)->first();

        $noTelefon->telHP = $request->telHP;

        $noTelefon->save();

        return redirect()->route('maklumatAhliHasil', $noKPBaru);
    }

    public function updatefaks(Request $request, $noKPBaru)
    {
        $noTelefon = ahli_perhubungan::where("noKPBaru", $noKPBaru)->first();

        $noTelefon->faks = $request->faks;

        $noTelefon->save();

        return redirect()->route('maklumatAhliHasil', $noKPBaru);
    }

    public function updateEmail(Request $request, $noKPBaru)
    {
        $noTelefon = ahli_perhubungan::where("noKPBaru", $noKPBaru)->first();

        $noTelefon->email = $request->email;

        $noTelefon->save();

        return redirect()->route('maklumatAhliHasil', $noKPBaru);
    }

    public function padamTelRAhli(Request $request, $noKPBaru)
    {
        $noTelefon = ahli_perhubungan::where('noKPBaru', $noKPBaru)->first();

        $reset = " ";
        $noTelefon->telRumah = $request->$reset;

        $noTelefon->save();

        return redirect()->route('maklumatAhliHasil', $noKPBaru);
    }

    public function padamTelPAhli(Request $request, $noKPBaru)
    {
        $noTelefon = ahli_perhubungan::where('noKPBaru', $noKPBaru)->first();

        $reset = " ";
        $noTelefon->telPejabat = $request->$reset;

        $noTelefon->save();

        return redirect()->route('maklumatAhliHasil', $noKPBaru);
    }

    public function padamTelHPAhli(Request $request, $noKPBaru)
    {
        $noTelefon = ahli_perhubungan::where('noKPBaru', $noKPBaru)->first();

        $reset = " ";
        $noTelefon->telHP = $request->$reset;

        $noTelefon->save();

        return redirect()->route('maklumatAhliHasil', $noKPBaru);
    }

    public function padamFaksAhli(Request $request, $noKPBaru)
    {
        $noTelefon = ahli_perhubungan::where('noKPBaru', $noKPBaru)->first();

        $reset = " ";
        $noTelefon->faks = $request->$reset;

        $noTelefon->save();

        return redirect()->route('maklumatAhliHasil', $noKPBaru);
    }

    public function padamEmailAhli(Request $request, $noKPBaru)
    {
        $noTelefon = ahli_perhubungan::where('noKPBaru', $noKPBaru)->first();

        $reset = " ";
        $noTelefon->email = $request->$reset;

        $noTelefon->save();

        return redirect()->route('maklumatAhliHasil', $noKPBaru);
    }

    public function updateBank(Request $request, $noKPBaru)
    {
        $bank = ahli_bank::where('noKPBaru', $noKPBaru)->first();

        $bank->noAhli = $request->noAhli;
        $bank->jenisBank = $request->jenisBank;
        $bank->noAkaunBank = $request->noAkaunBank;
        $bank->noKPBaru = $request->noKPBaru;

        $bank->save();

        return redirect()->route('maklumatAhliHasil', $noKPBaru);
    }

    public function padamBankAhli($noKPBaru)
    {
        $bank = ahli_bank::where("noKPBaru", $noKPBaru);
        $bank->delete();

        return redirect()->route('maklumatAhliHasil', $noKPBaru);
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

        return redirect()->route('maklumatAhliHasil', $noKPBaru);
    }

    public function daftarWaris(Request $request, $noKPBaru)
    {
        $waris = new ahli_individu();

        $waris->noAhli = $request->noAhli;
        $waris->noKPBaru = $request->noKPBaru;
        $waris->cariIndi = $request->cariIndi;
        $waris->jenisCariIndi = $request->jenisCariIndi;
        $waris->jenisHubungan = $request->jenisHubungan;
        $waris->pewaris = $request->pewaris;
        $waris->pemegangWasiat = $request->pemegangWasiat;
        $waris->pembahagian = $request->pembahagian;
        $waris->user_id = Auth::user()->id;

        $waris->save();

        return redirect()->route('maklumatAhliHasil', $noKPBaru);
    }

    public function updateWaris(Request $request, $noKPBaru)
    {
        $waris = ahli_individu::where("noKPBaru", $noKPBaru)->first();

        $waris->noAhli = $request->noAhli;
        $waris->noKPBaru = $request->noKPBaru;
        $waris->cariIndi = $request->cariIndi;
        $waris->jenisCariIndi = $request->jenisCariIndi;
        $waris->jenisHubungan = $request->jenisHubungan;
        $waris->pewaris = $request->pewaris;
        $waris->pemegangWasiat = $request->pemegangWasiat;
        $waris->pembahagian = $request->pembahagian;

        $waris->save();

        return redirect()->route('maklumatAhliHasil', $noKPBaru);
    }

    public function padamWarisAhli($noKPBaru)
    {
        $waris = ahli_individu::where("noKPBaru", $noKPBaru);
        $waris->delete();

        return redirect()->route('maklumatAhliHasil', $noKPBaru);
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

        $ahli = DB::table('ahli_daftars')
            ->join('ahli_berhentis', 'ahli_daftars.noKPBaru', '=', 'ahli_berhentis.noKPBaru')
            ->select(
                'ahli_daftars.noAhli',
                'ahli_daftars.nama',
                'ahli_daftars.noKPBaru',
                'ahli_daftars.noKPLama',
                'ahli_berhentis.id',
                'ahli_berhentis.tarikhMohon',
                'ahli_berhentis.tarikhLulus',
                'ahli_berhentis.tarikhBerhenti',
                'ahli_berhentis.statusBerhenti',
                'ahli_berhentis.statusKelulusan',
                'ahli_berhentis.sebabBerhenti',
                'ahli_berhentis.created_at',
                'ahli_berhentis.updated_at',
            )
            ->where('ahli_daftars'.".".$jenisCarian,'LIKE', "%".$carian."%")
            ->get();

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
                'ahli_daftars.noKPLama',
                'ahli_berhentis.id',
                'ahli_berhentis.tarikhMohon',
                'ahli_berhentis.tarikhLulus',
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
            ->where('ahli_daftars.noKPBaru', $noKPBaru)
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

        $ahli = DB::table('ahli_daftars')
            ->join("ahli_berhentis", "ahli_berhentis.noAhli", "=", "ahli_daftars.noAhli")
            ->select(
                'ahli_daftars.noAhli',
                'ahli_daftars.nama',
                'ahli_daftars.noKPBaru',
                'ahli_daftars.noKPLama',
                'ahli_berhentis.tarikhMohon',
                'ahli_berhentis.statusBerhenti',
                'ahli_berhentis.created_at',
                'ahli_berhentis.updated_at',
            )
            ->where('ahli_daftars.noAhli', 'LIKE', "%".$carian."%")
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
                'ahli_daftars.noKPLama',
                'ahli_berhentis.tarikhMohon',
                'ahli_berhentis.statusBerhenti',
                'ahli_berhentis.sebabBerhenti',
                'ahli_berhentis.statusKelulusan',
                'ahli_berhentis.tarikhLulus',
                'ahli_berhentis.tarikhBerhenti',
                'ahli_berhentis.created_at',
                'ahli_berhentis.updated_at',
            )
            ->where('ahli_daftars.noKPBaru', $noKPBaru)
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
//1719