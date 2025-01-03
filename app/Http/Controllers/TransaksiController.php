<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Profile;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::with('profile')->latest()->get();
        $profiles = Profile::all();
        return view('transaksi.index', compact('transaksi', 'profiles'));
    }

    public function create()
    {
    $profiles = Profile::all(); 
    return view('transaksi.create', compact('profiles'));
    }  

    public function store(Request $request)
    {
        $request->validate([
            'id_mitra' => 'required|exists:profiles,id', 
            'jumlah' => 'required|numeric',
            'tanggal' => 'required|date',
            'status' => 'required|in:pending,completed,failed',
            'keterangan' => 'required',
        ]);

        $request->validate([
            'id_mitra' => 'required|exists:profiles,id',
            'jumlah' => 'required|numeric',
            'tanggal' => 'required|date',
            'status' => 'required|in:pending,completed,failed',
            'keterangan' => 'required'
        ]);

        Transaksi::create($request->all());
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan');
    }

    public function edit(Transaksi $transaksi)
    {
        $profiles = Profile::all();
        return view('transaksi.edit', compact('transaksi', 'profiles'));
    }

    public function update(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            'id_mitra' => 'required|exists:profiles,id',
            'jumlah' => 'required|numeric',
            'tanggal' => 'required|date',
            'status' => 'required|in:pending,completed,failed',
            'keterangan' => 'required'
        ]);

        $transaksi->update($request->all());
        
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui');
    }

    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus');
    }
}
