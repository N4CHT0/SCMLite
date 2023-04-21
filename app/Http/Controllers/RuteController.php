<?php

namespace App\Http\Controllers;

use App\Models\Rute;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RuteController extends Controller
{
    public function index()
    {
        $rute = Rute::paginate(5);

        return view('rute.index', [
            'rute' => $rute,
        ]);
    }

    public function addView()
    {
        return view('rute.create');
    }

    public function store(Request $request)
    {
        $data = [
            'kota_asal' => $request->input('kota_asal'),
            'kota_tujuan' => $request->input('kota_tujuan'),
            'jarak_rute' => $request->input('jarak_rute'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        Rute::create($data);

        return redirect()->route('rute.index');
    }

    public function edit($id)
    {
        $rute = Rute::findOrFail($id);
        return view('rute.edit', compact('rute'));
    }

    public function update(Request $request, $id)
    {
        $rute = Rute::findOrFail($id);
        $rute->kota_asal = $request->kota_asal;
        $rute->kota_tujuan = $request->kota_tujuan;
        $rute->jarak_rute = $request->jarak_rute;
        $rute->save();

        return redirect('/rute');
    }

    public function destroy($id)
    {
        $rute = Rute::findOrFail($id);
        $rute->delete();
        return redirect('/rute');
    }
}
