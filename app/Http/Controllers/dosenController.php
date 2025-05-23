<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class dosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //menampilkan data dosen
        $dosen = Dosen::all();
        $nomor = 1;
        return view('Dosen.index', compact('dosen','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //menampilkan form tambah
        return view('Dosen.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //proses tambah
        $dosen = new Dosen;
        $dosen->nidn = $request->nidn;
        $dosen->nama = $request->nama;
        $dosen->email = $request->email;
        $dosen->rumpun = $request->rumpun;
        $dosen->noHp = $request->noHp;
         $dosen->save();

        return redirect('/dosen');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //menampilkan
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Form edit
        $dosen = Dosen::find($id);
        return view('Dosen.edit',compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // proses edit
        $dosen = Dosen::find($id);
        $dosen->nidn = $request->nidn;
        $dosen->nama = $request->nama;
        $dosen->email = $request->email;
        $dosen->rumpun = $request->rumpun;
        $dosen->nohp = $request->nohp;
        $dosen->save();


        return redirect('/dosen');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delate    {
        // proses hapus
        $dosen = Dosen::find($id);
        $dosen->delete();

        return redirect('/dosen');
    }
}
