<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
public function index()
{
    $areas = DB::table('area_parkir')->get(); // Ambil semua data
    return view('index', compact('areas')); // Kirim ke view
}


}