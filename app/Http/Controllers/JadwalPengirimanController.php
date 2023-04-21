<?php

namespace App\Http\Controllers;

use App\Models\JadwalPengiriman;
use App\Models\KategoriBarang;
use App\Models\Outlet;
use App\Models\Pengiriman;
use App\Models\Rute;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JadwalPengirimanController extends Controller
{
    public function index()
    {
        $jadwal_pengiriman = JadwalPengiriman::with(['RRute', 'ROutlet', 'RPengiriman', 'Kategoribarang'])->paginate(5);

        return view('jadwal_pengiriman.index', [
            'jadwal_pengiriman' => $jadwal_pengiriman,
        ]);
    }

    public function addView()
    {
        $rute_ = Rute::all();
        $outlet_ = Outlet::all();
        $kategori_ = KategoriBarang::all();
        $pengiriman_ = Pengiriman::all();
        return view('jadwal_pengiriman.create', compact('rute_', 'outlet_', 'kategori_', 'pengiriman_'));
    }

    public function store(Request $request)
    {
        $data = [
            'id_rute' => $request->input('id_rute'),
            'id_pengiriman' => $request->input('id_pengiriman'),
            'id_outlet' => $request->input('id_outlet'),
            'id_kategori' => $request->input('id_kategori'),
            'tanggal_pengiriman' => $request->input('tanggal_pengiriman'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        JadwalPengiriman::create($data);

        return redirect('/jadwal_pengiriman');
    }

    public function edit($id)
    {
        $rute_ = Rute::all();
        $outlet_ = Outlet::all();
        $kategori_ = KategoriBarang::all();
        $pengiriman_ = Pengiriman::all();
        $jadwal_pengiriman = JadwalPengiriman::findOrFail($id);
        return view('jadwal_pengiriman.edit', compact('jadwal_pengiriman', 'rute_', 'outlet_', 'kategori_', 'pengiriman_'));
    }

    public function update(Request $request, $id)
    {
        $jadwal_pengiriman = JadwalPengiriman::findOrFail($id);
        $jadwal_pengiriman->id_rute = $request->id_rute;
        $jadwal_pengiriman->id_outlet = $request->id_outlet;
        $jadwal_pengiriman->id_pengiriman = $request->id_pengiriman;
        $jadwal_pengiriman->id_kategori = $request->id_kategori;
        $jadwal_pengiriman->tanggal_pengiriman = $request->tanggal_pengiriman;
        $jadwal_pengiriman->save();

        return redirect('/jadwal_pengiriman');
    }

    public function destroy($id)
    {
        $jadwal_pengiriman = JadwalPengiriman::findOrFail($id);
        $jadwal_pengiriman->delete();
        return redirect('/jadwal_pengiriman');
    }
}
