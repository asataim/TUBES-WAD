<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Profile;
use Barryvdh\DomPDF\Facade as PDF;


class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::all(); 
        return view('reports.index', compact('reports'));
    }

    public function create()
    {
        $profiles = Profile::all(); 
        return view('reports.create', compact('profiles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_mitra' => 'required|exists:profiles,id', 
            'periode' => 'required|string',
            'total_transaksi' => 'required|integer',
            'total_pendapatan' => 'required|numeric',
            'status_kinerja' => 'required|string',
        ]);

        Report::create($request->all());

        return redirect()->route('reports.index');
    }

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
