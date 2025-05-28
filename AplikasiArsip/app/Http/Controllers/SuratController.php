<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat; // <-- penting! jangan lupa import model

class SuratController extends Controller
{
    public function index()
    {
        $surats = Surat::all();
        return view('surat.index', compact('surats'));
    }

    public function create()
    {
        return view('surat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_surat' => 'required',
            'jenis' => 'required',
            'pengirim' => 'required',
            'penerima' => 'required',
            'isi' => 'required'
        ]);

        Surat::create($request->all());
        return redirect()->route('surat.index')->with('success', 'Surat berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $surat = Surat::findOrFail($id); // <- ambil data surat
        return view('surat.show', compact('surat'));
    }

    public function edit(string $id)
    {
        $surat = Surat::findOrFail($id); // <- ambil data surat
        return view('surat.edit', compact('surat'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nomor_surat' => 'required',
            'jenis' => 'required',
            'pengirim' => 'required',
            'penerima' => 'required',
            'isi' => 'required'
        ]);

        $surat = Surat::findOrFail($id); // <- ambil data surat
        $surat->update($request->all());
        return redirect()->route('surat.index')->with('success', 'Surat berhasil diupdate.');
    }

    public function destroy(string $id)
    {
        $surat = Surat::findOrFail($id); // <- ambil data surat
        $surat->delete();
        return redirect()->route('surat.index')->with('success', 'Surat berhasil dihapus.');
    }
}
