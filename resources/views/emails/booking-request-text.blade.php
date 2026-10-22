Dubai Fotographer — New enquiry
================================

{{ $formName }}

@if ($page)
Page: {{ $page }}
@endif
Submitted: {{ now()->timezone(config('app.timezone', 'UTC'))->format('d M Y H:i') }}

--------------------------------
@foreach ($fields as $label => $value)
@if ($value !== null && $value !== '' && ! in_array((string) $value, ['Select photography Package', 'Service Type', 'Select location'], true))
{{ ucwords(str_replace('_', ' ', (string) $label)) }}: {{ is_scalar($value) ? $value : json_encode($value) }}
@endif
@endforeach
--------------------------------

Reply: {{ $fields['email'] ?? 'n/a' }}
Phone: {{ $fields['phone'] ?? 'n/a' }}

Dubai Fotographer
+971 52 294 6276 · info@dubaifotographer.com
https://dubaifotographer.com/
