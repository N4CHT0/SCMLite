<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Gudang;
use App\Models\KategoriBarang;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::with('Kategoribarang', 'Gudangbarang')->paginate(5);

        return view('barang.index', [
            'barang' => $barang,
        ]);
    }

    public function addView()
    {
        $kategori_ = KategoriBarang::all();
        $gudang_ = Gudang::all();
        return view('barang.create', compact('kategori_', 'gudang_'));
    }

    public function store(Request $request)
    {
        $data = [
            'id_kategori_barang' => $request->input('id_kategori_barang'),
            'id_gudang' => $request->input('id_gudang'),
            'nama_barang' => $request->input('nama_barang'),
            'harga_barang' => $request->input('harga_barang'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        Barang::create($data);

        return redirect('/barang');
    }

    public function edit($id)
    {
        $kategori_ = KategoriBarang::all();
        $gudang_ = Gudang::all();
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang', 'kategori_', 'gudang_', ));
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->save();

        return redirect('/barang');
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect('/barang');
    }
}
