<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\User;
use Brick\Math\BigInteger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasienController extends Controller
{
    public function update_pasien(Request $request)
    {
        // dd($request->all());

        $user = User::findOrFail($request->idUser);

        $pasien = Pasien::where('idUser', $request->idUser);
        $updateData = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        // Conditionally update password if provided


        $user->update($updateData);
        $pasien->update([
            'tempatLahir' =>$request->tempatLahir,
            'tanggalLahir' =>$request->tanggalLahir,
            'noIdentitas' =>$request->noIdentitas,
            'nomorRumah' =>$request->nomorRumah,
            'nomorHp' =>$request->nomorHp,
            'namaKontakDarurat' =>$request->namaKontakDarurat,
            'nomorDarurat' =>$request->nomorDarurat,
            'kewarganegaraan' =>$request->kewarganegaraan,
            'alergi' =>$request->alergi,
            'golonganDarah' =>$request->golonganDarah,
            'tinggiBadan' =>$request->tinggiBadan,
            'beratBadan' =>$request->beratBadan
        ]);


        return redirect()->route('show_list_pasien')->with('success','Pasien berhasil diupdate');
    }
    /**
     * Display a listing of the resource.
     */

     public function pasienFromUser(){
        // $user = User::where('role','pasien')->get();
        // $pasien = Pasien::all();
        // dd($pasien);

        $usersWithPasien = User::join('pasien', 'users.id', '=', 'pasien.idUser')
            ->where('users.role', 'pasien')
            ->get(['users.*', 'pasien.*']);

        // dd($usersWithPasien);

        return view('karyawan.list-pasien', compact('usersWithPasien'));
     }
    public function index()
    {
        $pasien = Pasien::all();

        return view('karyawan.list-pasien', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(int $userId, Request $request)
    {
        //
        // dd($request->all());

        Pasien::create([
            'idUser' =>$userId,
            'tempatLahir' =>$request->tempatLahir,
            'tanggalLahir' =>$request->tanggalLahir,
            'noIdentitas' =>$request->noIdentitas,
            'tipeIdentitas' =>$request->tipeIdentitas,
            'jenisKelamin' =>$request->jenisKelamin,
            'pekerjaan' =>$request->pekerjaan,
            'alamat' =>$request->alamat,
            'kota' =>$request->kota,
            'nomorRumah' =>$request->nomorRumah,
            'nomorHp' =>$request->nomorHp,
            'namaKontakDarurat' =>$request->namaKontakDarurat,
            'nomorDarurat' =>$request->nomorDarurat,
            'kewarganegaraan' =>$request->kewarganegaraan,
            'statusPerkawinan' =>$request->statusPerkawinan,
            'tanggalDaftar' =>$request->input('tanggalDaftar'),
            'alergi' =>$request->alergi,
            'golonganDarah' =>$request->golonganDarah,
            'tinggiBadan' =>$request->tinggiBadan,
            'beratBadan' =>$request->beratBadan,

        ]);

        return redirect(route('pasien.dashboard-pasien', absolute:false));
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        //
        $pasien->delete();

        return redirect()->route('isi_nanti')->with('success', 'Pasien berhasil dihapus');
    }

    public function getTotalPasien()
    {
        $totalPasien = DB::table('pasien')->count();
        return $totalPasien;
    }
}
