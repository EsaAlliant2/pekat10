<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use App\Models\pengaduan;
use App\Models\petugas;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $petugas = Petugas::all()->count();
        $masyarakat = Masyarakat::all()->count();
        $proses = Pengaduan::where('status', 'proses')->get()->count();
        $selesai = Pengaduan::where('status', 'selesai')->get()->count();

        return view('Dashboard', ['petugas' => $petugas, 'masyarakat' => $masyarakat, 'proses' => $proses, 'selesai' => $selesai]);
    }
}
