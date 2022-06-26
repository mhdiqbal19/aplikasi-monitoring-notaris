<?php

namespace App\Http\Controllers;

use App\Models\Klien;
use Illuminate\Http\Request;

class KlienController extends Controller
{

    public function index()
    {
        return view('dashboard.klien.index', [
            'klien' => klien::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.klien.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => ['required', 'max:255'],
            'no_ktp' => ['required', 'min:16', 'unique:kliens'],
            'alamat' => ['required', 'min:0', 'max:255']
        ]);

        klien::create($validateData);

        return redirect('/dashboard/klien')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function edit(Klien $klien)
    {
        return view('dashboard.klien.edit', [
            'klien' => $klien
        ]);
    }

    public function update(Request $request, Klien $klien)
    {
        $validateData = $request->validate([
            'nama' => ['required', 'max:255'],
            'no_ktp' => ['required', 'min:16'],
            'alamat' => ['required', 'max:255']
        ]);

        klien::where('id', $klien->id)
            ->update($validateData);

        return redirect('/dashboard/klien')->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        klien::destroy($id);

        return redirect('/dashboard/klien');
    }
}
