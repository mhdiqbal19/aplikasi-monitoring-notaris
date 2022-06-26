<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klien;
use App\Models\Order;
use App\Models\Sertipikat;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.order.index', [
            'order' => order::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.order.create', [
            'klien' => Klien::all(),
            'sertipikat' => Sertipikat::all()
        ]);
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
            'penjual' => ['max:255'],
            'pembeli' => ['max:255'],
            'sertipikat_id' => ['max:255'],
            'tgl_bkd' => ['max:255'],
            'ket_bkd' => ['max:255'],
            'tgl_kpp' => ['max:255'],
            'ket_kpp' => ['max:255'],
            'tgl_bpn' => ['max:255'],
            'no_akta' => ['max:20'],
            'ket_bpn' => ['max:255'],
            'catatan' => ['max:255']
        ]);

        Order::create($validateData);

        return redirect('/dashboard/order')->with('success', 'Data Berhasil Ditambahkan!');
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
    public function edit(Order $order)
    {
        return view('dashboard.order.edit', [
            'order' => $order
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $validateData = $request->validate([
            'penjual' => ['max:255'],
            'pembeli' => ['max:255'],
            'sertipikat_id' => ['max:255'],
            'tgl_bkd' => ['max:255'],
            'ket_bkd' => ['max:255'],
            'tgl_kpp' => ['max:255'],
            'ket_kpp' => ['max:255'],
            'tgl_bpn' => ['max:255'],
            'no_akta' => ['max:20'],
            'ket_bpn' => ['max:255'],
            'catatan' => ['max:255'],
            'status' => ['max:2'],
        ]);

        Order::where('id', $order->id)
            ->update($validateData);

        return back()->with('toast_success', 'Data Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::destroy($id);

        return redirect('/dashboard/order');
    }


    public function selesai()
    {
        return view('dashboard.order.selesai', [
            // 'order' => order::all()
            'order' => order::where('status', 1)->get()
        ]);
    }
}
