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

class TestController extends Controller
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
        $dataCabor = Cabor::all();
        $dataAtlet = Atlet::all();
        $dataPelatih = Pelatih::all();
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
            'cabor_monev'=>'required',

            'name_atletpres'=>'required',
            'value_atletpres'=>'required',
            'monev_id'=>'required',

            'name_pelatihpres'=>'required',
            'value_pelatihpres'=>'required',
            'monev_id'=>'required',

            'name_average'=>'required',
            'value_average'=>'required',
            'monev_id'=>'required',
        ]);

        $monev = Monev::create([
            'lokasi_monev'=>$request->lokasi_monev,
            'date_monev'=>$request->date_monev,
            'cabor_monev'=>$request->cabor_monev,
        ]);

        $idMonev = $monev->id;

        foreach ($request->input('atlet') as $atletpresData){
        Atletpres::create([
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

        foreach ($request->input('average') as $average) {
            Average::create([
                'name_average'=>$average['name'],
                'value_average'=>$average['value'],
                'monev_id'=>$idMonev
            ]);
        }



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
