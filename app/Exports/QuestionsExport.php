<?php

namespace App\Exports;

use App\Models\Question;
use App\Models\Applicant;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class QuestionsExport implements FromView, ShouldAutoSize, WithStyles, WithColumnFormatting {

    public function view(): View {
        $headers = Question::getFields();
        $applicants = Applicant::all();

        return view('excel.index', ['headers' => $headers, 'applicants' => $applicants]);
    }

    public function styles(Worksheet $sheet) {
        return [
            // Style the first row as bold text.
            1 => ['font' => ['bold' => true]],
        ];
    }

    public function columnFormats(): array {
        return [
            'C' => NumberFormat::FORMAT_NUMBER,
            'I' => NumberFormat::FORMAT_NUMBER,
            'J' => NumberFormat::FORMAT_NUMBER,
            'U' => NumberFormat::FORMAT_NUMBER,
            'AS' => NumberFormat::FORMAT_NUMBER,
            'AW' => NumberFormat::FORMAT_DATE_DATETIME,
        ];
    }

}
