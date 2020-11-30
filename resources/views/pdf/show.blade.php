<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $applicant->ic_no }}</title>

        <style>
            body {
                font: 11pt/120% Arial, sans-serif;
            }
        </style>
    </head>
    <body>

        <p style="text-align: center;"><strong>{{ __('questions.title') }}</strong></p>

        @if ($questions)
        @php $count = 1; @endphp        

        <ol>
            @foreach ($questions as $question)
            <strong><li value="{{ $count++ }}">{{ __('questions.' . $question->key . '.title') }}</li></strong>
            <!-- /question -->
            {{ $question->answer }}
            <!-- /answer -->
            <br/><br/>
            @endforeach
        </ol>
        @else
        <p>Tiada maklumat.</p>
        @endif

        <script type="text/php">
            if (isset($pdf)) {
            $text = '{{ $applicant->ic_no }}';            
            $font = $fontMetrics->getFont("Arial", "bold");
            $size = 9;
            // Compute text width to center correctly
            $textWidth = $fontMetrics->getTextWidth($text, $font, $size);
            // $x = ($pdf->get_width() - $textWidth) / 2;
            $x = 30;
            $y = 20;                        
            $pdf->page_text($x, $y, $text, $font, $size, array(0,0,0));
            }

            if (isset($pdf)) {
            $text = 'Muka surat {PAGE_NUM} daripada {PAGE_COUNT}';
            $font = $fontMetrics->getFont("Arial", "bold");
            $size = 9;
            // Compute text width to center correctly
            $textWidth = $fontMetrics->getTextWidth($text, $font, $size);
            $x = $pdf->get_width() - 130;
            $y = $pdf->get_height() - 30;
            $pdf->page_text($x, $y, $text, $font, $size, array(0,0,0));
            }
        </script>       

    </body>
</html>