{{-- Phone action bar (mobile only). The quote button jumps to the page's own form when it has one (main.js). --}}
<nav class="site-bar" aria-label="Contact">
    <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
    <a class="site-bar-wa" href="https://wa.me/971522946276" target="_blank" rel="noopener">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
    <a class="site-bar-quote" href="%%BASE%%/booking-form">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
</nav>
