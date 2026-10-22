{{ $formName }}

@if ($page)
Page: {{ $page }}

@endif
@foreach ($fields as $label => $value)
@if ($value !== null && $value !== '')
{{ str_replace('_', ' ', $label) }}: {{ is_scalar($value) ? $value : json_encode($value) }}

@endif
@endforeach
