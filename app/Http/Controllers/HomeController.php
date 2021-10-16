<?php

namespace App\Http\Controllers;

use App\Models\Registrasi;
use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->Registrasi = new Registrasi();
        $this->Antrian = new Antrian();
    }

    public function index()
    {
        return view('home');
    }

    public function regis()
    {
        $regisList = Registrasi::all();
        $antriList = Antrian::all();

        return view('regis', [
            'regisList' => $regisList,
            'antriList' => $antriList
        ]);
    }

    public function regisAdd(Request $request)
    {
        DB::beginTransaction();
        //try {
        $regis = new Registrasi;
        $regis->nik = $request->nikRegis;
        $regis->nama = $request->namaRegis;
        $regis->alamat = $request->alamatRegis;
        $regis->save();

        $dataAntrian = [

            'reg_id' => $this->Registrasi->getLast()->id_registrasi,
            'nama_poli' => Request()->nama_poli,
        ];

        $this->Antrian->addAntrian($dataAntrian);

        DB::commit();
        //} catch (\Throwable $th) {

        //    DB::rollback();
        //    return redirect('regis')->with('status', 'Terjadi Kesalahan');
        // }
        return redirect('regis');
    }
}
