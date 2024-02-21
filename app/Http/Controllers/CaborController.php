<?php

namespace App\Http\Controllers;

use App\Models\Atlet;
use App\Models\Cabor;
use App\Models\Pelatih;
use Illuminate\Auth\Events\Validated;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CaborController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cabors = Cabor::all();

        return view('cabor.index', compact('cabors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('cabor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_cabor' => 'required'
        ]);

        $postCabor = Cabor::create([
            'name_cabor' => $request->name_cabor
        ]);

        if($postCabor){
            return redirect()->route('cabor.index')->with(['success', 'Data Cabor Berhasil Disimpan']);
        }else {
            return redirect()->route('cabor.create')->with(['error', 'Data Cabor Gagal Disimpan']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detailCabor = Cabor::find($id);
        $atletCabor = Atlet::where('cabor_atlet', $detailCabor->name_cabor)->get();
        $pelatihCabor = Pelatih::where('cabor_pelatih', $detailCabor->name_cabor)->get();

        return view('cabor.show', compact('detailCabor', 'atletCabor', 'pelatihCabor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $detailCabor = Cabor::find($id);

        return view('cabor.edit', compact('detailCabor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name_cabor' => 'required'
        ]);

            $updateCabor = Cabor::findOrFail($id);

            $update = $updateCabor->update([
                'name_cabor'=>$request->name_cabor
            ]);

            if($update){
                return redirect()->route('cabor.index')->with(['success', 'Data Cabor Berhasil Diupdate']);
            } else {
                return redirect()->route('cabor.edit')->with(['error', 'Data Cabor Gagal Diupdate']);
            }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteCabor = Cabor::find($id);

        $deleteCabor->delete();

        return redirect()->route('cabor.index')->with(['success', 'Data Cabor Berhasil Dihapus']);
    }
}
