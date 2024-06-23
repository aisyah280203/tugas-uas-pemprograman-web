<?php

namespace App\Http\Controllers;

use App\Models\Kota; // Menggunakan model Kota yang sesuai dengan tabel kota
use Illuminate\Http\Request;
use PDF;

class KotaController extends Controller
{
    public function index()
    {
        $kota = Kota::all();
        return view('kota.index', compact('kota'));
    }

    public function create()
    {
        return view('kota.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NamaKota' => 'required|string|max:15',
            'NamaPemimpin' => 'required|string|max:25',
            'TglBerdiri' => 'required|date',
            'JmlPenduduk' => 'required|integer',
            'LuasWilayah' => 'required|numeric',
            'JenisKota' => 'required|in:Istimewa,Otonom,Percontohan',
            'Keunggulan' => 'required|string',
        ]);

        Kota::create($request->all());
        return redirect()->route('kota.index');
    }

    public function edit($id)
    {
        $kota = Kota::findOrFail($id);
        return view('kota.edit', compact('kota'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'NamaKota' => 'required|string|max:15',
            'NamaPemimpin' => 'required|string|max:25',
            'TglBerdiri' => 'required|date',
            'JmlPenduduk' => 'required|integer',
            'LuasWilayah' => 'required|numeric',
            'JenisKota' => 'required|in:Istimewa,Otonom,Percontohan',
            'Keunggulan' => 'required|string',
        ]);

        $kota = Kota::findOrFail($id);
        $kota->update($request->all());
        return redirect()->route('kota.index');
    }

    public function destroy($id)
    {
        $kota = Kota::findOrFail($id);
        $kota->delete();
        return redirect()->route('kota.index');
    }

    public function print()
    {
        $kota = Kota::all();
        $pdf = PDF::loadView('kota.print', compact('kota'));
        return $pdf->download('kota.pdf');
    }
}
