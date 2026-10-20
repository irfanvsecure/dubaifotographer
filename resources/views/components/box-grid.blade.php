{{--
    A row of thin-bordered boxes (label, title, text); place inside <x-panel>. Used for "choosing the right
    approach" (label = small gold eyebrow) and numbered process steps (class "box-grid-numbered", label "01").
    boxes: [label (or null), title, text (HTML)]
--}}
@props(['boxes'])
<div {{ $attributes->merge(['class' => 'box-grid']) }}>
    @foreach ($boxes as [$label, $boxTitle, $text])
        <div class="box">
            @if ($label)
                <p class="box-label">{{ $label }}</p>
            @endif
            <p class="box-title">{{ $boxTitle }}</p>
            <div class="text">{!! $text !!}</div>
        </div>
    @endforeach
</div>
