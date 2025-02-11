<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKategoriRequest;
use App\Models\Katergori;
use Exception;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       $kategori = katergori::all();

       return view('adm.inputkategori', ['kat' => $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKategoriRequest $request)
    {
        //
        try{
            $param = $request->validated();
            // dd($param);
            Katergori::create($param);
    
            return redirect() ->route('ADM.inputkategori') ->with('success','DATA BERHASIL, BERHASIL HORE, WE DID IT');
        }
        catch(\Exception $error){
            return redirect()->route('ADM.inputkategori')->with('error', $error->getMessage());
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
