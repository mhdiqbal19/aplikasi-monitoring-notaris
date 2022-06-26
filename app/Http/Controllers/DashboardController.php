<?php

namespace App\Http\Controllers;

use App\Models\Klien;
use App\Models\Sertipikat;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_klien = Klien::all()->count();
        $jumlah_order_diproses = Order::where('status', 0)->count();
        $jumlah_order = Order::all()->count();
        $jumlah_order_selesai = Order::where('status', 1)->count();

        return view('dashboard.index', [
            'jumlah_klien' => $jumlah_klien,
            'jumlah_order_diproses' => $jumlah_order_diproses,
            'jumlah_order' => $jumlah_order,
            'jumlah_order_selesai' => $jumlah_order_selesai
        ]);
    }
}
