<?php

namespace App\Http\Controllers;

use App\Models\Atlet;
use App\Models\Atletpres;
use App\Models\Cabor;
use App\Models\Monev;
use App\Models\Pelatih;
use App\Models\Pelatihpres;
use Illuminate\Http\Request;

class MonevController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $monevs = Monev::all();
        // dd($monevs);
        return view('monev.index', compact('monevs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataCabor = Cabor::all();
        return view('monev.create', compact('dataCabor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'lokasi_monev'=>'required',
            'date_monev'=>'required',
            'cabor_monev'=>'required'
        ]);

        $monev = Monev::create([
            'lokasi_monev'=>$request->lokasi_monev,
            'date_monev'=>$request->date_monev,
            'cabor_monev'=>$request->date_monev
        ]);

        $idMonev = $monev->id;
        $caborMonev = $monev->cabor_monev;



        if($monev){
            return redirect()->route('monev.createpres', compact('idMonev', 'caborMonev'))->with(['success', 'Data Base Monv Berhasil Disimpan']);
        }else{
            return redirect()->route('monev.create')->with(['error', 'Data Base Monv Gagal Disimpan']);
        }
    }

    public function createPres($idMonev, $caborMonev){

        $monevId = Monev::find($idMonev);
        $dataAtlet = Atlet::where('cabor_atlet', $caborMonev);
        $dataPelatih = Pelatih::where('cabor_pelatih', $caborMonev);

        $totalAtlet = $dataAtlet->count();
        $totalPelatih = $dataPelatih->count();

        dd($idMonev);

        return view('test', compact('idMonev', 'dataAtlet', 'dataPelatih', 'totalAtlet','totalPelatih'));

    }

    public function storePres(Request $request, $idMonev){
        $this->validate($request, [
            // Presensi Atlet
            'name_atletpres'=>'required',
            'value_atletpres'=> 'required',
            'keterangan_atletpres'=>'nullable',
            'monev_id'=>'required',

            // Presensi Pelatih
            'name_pelatihpres'=>'required',
            'value_pelatihpres'=>'required',
            'keterangan_pelatihpres'=>'nullable',
            'monev_id'=>'required'
        ], [
            'value_atletpres.required'=>'Presensi Harus Diisi',
            'keterangan_pelatihpres'=>'Presensi Harus Diisi'
        ]);

        $idMonev = $request->input('monev_id');

        foreach ($request->input('atlet') as $atletpresData){
            $ambilmonevId = Atletpres::create([
                'name_atletpres'=>$atletpresData['name'],
                'value_atletpres'=>$atletpresData['value'],
                'keterangan_atletpres'=>$atletpresData['keterangan'],
                'monev_id'=>$idMonev
            ]);
        }

        foreach ($request->input('pelatih') as $pelatihpresData) {
            Pelatihpres::create([
                'name_pelatihpres'=>$pelatihpresData['name'],
                'value_pelatihpres'=>$pelatihpresData['value'],
                'keterangan_pelatihpres'=>$pelatihpresData['keterangan'],
                'monev_id'=>$idMonev
            ]);
        }

        $monev_id = $ambilmonevId->monev_id;

        return redirect()->route('createAverage', compact('monev_id'));
    }

    public function createAverage ($monev_id){

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
