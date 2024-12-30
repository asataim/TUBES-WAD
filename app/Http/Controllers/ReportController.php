<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Profile;

class ReportController extends Controller
{
    // Menampilkan daftar laporan
    public function index()
    {
        $reports = Report::all(); // Mengambil semua data laporan
        return view('reports.index', compact('reports'));
    }

    // Menampilkan form untuk membuat laporan baru
    public function create()
    {
        $profiles = Profile::all(); // Mengambil semua data profil untuk dropdown
        return view('reports.create', compact('profiles'));
    }

    // Menyimpan laporan baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'id_mitra' => 'required|exists:profiles,id', // Pastikan id_mitra ada di tabel profiles
            'periode' => 'required|string',
            'total_transaksi' => 'required|integer',
            'total_pendapatan' => 'required|numeric',
            'status_kinerja' => 'required|string',
        ]);

        // Menyimpan data laporan
        Report::create($request->all());

        // Redirect ke halaman daftar laporan
        return redirect()->route('reports.index');
    }

    // Menampilkan detail laporan
    public function show(Report $report)
    {
        return view('reports.show', compact('report'));
    }

    // Menampilkan form untuk mengedit laporan
    public function edit(Report $report)
    {
        $profiles = Profile::all(); // Mengambil data profil untuk dropdown
        return view('reports.edit', compact('report', 'profiles'));
    }

    // Memperbarui data laporan
    public function update(Request $request, Report $report)
    {
        // Validasi input
        $request->validate([
            'id_mitra' => 'required|exists:profiles,id',
            'periode' => 'required|string',
            'total_transaksi' => 'required|integer',
            'total_pendapatan' => 'required|numeric',
            'status_kinerja' => 'required|string',
        ]);

        // Memperbarui laporan
        $report->update($request->all());

        // Redirect ke halaman daftar laporan
        return redirect()->route('reports.index');
    }

    // Menghapus laporan
    public function destroy(Report $report)
    {
        // Menghapus laporan
        $report->delete();

        // Redirect ke halaman daftar laporan
        return redirect()->route('reports.index');
    }
}
