<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>

        @if ($headers && $applicants)
        <table>
            <thead>
                <tr>
                    @foreach ($headers as $header)
                    <th>{{ __('questions.' . $header . '.title') }}</th>
                    @endforeach
                    <th>{{ __('applicants.created_at') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applicants as $applicant)
                @if ($applicant->question)
                <tr>
                    @foreach ($applicant->question as $questions)
                    @if ($questions)                
                    <td>{{ $questions->answer }}</td>
                    <!-- /answer -->                
                    @endif
                    <!-- /all question --> 
                    @endforeach
                    <td>{{ $applicant->created_at }}</td>
                </tr>
                @endif
                @endforeach
                <!-- /applicant -->
            </tbody>
        </table>

        @endif

    </body>
</html>