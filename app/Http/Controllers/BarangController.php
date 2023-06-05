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
        $barang = Barang::with('Kategoribarang', 'Gudangbarang')->paginate(100);

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
        $this->validate($request, [
            'nama_barang' => 'required|min:3',
        ]);

        $data = [
            'id_kategori_barang' => $request->input('id_kategori_barang'),
            'id_gudang' => $request->input('id_gudang'),
            'nama_barang' => $request->input('nama_barang'),
            'harga_barang' => $request->input('harga_barang'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        $barang = Barang::create($data);

        return redirect()->back()->with('success', 'Barang Berhasil Ditambahkan');
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
        $this->validate($request, [
            'nama_barang' => 'required|min:3',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->id_kategori_barang = $request->id_kategori_barang;
        $barang->id_gudang = $request->id_gudang;
        $barang->nama_barang = $request->nama_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->save();

        return redirect()->route('barang.index')->with('success', 'Barang Berhasil Di Edit');
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->back()->with('success', 'Barang Berhasil Dihapus (Silahkan Cek Trash Barang)');
    }

    public function tampil_hapus()
    {
        $barang = Barang::onlyTrashed()->paginate(10);
        return view('barang.deleted', compact('barang'));
    }

    public function restore($id)
    {
        $barang = Barang::withTrashed()->where('id', $id)->first();
        $barang->restore();

        return redirect()->back()->with('success', 'Barang Berhasil Restore (Silahkan Cek Di List Barang)');
    }
}
