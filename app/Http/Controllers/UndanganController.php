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
            $data = Undangan::where('user_id', $self->id)->with('user')->get();
        }

        return view('undangan.index', compact('data'));
    }

    public function create()
    {
        $self = Auth::user();
        $users = User::select('id', 'name')->where('role', 'Operator')->get();
        return view('undangan.form', compact('self', 'users'));
    }

    public function store(Request $request)
    {
        $self = User::findOrFail($request->user);
        if (@$request->nama) {
            if (Undangan::where('user_id', $self->id)->where('nama_lengkap', $request->nama)->exists()) {
                return redirect()->back()->withErrors('Nama sudah ada');
            } else {
                $record = Undangan::create([
                    'nama_lengkap' => @$request->nama,
                    'user_id' => $self->id,
                ]);

                if (@$record) {
                    return redirect()->route('undangan');
                }
            }
        }
        return redirect()->back()->withInput();
    }

    public function import()
    {
        $self = Auth::user();
        $users = User::select('id', 'name')->where('role', 'Operator')->get();
        return view('undangan.import', compact('self', 'users'));
    }

    public function proccessImport(Request $request)
    {
        $self = User::findOrFail($request->user);
        $file = $request->file('file');
        if (@$self->id && $file) {
            $fileContents = file($file->getPathname());

            foreach ($fileContents as $line) {
                $data = str_getcsv($line);
                if (@$data[0]) {
                    Undangan::updateOrCreate([
                        'nama_lengkap' => $data[0],
                        'user_id' => $self->id,
                    ]);
                }
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
