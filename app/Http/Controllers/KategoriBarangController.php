<?php

namespace App\Http\Controllers;

use App\Models\KategoriBarang;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KategoriBarangController extends Controller
{
    public function index()
    {
        $kategori = KategoriBarang::paginate(100);

        return view('kategori.index', [
            'kategori' => $kategori,
        ]);
    }

    public function addView()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kategori_barang' => 'required|min:3',
        ]);

        $data = [
            'nama_kategori_barang' => $request->input('nama_kategori_barang'),
            'deskripsi' => $request->input('deskripsi'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        $kategori = KategoriBarang::create($data);

        return redirect()->back()->with('success', 'Kategori Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $kategori = KategoriBarang::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_kategori_barang' => 'required|min:3',
        ]);

        $kategori = KategoriBarang::findOrFail($id);
        $kategori->nama_kategori_barang = $request->nama_kategori_barang;
        $kategori->deskripsi = $request->deskripsi;
        $kategori->save();

        return redirect()->route('kategori.index')->with('success', 'Kategori Berhasil Di Edit');
    }

    public function destroy($id)
    {
        $kategori = KategoriBarang::findOrFail($id);
        $kategori->delete();
        return redirect()->back()->with('success', 'Barang Berhasil Dihapus (Silahkan Cek Trash Barang)');
    }
}
