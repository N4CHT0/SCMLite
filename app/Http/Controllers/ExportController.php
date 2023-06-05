<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Gudang;
use App\Models\JadwalPengiriman;
use App\Models\KategoriBarang;
use App\Models\Outlet;
use App\Models\Pengiriman;
use App\Models\Rute;
use App\Models\StokBarang;
use App\Models\Supir;
use App\Models\Truk;
use PDF;

class ExportController extends Controller
{
    public function barangPDF()
    {
        $barang = Barang::all();

        $pdf = PDF::loadView('pdf.barang', compact('barang'));
        return $pdf->download('report-barang.pdf');
    }

    public function gudangPDF()
    {
        $gudang = Gudang::all();

        $pdf = PDF::loadView('pdf.gudang', compact('gudang'));
        return $pdf->download('report-gudang.pdf');
    }

    public function trukPDF()
    {
        $truk = Truk::all();

        $pdf = PDF::loadView('pdf.truk', compact('truk'));
        return $pdf->download('report-truk.pdf');
    }

    public function rutePDF()
    {
        $rute = Rute::all();

        $pdf = PDF::loadView('pdf.rute', compact('rute'));
        return $pdf->download('report-rute.pdf');
    }

    public function outletPDF()
    {
        $outlet = Outlet::all();

        $pdf = PDF::loadView('pdf.outlet', compact('outlet'));
        return $pdf->download('report-outlet.pdf');
    }

    public function pengrimanPDF()
    {
        $pengiriman = Pengiriman::all();

        $pdf = PDF::loadView('pdf.pengiriman', compact('pengiriman'));
        return $pdf->download('report-pengiriman.pdf');
    }
    public function kategoriPDF()
    {
        $kategori = KategoriBarang::all();

        $pdf = PDF::loadView('pdf.kategori', compact('kategori'));
        return $pdf->download('report-kategori.pdf');
    }
    public function jadwalPDF()
    {
        $jadwal_pengiriman = JadwalPengiriman::all();

        $pdf = PDF::loadView('pdf.jadwal', compact('jadwal_pengiriman'));
        return $pdf->download('report-jadwal-pengiriman.pdf');
    }
    public function stokPDF()
    {
        $stok = StokBarang::all();

        $pdf = PDF::loadView('pdf.stok', compact('stok'));
        return $pdf->download('report-stok-barang.pdf');
    }
    public function supirPDF()
    {
        $supir = Supir::all();

        $pdf = PDF::loadView('pdf.supir', compact('supir'));
        return $pdf->download('report-supir.pdf');
    }
}
