<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
<<<<<<< Updated upstream
=======
use App\Models\Profile;
>>>>>>> Stashed changes
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
<<<<<<< Updated upstream
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
=======
    public function index()
    {
        $transaksi = Transaksi::with('profile')->latest()->get();
        $profiles = Profile::all();
        return view('transaksi.index', compact('transaksi', 'profiles'));
    }

    public function store(Request $request)
    {
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
>>>>>>> Stashed changes
    }
}
