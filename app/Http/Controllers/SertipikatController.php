<?php

namespace App\Http\Controllers;

use App\Models\Sertipikat;
use Illuminate\Http\Request;


class SertipikatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.sertipikat.index', [
            'sertipikat' => sertipikat::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.sertipikat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'no' => ['required', 'min:5'],
            'desa' => ['required'],
            'luas' => ['required'],
            'nama' => ['required']
        ]);

        sertipikat::create($validateData);
        return redirect('/dashboard/sertipikat')->with('success', 'Data Berhasil Disimpan!');
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
    public function edit(sertipikat $sertipikat)
    {
        return view('dashboard.sertipikat.edit', [
            'sertipikat' => $sertipikat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sertipikat $sertipikat)
    {
        $validateData = $request->validate([
            'no' => ['required', 'min:5'],
            'desa' => ['required'],
            'luas' => ['required'],
            'nama' => ['required']
        ]);

        sertipikat::where('id', $sertipikat->id)
            ->update($validateData);

        return redirect('/dashboard/sertipikat')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        sertipikat::destroy($id);
        return redirect('/dashboard/sertipikat');
    }
}
