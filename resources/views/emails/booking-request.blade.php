@php
    $siteUrl = rtrim(config('app.url') ?: 'https://dubaifotographer.com', '/');
    if (str_contains($siteUrl, '127.0.0.1') || str_contains($siteUrl, 'localhost')) {
        $siteUrl = 'https://dubaifotographer.com';
    }
    // White/gold mark for dark header (site header logo is too dark on black)
    $logoUrl = $siteUrl.'/assets/images/2026/04/Dubai-logo.png';
    $placeholders = [
        'Select photography Package',
        'Service Type',
        'Select location',
    ];
    $rows = [];
    foreach ($fields as $label => $value) {
        if ($value === null || $value === '') {
            continue;
        }
        $text = is_scalar($value) ? (string) $value : json_encode($value);
        if (in_array($text, $placeholders, true)) {
            continue;
        }
        $rows[] = [
            'label' => ucwords(str_replace('_', ' ', (string) $label)),
            'value' => $text,
        ];
    }
    $submitted = now()->timezone(config('app.timezone', 'UTC'))->format('d M Y · H:i');
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New enquiry — {{ $formName }}</title>
</head>
<body style="margin:0;padding:0;background:#f3efe6;font-family:Georgia,'Times New Roman',serif;-webkit-font-smoothing:antialiased;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#f3efe6;padding:32px 12px;">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="max-width:600px;background:#ffffff;border-radius:16px;overflow:hidden;box-shadow:0 12px 40px rgba(0,0,0,0.08);">
                    {{-- Header --}}
                    <tr>
                        <td style="background:#0b0b0b;padding:28px 32px 24px;text-align:center;border-bottom:3px solid #d4af37;">
                            <a href="{{ $siteUrl }}/" style="text-decoration:none;">
                                <img src="{{ $logoUrl }}" width="220" alt="Dubai Fotographer" style="display:block;margin:0 auto 16px;width:220px;max-width:80%;height:auto;border:0;">
                            </a>
                            <p style="margin:0;font-family:Arial,Helvetica,sans-serif;font-size:11px;letter-spacing:0.22em;text-transform:uppercase;color:#d4af37;">
                                New website enquiry
                            </p>
                        </td>
                    </tr>

                    {{-- Intro --}}
                    <tr>
                        <td style="padding:32px 32px 8px;">
                            <h1 style="margin:0 0 8px;font-size:26px;line-height:1.25;font-weight:400;color:#0b0b0b;">
                                {{ $formName }}
                            </h1>
                            <p style="margin:0;font-family:Arial,Helvetica,sans-serif;font-size:14px;line-height:1.5;color:#6b6b6b;">
                                Submitted {{ $submitted }}
                                @if ($page)
                                    · from <a href="{{ $page }}" style="color:#b8962e;text-decoration:underline;">this page</a>
                                @endif
                            </p>
                        </td>
                    </tr>

                    {{-- Fields --}}
                    <tr>
                        <td style="padding:20px 32px 8px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="border:1px solid #ebe6da;border-radius:12px;overflow:hidden;">
                                @foreach ($rows as $i => $row)
                                    <tr>
                                        <td width="38%" valign="top" style="padding:14px 16px;background:{{ $i % 2 === 0 ? '#faf8f3' : '#ffffff' }};font-family:Arial,Helvetica,sans-serif;font-size:12px;letter-spacing:0.06em;text-transform:uppercase;color:#8a7d5c;border-bottom:1px solid #ebe6da;">
                                            {{ $row['label'] }}
                                        </td>
                                        <td valign="top" style="padding:14px 16px;background:{{ $i % 2 === 0 ? '#faf8f3' : '#ffffff' }};font-family:Arial,Helvetica,sans-serif;font-size:15px;line-height:1.45;color:#1a1a1a;border-bottom:1px solid #ebe6da;">
                                            @if (filter_var($row['value'], FILTER_VALIDATE_EMAIL))
                                                <a href="mailto:{{ $row['value'] }}" style="color:#1a1a1a;text-decoration:none;border-bottom:1px solid #d4af37;">{{ $row['value'] }}</a>
                                            @elseif (preg_match('/^\+?[\d\s\-()]{7,}$/', $row['value']) && ! preg_match('/^\d{4}-\d{2}-\d{2}$/', $row['value']))
                                                <a href="tel:{{ preg_replace('/\s+/', '', $row['value']) }}" style="color:#1a1a1a;text-decoration:none;border-bottom:1px solid #d4af37;">{{ $row['value'] }}</a>
                                            @else
                                                {{ $row['value'] }}
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </td>
                    </tr>

                    {{-- CTA --}}
                    <tr>
                        <td style="padding:24px 32px 8px;text-align:center;">
                            @php $reply = $fields['email'] ?? null; @endphp
                            @if (filter_var($reply, FILTER_VALIDATE_EMAIL))
                                <a href="mailto:{{ $reply }}" style="display:inline-block;padding:14px 28px;background:#d4af37;color:#0b0b0b;font-family:Arial,Helvetica,sans-serif;font-size:14px;font-weight:700;text-decoration:none;border-radius:8px;">
                                    Reply to client
                                </a>
                            @endif
                        </td>
                    </tr>

                    {{-- Footer --}}
                    <tr>
                        <td style="padding:28px 32px 32px;text-align:center;">
                            <p style="margin:0 0 6px;font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#6b6b6b;">
                                Dubai Fotographer · Business Bay, Dubai
                            </p>
                            <p style="margin:0;font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#6b6b6b;">
                                <a href="tel:+971522946276" style="color:#6b6b6b;text-decoration:none;">+971 52 294 6276</a>
                                &nbsp;·&nbsp;
                                <a href="mailto:info@dubaifotographer.com" style="color:#6b6b6b;text-decoration:none;">info@dubaifotographer.com</a>
                                &nbsp;·&nbsp;
                                <a href="{{ $siteUrl }}/" style="color:#b8962e;text-decoration:none;">dubaifotographer.com</a>
                            </p>
                        </td>
                    </tr>
                </table>

                <p style="margin:18px 0 0;font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#9a9a9a;">
                    This email was sent from the Dubai Fotographer website form.
                </p>
            </td>
        </tr>
    </table>
</body>
</html>
