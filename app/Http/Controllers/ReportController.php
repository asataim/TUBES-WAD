<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Profile;
#use Barryvdh\DomPDF\Facade\Pdf;
use setasign\Fpdi\Fpdi;


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

    public function exportPdf(Report $report)
    {
        $templatePath = public_path('templates/template.pdf'); 

        if (!file_exists($templatePath)) {
            abort(404, "Template PDF not found");
        }

        $pdf = new Fpdi();

        $pdf->AddPage();

        $pdf->setSourceFile($templatePath);
        $templateId = $pdf->importPage(1);
        $pdf->useTemplate($templateId);

        $pdf->SetFont('Helvetica', '', 12);
        $pdf->SetTextColor(0, 0, 0);

        $pdf->SetXY(50, 50); 
        $pdf->Write(0, "ID Mitra: " . $report->id_mitra);

        $pdf->SetXY(50, 60);
        $pdf->Write(0, "Periode: " . $report->periode);

        $pdf->SetXY(50, 70);
        $pdf->Write(0, "Total Transaksi: " . $report->total_transaksi);

        $pdf->SetXY(50, 80);
        $pdf->Write(0, "Total Pendapatan: " . $report->total_pendapatan);

        $pdf->SetXY(50, 90);
        $pdf->Write(0, "Status Kinerja: " . $report->status_kinerja);

        $outputPath = public_path("pdfs/report_{$report->id}.pdf");
        $pdf->Output($outputPath, 'F');

        return response()->download($outputPath)->deleteFileAfterSend();
    }

    public function exportAllPdf()
    {
        try {
            // Ambil semua data report
            $reports = Report::with('profile')->get();
            
            // Initialize FPDI
            $pdf = new FPDI();
            
            // Add a page
            $pdf->AddPage();
            
            // Set font
            $pdf->SetFont('Helvetica', 'B', 16);
            $pdf->Cell(0, 10, 'Laporan Semua Mitra', 0, 1, 'C');
            
            $pdf->SetFont('Helvetica', '', 12);
            
            // Header
            $pdf->Ln(10);
            $pdf->Cell(50, 10, 'Nama Mitra', 1);
            $pdf->Cell(40, 10, 'Periode', 1);
            $pdf->Cell(30, 10, 'Transaksi', 1);
            $pdf->Cell(40, 10, 'Pendapatan', 1);
            $pdf->Cell(30, 10, 'Status', 1);
            $pdf->Ln();
            
            // Data
            foreach($reports as $report) {
                $pdf->Cell(50, 10, $report->profile->name ?? 'N/A', 1);
                $pdf->Cell(40, 10, $report->periode, 1);
                $pdf->Cell(30, 10, $report->total_transaksi, 1);
                $pdf->Cell(40, 10, number_format($report->total_pendapatan, 0, ',', '.'), 1);
                $pdf->Cell(30, 10, $report->status_kinerja, 1);
                $pdf->Ln();
            }
            
            // Create directory if it doesn't exist
            $path = storage_path('app/public/reports');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            
            // Save PDF
            $filename = 'laporan_semua_mitra_' . date('Y-m-d_H-i-s') . '.pdf';
            $filepath = $path . '/' . $filename;
            
            $pdf->Output($filepath, 'F');
            
            // Download file
            return response()->download($filepath)->deleteFileAfterSend();
            
        } catch (\Exception $e) {
            \Log::error('PDF Export Error: ' . $e->getMessage());
            return back()->with('error', 'Gagal mengeksport PDF: ' . $e->getMessage());
        }
    }
}
