<?php

namespace App\Http\Controllers;

use App\Models\Undangan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UndanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $self = Auth::user();
        if ($self->role == 'Admin') {
            $data = Undangan::with('user')->get();
        } else {
            $data = Undangan::where('user_id',$self->id)->with('user')->get();
        }
        
        return view('undangan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $self = Auth::user();
        $users = User::select('id', 'name')->where('role', 'Operator')->get();
        return view('undangan.form', compact('self', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $self = User::findOrFail($request->user);
        $file = $request->file('file');
        if (@$self->id && $file) {
            $fileContents = file($file->getPathname());
    
            foreach ($fileContents as $line) {
                $data = str_getcsv($line);
    
                Undangan::updateOrCreate([
                    'nama_lengkap' => $data[0],
                    'user_id' => $self->id,
                ]);
            }
            return redirect()->route('undangan')->with('success', 'Data berhasil di-import.');
        }
        return redirect()->back()->with('warning', 'Proses gagal.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
