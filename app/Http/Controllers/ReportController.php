<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Profile;
use Barryvdh\DomPDF\Facade as PDF;


class ReportController extends Controller
{
    // Menampilkan daftar laporan
    public function index()
    {
        $reports = Report::all(); 
        return view('reports.index', compact('reports'));
    }

    // Menampilkan form untuk membuat laporan baru
    public function create()
    {
        $profiles = Profile::all(); 
        return view('reports.create', compact('profiles'));
    }

    // Menyimpan laporan baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'id_mitra' => 'required|exists:profiles,id', 
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

    
    public function edit(Report $report)
    {
        $profiles = Profile::all(); 
        return view('reports.edit', compact('report', 'profiles'));
    }

    
    public function update(Request $request, Report $report)
    {
        
        $request->validate([
            'id_mitra' => 'required|exists:profiles,id',
            'periode' => 'required|string',
            'total_transaksi' => 'required|integer',
            'total_pendapatan' => 'required|numeric',
            'status_kinerja' => 'required|string',
        ]);

        
        $report->update($request->all());

        
        return redirect()->route('reports.index');
    }

    
    public function destroy(Report $report)
    {
        
        $report->delete();

        
        return redirect()->route('reports.index');
    }
}
