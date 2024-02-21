<?php

namespace App\Http\Controllers;

use App\Models\Cabor;
use App\Models\Pelatih;
use Illuminate\Http\Request;

class PelatihController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelatihs = Pelatih::all();

        return view('pelatih.index', compact('pelatihs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataCabor = Cabor::all();
        return view('pelatih.create', compact('dataCabor'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_pelatih'=>'required',
            'cabor_pelatih'=>'required'
        ]);

        $pelatih = Pelatih::create([
            'name_pelatih'=>$request->name_pelatih,
            'cabor_pelatih'=>$request->cabor_pelatih
        ]);

        if($pelatih){
            return redirect()->route('pelatih.index')->with(['success', 'Data Pelatih Berhasil Ditambah']);
        }else {
            return redirect()->route('pelatih.create')->with(['error', 'Data Pelatih Gagal Ditambah']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detailPelatih = Pelatih::find($id);
        return view('pelatih.show', compact('detailPelatih'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $detailPelatih = Pelatih::find($id);
        $dataCabor = Cabor::all();
        return view('pelatih.edit', compact('detailPelatih', 'dataCabor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'name_pelatih'=>'required',
            'cabor_pelatih'=>'required'
        ]);

        $updatePelatih = Pelatih::find($id);

        $update = $updatePelatih->update([
            'name_pelatih'=>$request->name_pelatih,
            'cabor_pelatih'=>$request->cabor_pelatih
        ]);

        if($update){
            return redirect()->route('pelatih.index')->with(['success','Data Pelatih Berhasil Diupdate']);
        }else{
            return redirect()->route('pelatih.index')->with(['error', 'Data Pelatih Gagal Diupdate']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deletePelatih = Pelatih::find($id);

        $deletePelatih->delete();

        return redirect()->route('pelatih.index');
    }
}
