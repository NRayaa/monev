<?php

namespace App\Http\Controllers;

use App\Models\Atlet;
use App\Models\Cabor;
use Illuminate\Http\Request;

class AtletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $atlets = Atlet::all();
        return view('atlet.index', compact('atlets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataCabor = Cabor::all();
        return view('atlet.create', compact('dataCabor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_atlet' => 'required',
            'cabor_atlet' => 'required'
        ]);



        $atlet = Atlet::create([
            'name_atlet' => $request->name_atlet,
            'cabor_atlet'=> $request->cabor_atlet
        ]);

        if($atlet){
            return redirect()->route('atlet.index')->with(['success', 'Data Atlet Berhasil Ditambah']);
        }else {
            return redirect()->route('atlet.create')->with(['error', 'Data Atlet Gagal Ditambah']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detailAtlet = Atlet::find($id);
        $dataCabor = Cabor::all();

        return view('atlet.show', compact('detailAtlet', 'dataCabor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $detailAtlet = Atlet::find($id);
        $dataCabor = Cabor::all();

        return view('atlet.edit', compact('detailAtlet', 'dataCabor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name_atlet' => 'required',
            'cabor_atlet' => 'required'
        ]);

        $updateAtlet = Atlet::find($id);
        $update = $updateAtlet->update([
            'name_atlet'=>$request->name_atlet,
            'cabor_atlet'=>$request->cabor_atlet
        ]);

        if($update){
            return redirect()->route('atlet.index')->with(['success', 'Data Atlet Berhasil Diupdate']);
        } else {
            return redirect()->route('atlet.index')->with(['error', 'Data Atlet Gagal Diupdate']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteAtlet = Atlet::find($id);

        $deleteAtlet->delete();

        return redirect()->route('atlet.index');
    }
}
