@props(['book' => 'Book Your Session', 'phone' => '+971 52 2946276'])
<div {{ $attributes->merge(['class' => 'buttons']) }}>
    <a class="btn" href="%%BASE%%/booking-form">{{ $book }} @include('partials.icon', ['name' => 'arrow-right'])</a>
    <a class="btn btn-outline" href="tel:%20+971522946276">{{ $phone }} @include('partials.icon', ['name' => 'phone-alt'])</a>
</div>
