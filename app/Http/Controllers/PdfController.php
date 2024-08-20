<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpdf\Mpdf;

class PdfController extends Controller
{
    public function generatePdf()
    {
        $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];


        $mpdf = new Mpdf([
                'margin_left' => 0,
                'margin_right' => 0,
                'margin_top' => 0,
                'margin_bottom' => 0,
                'fontDir' => array_merge($fontDirs, [
                public_path('font/Montserrat/static/'),
            ]),
            'fontdata' => $fontData + [
                'montserrat' => [
                    'R' => 'Montserrat-Regular.ttf',
                    'I' => 'Montserrat-Bold.ttf',
                    'B' => 'Montserrat-Bold.ttf',
                ]
            ],
            'default_font' => 'montserrat'
        ]);


        $html1 = view('pdf.page1')->render();
        $mpdf->WriteHTML($html1);

        $mpdf->AddPage('L');
        $html2 = view('pdf.page2')->render();
        $mpdf->WriteHTML($html2);

        $mpdf->AddPage('L');
        $html3 = view('pdf.page3')->render();
        $mpdf->WriteHTML($html3);

        $mpdf->AddPage('L');
        $html4 = view('pdf.page4')->render();
        $mpdf->WriteHTML($html4);

        $mpdf->AddPage('L');
        $html5 = view('pdf.page5')->render();
        $mpdf->WriteHTML($html5);

        $mpdf->AddPage('L');
        $html6 = view('pdf.page6')->render();
        $mpdf->WriteHTML($html6);

        $mpdf->AddPage('L');
        $html7 = view('pdf.page7')->render();
        $mpdf->WriteHTML($html7);

        $mpdf->AddPage('L');
        $html8 = view('pdf.page8')->render();
        $mpdf->WriteHTML($html8);

        $mpdf->AddPage('L');
        $html9 = view('pdf.page9')->render();
        $mpdf->WriteHTML($html9);

        $mpdf->AddPage('P');
        $html10 = view('pdf.page10')->render();
        $mpdf->WriteHTML($html10);

        $mpdf->AddPage('L');
        $html11 = view('pdf.page11')->render();
        $mpdf->WriteHTML($html11);

        $mpdf->AddPage('L');
        $html12 = view('pdf.page12')->render();
        $mpdf->WriteHTML($html12);

        $mpdf->AddPage('L');
        $html13 = view('pdf.page13')->render();
        $mpdf->WriteHTML($html13);

        $mpdf->AddPage('L');
        $html14 = view('pdf.page14')->render();
        $mpdf->WriteHTML($html14);

        $mpdf->AddPage('L');
        $html15 = view('pdf.page15')->render();
        $mpdf->WriteHTML($html15);

        $mpdf->Output('nama_file.pdf', 'I');
        exit;
    }

    public function generateKontrak()
        {
        $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];


        $mpdf = new Mpdf([
                'margin_left' => 0,
                'margin_right' => 0,
                'margin_top' => 0,
                'margin_bottom' => 0,
                'fontDir' => array_merge($fontDirs, [
                public_path('font/Montserrat/static/'),
            ]),
            'fontdata' => $fontData + [
                'montserrat' => [
                    'R' => 'Montserrat-Regular.ttf',
                    'I' => 'Montserrat-Bold.ttf',
                    'B' => 'Montserrat-Bold.ttf',
                ]
            ],
            'default_font' => 'montserrat'
        ]);


        $html1 = view('kontrak-pdf.sp1')->render();
        $mpdf->WriteHTML($html1);

        $mpdf->AddPage('P');
        $html2 = view('kontrak-pdf.sp2')->render();
        $mpdf->WriteHTML($html2);

        $mpdf->AddPage('P');
        $html3 = view('kontrak-pdf.sp3')->render();
        $mpdf->WriteHTML($html3);

        $mpdf->AddPage('P');
        $html4 = view('kontrak-pdf.sp4')->render();
        $mpdf->WriteHTML($html4);


        $mpdf->AddPage('P');
        $html6 = view('kontrak-pdf.sp6')->render();
        $mpdf->WriteHTML($html6);

        $mpdf->AddPage('P');
        $html7 = view('kontrak-pdf.sp7')->render();
        $mpdf->WriteHTML($html7);

        // $mpdf->AddPage('P');
        // $html8 = view('kontrak-pdf.sp8')->render();
        // $mpdf->WriteHTML($html8);

        // $mpdf->AddPage('P');
        // $html9 = view('kontrak-pdf.sp9')->render();
        // $mpdf->WriteHTML($html9);

        // $mpdf->AddPage('P');
        // $html10 = view('kontrak-pdf.sp10')->render();
        // $mpdf->WriteHTML($html10);

        // $mpdf->AddPage('P');
        // $html11 = view('kontrak-pdf.sp11')->render();
        // $mpdf->WriteHTML($html11);

        $mpdf->AddPage('P');
        $html12 = view('kontrak-pdf.sup-perintah-kerja')->render();
        $mpdf->WriteHTML($html12);

        $mpdf->AddPage('P');
        $html13 = view('kontrak-pdf.surat-kepemilikan-tanah')->render();
        $mpdf->WriteHTML($html13);


        $mpdf->Output('nama_file.pdf', 'I');
        exit;
    }
}
