<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function index()
    {
        $gudang = Gudang::paginate(100);

        return view('gudang.index', [
            'gudang' => $gudang,
        ]);
    }

    public function addView()
    {
        return view('gudang.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_gudang' => 'required|min:3',
        ]);

        $data = [
            'nama_gudang' => $request->input('nama_gudang'),
            'alamat_gudang' => $request->input('alamat_gudang'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        $gudang = Gudang::create($data);

        return redirect()->back()->with('success', 'Gudang Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $gudang = Gudang::findOrFail($id);
        return view('gudang.edit', compact('gudang'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_gudang' => 'required|min:3',
        ]);

        $gudang = Gudang::findOrFail($id);
        $gudang->nama_gudang = $request->nama_gudang;
        $gudang->alamat_gudang = $request->alamat_gudang;
        $gudang->save();

        return redirect()->route('gudang.index')->with('success', 'Gudang Berhasil Di Edit');
    }

    public function destroy($id)
    {
        $gudang = Gudang::findOrFail($id);
        $gudang->delete();
        return redirect()->back()->with('success', 'Gudang Berhasil Dihapus (Silahkan Cek Trash Gudang)');
    }
}
