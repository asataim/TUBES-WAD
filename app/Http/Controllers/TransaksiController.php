<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the transactions.
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.index', ['transaksi' => $transaksi]);
    }

    /**
     * Show the form for creating a new transaction.
     */
    public function create()
    {
        return view('transaksi.create');
    }

    /**
     * Store a newly created transaction in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_mitra' => 'required|exists:mitra,id',
            'jumlah' => 'required|numeric|min:0',
            'tanggal' => 'required|date',
            'status' => 'required|in:pending,completed,failed',
            'keterangan' => 'nullable|string'
        ]);

        Transaksi::create($validated);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    /**
     * Display the specified transaction.
     */
    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show', ['transaksi' => $transaksi]);
    }

    /**
     * Show the form for editing the specified transaction.
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.edit', ['transaksi' => $transaksi]);
    }

    /**
     * Update the specified transaction in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_mitra' => 'required|exists:mitra,id',
            'jumlah' => 'required|numeric|min:0',
            'tanggal' => 'required|date',
            'status' => 'required|in:pending,completed,failed',
            'keterangan' => 'nullable|string'
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update($validated);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    /**
     * Remove the specified transaction from storage.
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
