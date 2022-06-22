<?php

namespace App\Http\Controllers;

use App\Models\ahli_syarikat;
use App\Models\kakitangan_alamat;
use App\Models\kakitangan_bank;
use App\Models\kakitangan_daftar;
use App\Models\kakitangan_individu;
use App\Models\kakitangan_pekerjaan;
use App\Models\kakitangan_pendidikan;
use App\Models\kakitangan_perhubungan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KakitanganController extends Controller
{
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
            $cariP = $_POST['cariP'];
            $jenisCariP = $_POST['jenisCariP'];
            $cariPG = $_POST['cariPG'];
            $jenisCariPG = $_POST['jenisCariPG'];
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
                "cariP" => $cariP,
                "cariPG" => $cariPG,
                "jenisCariP" => $jenisCariP,
                "jenisCariPG" => $jenisCariPG,
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

        $pejabat = new ahli_syarikat();

        $pejabat->noStaff = $request->noStaff;
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

        $staff->save();
        $alamat2->save();
        $bank2->save();
        $perhubungan->save();
        $pekerjaan->save();
        $pendidikan->save();
        $pejabat->save();

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

        $staff = kakitangan_daftar::where($jenisCarian, 'LIKE', '%' . $carian . '%')->get();

        return view('kakitangan.maklumatStaff2', compact('staff'));
    }

    public function maklumatStaffHasil($noKPBaru)
    {
        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil', compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
    }

    public function maklumatStaffKemaskini(Request $request, $noKPBaru)
    {
        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pejabat = ahli_syarikat::where("noKPBaru", $noKPBaru)->first();

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffKemaskini', compact('staff', 'pekerjaan', 'pejabat', 'saudara'));
    }

    public function kemaskiniStaff(Request $request, $noKPBaru)
    {
        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pejabat = ahli_syarikat::where("noKPBaru", $noKPBaru)->first();

        $staff->noStaff = $request->noStaff;
        $staff->nama = $request->nama;
        $staff->noKPBaru = $request->noKPBaru;
        $staff->noKPLama = $request->noKPLama;
        $staff->jantina = $request->jantina;
        $staff->bangsa = $request->bangsa;
        $staff->agama = $request->agama;
        $staff->tarikhLahir = $request->tarikhLahir;
        $staff->tempatLahir = $request->tempatLahir;
        $pekerjaan->bahagian = $request->bahagian;
        $pekerjaan->jawatan = $request->jawatan;
        $pekerjaan->statusKerja = $request->statusKerja;
        $pekerjaan->noGaji = $request->noGaji;
        $pekerjaan->gaji = $request->gaji;
        $pekerjaan->potongan = $request->potongan;
        $pekerjaan->tarikhMulaKerja = $request->tarikhMulaKerja;
        $pekerjaan->tarikhAkhirKerja = $request->tarikhAkhirKerja;
        $pekerjaan->statusStaff = $request->statusStaff;
        $pejabat->noStaff = $request->noStaff;
        $pejabat->cariP = $request->cariP;
        $pejabat->cariPG = $request->cariPG;
        $pejabat->jenisCariP = $request->jenisCariP;
        $pejabat->jenisCariPG = $request->jenisCariPG;
        $pejabat->noKPBaru = $request->noKPBaru;

        $staff->save();
        $pekerjaan->save();
        $pejabat->save();

        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'pejabat', 'saudara'));
    }

    public function padamAlamatStaff($noKPBaru)
    {
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->delete();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
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

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
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

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
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

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
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

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
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

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
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

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
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

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
    }

    public function padamTelRStaff(Request $request, $noKPBaru)
    {
        $perhubungan = kakitangan_perhubungan::where('noKPBaru', $noKPBaru)->first();

        $reset = " ";
        $perhubungan->telRumah = $request->$reset;

        $perhubungan->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
    }

    public function padamTelPStaff(Request $request, $noKPBaru)
    {
        $perhubungan = kakitangan_perhubungan::where('noKPBaru', $noKPBaru)->first();

        $reset = " ";
        $perhubungan->telPejabat = $request->$reset;

        $perhubungan->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
    }

    public function padamTelHPStaff(Request $request, $noKPBaru)
    {
        $perhubungan = kakitangan_perhubungan::where('noKPBaru', $noKPBaru)->first();

        $reset = " ";
        $perhubungan->telHP = $request->$reset;

        $perhubungan->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
    }

    public function padamFaksStaff(Request $request, $noKPBaru)
    {
        $perhubungan = kakitangan_perhubungan::where('noKPBaru', $noKPBaru)->first();

        $reset = " ";
        $perhubungan->faks = $request->$reset;

        $perhubungan->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
    }

    public function padamEmailStaff(Request $request, $noKPBaru)
    {

        $perhubungan = kakitangan_perhubungan::where('noKPBaru', $noKPBaru)->first();

        $reset = " ";
        $perhubungan->email = $request->$reset;

        $perhubungan->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
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

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
    }

    public function padamBankStaff($noKPBaru)
    {
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->delete();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
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

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
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

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
    }

    public function padamPendidikanStaff($noKPBaru)
    {
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->delete();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
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

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
    }

    public function daftarSaudara(Request $request, $noKPBaru)
    {
        $saudara = new kakitangan_individu();

        $saudara->noStaff = $request->noStaff;
        $saudara->noKPBaru = $request->noKPBaru;
        $saudara->cariIndi = $request->cariIndi;
        $saudara->jenisCariIndi = $request->jenisCariIndi;
        $saudara->jenisHubungan = $request->jenisHubungan;
        $saudara->pewaris = $request->pewaris;
        $saudara->pemegangWasiat = $request->pemegangWasiat;
        $saudara->user_id = Auth::user()->id;

        $saudara->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.noKPBaru',
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
    }

    public function updateSaudara(Request $request, $noKPBaru)
    {
        $saudara = kakitangan_individu::where("noKPBaru", $noKPBaru)->first();

        $saudara->noStaff = $request->noStaff;
        $saudara->noKPBaru = $request->noKPBaru;
        $saudara->cariIndi = $request->cariIndi;
        $saudara->jenisCariIndi = $request->jenisCariIndi;
        $saudara->jenisHubungan = $request->jenisHubungan;
        $saudara->pewaris = $request->pewaris;
        $saudara->pemegangWasiat = $request->pemegangWasiat;

        $saudara->save();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.noKPBaru',
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();


        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
    }

    public function padamSaudara(Request $request, $noKPBaru)
    {
        $saudara = kakitangan_individu::where("noKPBaru", $noKPBaru)->delete();

        $staff = kakitangan_daftar::where("noKPBaru", $noKPBaru)->first();
        $alamat2 = kakitangan_alamat::where("noKPBaru", $noKPBaru)->first();
        $perhubungan = kakitangan_perhubungan::where("noKPBaru", $noKPBaru)->first();
        $pekerjaan = kakitangan_pekerjaan::where("noKPBaru", $noKPBaru)->first();
        $pendidikan = kakitangan_pendidikan::where("noKPBaru", $noKPBaru)->first();
        $bank2 = kakitangan_bank::where("noKPBaru", $noKPBaru)->first();

        $saudara = DB::table('kakitangan_individus')
            ->join('individu_daftars', 'kakitangan_individus.cariIndi', '=', 'individu_daftars.noKP')
            //->join('individu_daftars', 'ahli_individus.cariIndi', '=', 'individu_daftars.nama')
            ->select(
                'kakitangan_individus.cariIndi',
                'kakitangan_individus.jenisCariIndi',
                'kakitangan_individus.jenisHubungan',
                'kakitangan_individus.pewaris',
                'kakitangan_individus.pemegangWasiat',
                'individu_daftars.nama',
                'individu_daftars.noKP',
            )
            ->where('kakitangan_individus.noKPBaru', $noKPBaru)
            ->first();

        return view('kakitangan.maklumatStaffHasil')->with(compact('staff', 'alamat2', 'bank2', 'perhubungan', 'pekerjaan', 'pendidikan', 'saudara'));
    }
}
