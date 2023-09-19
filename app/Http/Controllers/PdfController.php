<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Monitor;
use App\Models\Awal;

use Barryvdh\DomPDF\Facade\Pdf as PD;
use VerumConsilium\Browsershot\Facades\PDF;

class PdfController extends Controller
{
    public function AnalisaTrafo(Request $request)
    {
        $uuid = $request['reg'];
        $posts = Monitor::where('uuid', $uuid)->get();
        //dd(request()->segment(1));
        $awal = Awal::where('uuid', $uuid)->first();

        if (request()->segment(1) == 'pdf1') {
            // $pdf = PD::loadView(
            //     'pdf.AnalisaTrafo',
            //     compact('posts', 'awal')
            // )->setPaper('legal', 'landscape');

            // return PDF::loadView('pdf.AnalisaTrafo', compact('posts', 'awal'))
            //     ->margins(10, 10, 15, 10)
            //     ->format('legal')
            //     ->save('perhi.pdf')
            //     ->landscape()
            //     ->inline();
            $judul = now() . ' Analisa & Perhitungan';
            $size = 'landscape';
            $html = view(
                'pdf.AnalisaTrafo',
                compact('posts', 'awal', 'size', 'judul')
            )->render();
            return $html;
        } elseif (request()->segment(1) == 'pdf2') {
            // $pdf = PD::loadView(
            //     'pdf.AnalisaTrafo',
            //     compact('posts', 'awal')
            // )->setPaper('legal', 'landscape');
            // return $pdf->stream(now() . 'Losess-Trafo.pdf');
            $judul = now() . 'Analisa Losess Trafo & Pembebanan';
            $size = 'portrait';
            $html = view(
                'pdf.AnalisaTrafo',
                compact('posts', 'awal', 'size', 'judul')
            )->render();
            return $html;
        } elseif (request()->segment(1) == 'pdf3') {
            $judul = now() . ' Analisa Pembebanan';
            $size = 'portrait';
            $html = view(
                'pdf.AnalisaTrafo',
                compact('posts', 'awal', 'size', 'judul')
            )->render();
            return $html;
        } elseif (request()->segment(1) == 'pdf4') {
            $judul = now() . ' Analisa siang & Malam';
            $size = 'landscape';
            $html = view(
                'pdf.AnalisaTrafo',
                compact('posts', 'awal', 'size', 'judul')
            )->render();
            return $html;
        } elseif (request()->segment(1) == 'pdf5') {
            $judul = now() . ' Analisa malam';
            $size = 'landscape';
            $html = view(
                'pdf.AnalisaTrafo',
                compact('posts', 'awal', 'size', 'judul')
            )->render();
            return $html;
        } elseif (request()->segment(1) == 'data-trafo') {
            $judul = now() . ' Data Trafo & Form';
            $size = 'landscape';
            $html = view(
                'pdf.AnalisaTrafo',
                compact('posts', 'awal', 'size', 'judul')
            )->render();
            return $html;
        } elseif (request()->segment(1) == 'grafik') {
            $judul = now() . ' Data Grafik';
            $size = 'portrait';
            $html = view(
                'pdf.AnalisaTrafo',
                compact('posts', 'awal', 'size', 'judul')
            )->render();
            return $html;
        }
    }
}