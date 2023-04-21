<?php

namespace App\Http\Controllers;

use App\Models\Supir;
use App\Models\Truk;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SupirController extends Controller
{
    public function index()
    {
        $supir = Supir::with('Rtruk')->paginate(5);

        return view('supir.index', [
            'supir' => $supir,
        ]);
    }

    public function addView()
    {
        $truk_ = Truk::all();
        return view('supir.create', compact('truk_'));
    }

    public function store(Request $request)
    {
        $data = [
            'id_truk' => $request->input('id_truk'),
            'nama_supir' => $request->input('nama_supir'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        Supir::create($data);

        return redirect()->route('supir.index');
    }

    public function edit($id)
    {
        $truk_ = Truk::all();
        $supir = Supir::findOrFail($id);
        return view('supir.edit', compact('supir', 'truk_'));
    }

    public function update(Request $request, $id)
    {
        $supir = Supir::findOrFail($id);
        $supir->nama_supir = $request->nama_supir;
        $supir->nomor_telepon = $request->nomor_telepon;
        $supir->save();

        return redirect('/supir');
    }

    public function destroy($id)
    {
        $supir = Supir::findOrFail($id);
        $supir->delete();
        return redirect('/supir');
    }
}
