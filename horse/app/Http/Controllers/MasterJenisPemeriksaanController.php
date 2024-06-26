<?php

namespace App\Http\Controllers;

use App\Models\MasterJenisPemeriksaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MasterJenisPemeriksaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $data = $request->validate(
        //     [
        //         'kodeModalitas' => 'required|min:5',
        //         'namaJenisPemeriksaan' => 'required',
        //         'kelompokJenisPemeriksaan' => 'required',
        //         'pemakaianKontras' => 'required',
        //         'lamaPemeriksaan' => 'required',
        //     ]
        //     );
            MasterJenisPemeriksaan::create($request->all());
            return redirect()->route('show_jenis_pemeriksaan');
    }
    public function show()
    {
        $joinKodeModalitas = DB::table('master_modalitas')
        ->select('*')
        ->get();
        // dd($joinKodeModalitas);

        $showJenisPemeriksaan = MasterJenisPemeriksaan::latest()->paginate(10);
        // dd($showJenisPemeriksaan->all());
        // "kodeJenisPemeriksaan" => 1
        // "kodeModalitas" => 1
        // "namaJenisPemeriksaan" => "Pemeriksaan CT 1"
    // "kelompokJenisPemerikaan" => "CT"
        // "pemakaianKontras" => "Ya"
        // "lamaPemeriksaan" => 30
        // "created_at" => "2024-06-17 10:12:39"
        // "updated_at" => "2024-06-17 10:12:39"
        // "harga" => 100000.0edi
        return view('karyawan.list-jenis-pemeriksaan', compact('showJenisPemeriksaan', 'joinKodeModalitas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //

    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }


    public function edit(Request $request)
    {
        // dd($request->all());
        // array:8 [▼ // app\Http\Controllers\MasterJenisPemeriksaanController.php:87
        // "_token" => "liXwPakvxiHE7nFHK08XNEoKl5pT13OGywqqzLPn"
        // "kodeJenisPemeriksaan" => "1"
        // "kodeModalitas" => "1"
        // "namaJenisPemeriksaan" => "Pemeriksaan CT 1"
        // "kelompokJenisPemeriksaan" => "CT"
        // "pemakaianKontras" => "Ya"
        // "harga" => "100000"
        // "lamaPemeriksaan" => "30"
        // ]

        $pemeriksaan = MasterJenisPemeriksaan::findOrFail($request->kodeJenisPemeriksaan);
        $pemeriksaan->update($request->all());


        return redirect()->route('show_jenis_pemeriksaan')->with('success','Jenis pemeriksaan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kodeJenisPemeriksaan)
    {
        // dd($request->all());
        MasterJenisPemeriksaan::destroy($kodeJenisPemeriksaan);

        return redirect()->route('show_jenis_pemeriksaan')->with('success', 'Jenis Pemeriksaan berhasil dihapus');
    }
}


