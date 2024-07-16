<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use App\Models\Ucapan;
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
        $ucapan = Ucapan::paginate(10);
        return view('home', compact('undangan', 'ucapan'));
    }

    public function rsvp(Request $request)
    {
        dd($request->all());
        if ($request->nama) {
            if (!Kehadiran::where('nama_lengkap', $request->nama)->exists()) {
                Kehadiran::create([
                    'nama_lengkap' => $request->nama,
                    'alamat' => $request->alamat,
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

    public function ucapan(Request $request)
    {
        if ($request->pengirim) {
            if (!Ucapan::where('pengirim', $request->pengirim)->exists()) {
                Ucapan::create([
                    'pengirim' => $request->pengirim,
                    'ucapan' => $request->ucapan,
                    'ip_address' => $request->ip(),
                ]);
                return response()->json(['status' => 'success', 'message' => 'Ucapan berhasil dikirim!'], 200);
            } else {
                return response()->json(['status' => 'failed', 'message' => 'Anda sudah mengirim ucapan!'], 200);
            }
        }
        return response()->json(['status' => 'failed', 'message' => 'Terjadi kesalahan!'], 201);
    }
}
