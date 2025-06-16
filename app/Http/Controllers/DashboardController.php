<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $today = date('Y-m-d');

        // Ambil semua area
        $areasRaw = DB::table('area_parkir')->get();
        $areas = [];

        foreach ($areasRaw as $area) {
            $occupied = DB::table('transaksi')
                ->where('area_parkir_id', $area->id)
                ->where('tanggal', $today)
                ->count();

            $remaining = $area->kapasitas - $occupied;

            if ($remaining <= 0) {
                $notification = "Parkiran Penuh";
                $warna = "bg-red-200 border border-red-400";
            } elseif ($remaining <= 10) {
                $notification = "Sisa $remaining slot tersedia";
                $warna = "bg-yellow-200 border border-yellow-400";
            } else {
                $notification = "Sisa $remaining slot tersedia";
                $warna = "bg-blue-200 border border-blue-400";
            }

            $areas[] = [
                'nama' => $area->nama,
                'vehicles_today' => $occupied,
                'kapasitas' => $area->kapasitas,
                'notification' => $notification,
                'warna' => $warna
            ];
        }

        // Statistik
        $total_area = count($areas);
        $total_kapasitas = array_sum(array_column($areas, 'kapasitas'));
        $total_kendaraan = array_sum(array_column($areas, 'vehicles_today'));

        return view('index', compact('areas', 'total_area', 'total_kapasitas', 'total_kendaraan'));
    }
}

