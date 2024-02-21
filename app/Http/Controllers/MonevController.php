<?php

namespace App\Http\Controllers;

use App\Models\Atlet;
use App\Models\Atletpres;
use App\Models\Average;
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
            'cabor_monev'=>$request->cabor_monev
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
        $dataAtlet = Atlet::where('cabor_atlet', $caborMonev)->get();
        $dataPelatih = Pelatih::where('cabor_pelatih', $caborMonev)->get();

        $totalAtlet = $dataAtlet->count();
        $totalPelatih = $dataPelatih->count();

        return view('monev.createpres', compact('idMonev', 'dataAtlet', 'dataPelatih', 'totalAtlet','totalPelatih'));
    }

    public function storePres(Request $request, $idMonev){
        $totalAtlet = $request->total_atlet;
        $totalPelatih = $request->total_pelatih;
        for ($i=1; $i < $totalAtlet; $i++) {
            $ambilmonevId = Atletpres::create([
                'name_atletpres'=>$request->name_atlet.$i,
                'value_atletpres'=>$request->value_atlet.$i,
                'keterangan_atletpres'=>$request->keterangan_atlet.$i,
                'monev_id'=>$idMonev
            ]);
        };

        for ($i=1; $i < $totalPelatih; $i++) {
            $ambilmonevId = Pelatihpres::create([
                'name_pelatihpres'=>$request->name_pelatih.$i,
                'value_pelatihpres'=>$request->value_pelatih.$i,
                'keterangan_pelatihpres'=>$request->keterangan_pelatih.$i,
                'monev_id'=>$idMonev
            ]);
        };

        return redirect()->route('createAverage', compact('monev_id'));
    }

    public function createAverage ($monev_id)
    {
        $monev = Monev::find($monev_id);
        return view('monev.createaverage', compact('monev'));
    }

    public function storeAverage(Request $request, $idMonev){
        $ambilmonevId = Average::create([
            'name_average'=>"Average1",
            'id_monev'=>$idMonev,
            'value_average'=>$request->lokasi_monev,
        ]);
        return redirect()->route('monev.index')->with(['success', 'Data Average Berhasil Disimpan']);
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
