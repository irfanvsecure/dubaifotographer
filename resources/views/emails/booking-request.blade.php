<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New enquiry</title>
</head>
<body style="font-family: Arial, Helvetica, sans-serif; color: #222; line-height: 1.5;">
    <h2 style="margin: 0 0 12px;">{{ $formName }}</h2>
    @if ($page)
        <p style="margin: 0 0 16px; color: #666; font-size: 14px;">Page: <a href="{{ $page }}">{{ $page }}</a></p>
    @endif
    <table cellpadding="8" cellspacing="0" border="1" style="border-collapse: collapse; border-color: #ddd; width: 100%; max-width: 640px;">
        @foreach ($fields as $label => $value)
            @if ($value !== null && $value !== '')
                <tr>
                    <th align="left" style="background: #f6f6f6; width: 160px; text-transform: capitalize;">{{ str_replace('_', ' ', $label) }}</th>
                    <td>{{ is_scalar($value) ? $value : json_encode($value) }}</td>
                </tr>
            @endif
        @endforeach
    </table>
</body>
</html>
