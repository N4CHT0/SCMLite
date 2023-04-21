<?php

namespace App\Http\Controllers;

use App\Models\Truk;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrukController extends Controller
{
    public function index()
    {
        $truk = Truk::paginate(5);

        return view('truk.index', [
            'truk' => $truk,
        ]);
    }

    public function addView()
    {
        return view('truk.create');
    }

    public function store(Request $request)
    {
        $data = [
            'nomor_polisi' => $request->input('nomor_polisi'),
            'kapasitas' => $request->input('kapasitas'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        Truk::create($data);

        return redirect()->route('truk.index');
    }

    public function edit($id)
    {
        $truk = Truk::findOrFail($id);
        return view('truk.edit', compact('truk'));
    }

    public function update(Request $request, $id)
    {
        $truk = Truk::findOrFail($id);
        $truk->nomor_polisi = $request->nomor_polisi;
        $truk->kapasitas = $request->kapasitas;
        $truk->save();

        return redirect('/truk');
    }

    public function destroy($id)
    {
        $truk = Truk::findOrFail($id);
        $truk->delete();
        return redirect('/truk');
    }
}
