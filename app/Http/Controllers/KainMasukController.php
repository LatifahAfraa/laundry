<?php

namespace App\Http\Controllers;

use App\Models\KainMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function GuzzleHttp\Promise\all;

class KainMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masuk= KainMasuk::all();
        return view('pages/KainMasuk/list', compact('masuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.KainMasuk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required|string',
            'jenis' => 'required|string',
            'berat' => 'required|numeric',
            'harga' => 'required|string',
            'satuan' =>'nullable|string',
            'hargas' => 'nullable|string',
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->errors()->first());
        }
        $masuk= KainMasuk::create([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'berat' => $request->berat,
            'harga' => $request->harga,
            'satuan' => $request->satuan,
            'hargas' => $request->hargas,
        ]);
        return redirect()->route('KainMasuk.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
