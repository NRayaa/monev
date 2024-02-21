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

class MonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $monevs = Monev::all();
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
        //
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
