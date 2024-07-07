<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use App\Models\Undangan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // $undangan = null;
        // if (@$request->undangan) {
        //     if (Undangan::where('nama_lengkap', $request->undangan)->exists()) {
        //         $undangan = $request->undangan;
        //     }
        // }
        $undangan = $request->undangan;
        return view('home', compact('undangan'));
    }

    public function konfirmasi(Request $request)
    {
        if ($request->nama) {
            if (!Kehadiran::where('nama_lengkap', $request->nama)->exists()) {
                Kehadiran::create([
                    'nama_lengkap' => $request->nama,
                    'jumlah' => $request->jumlah,
                    'status_hadir' => @$request->status == 'Hadir' ? true : false,
                    'ip_address' => $request->ip(),
                ]);
                return response()->json(['status' => 'success', 'message' => 'Konfirmasi berhasil!'], 200);
            } else {
                return response()->json(['status' => 'failed', 'message' => 'Anda sudah mengkonfirmasi kehadiran!'], 200);
            }
        }
        return response()->json(['status' => 'failed', 'message' => 'Terjadi kesalahan!'], 201);
    }
}
