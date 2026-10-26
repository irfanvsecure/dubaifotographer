{{-- svc_tabs: one tab per topic, each with a quote button --}}
<section class="svc-section svc-grey">
    <div class="svc-container">
        <h2 class="svc-title">{{ $s['heading'] }}</h2>
        <div class="svc-tabs" data-tabs>
            <div class="svc-tab-list" role="tablist">
                @foreach ($s['tabs'] as $i => $tab)
                    <button type="button" class="svc-tab{{ $i === 0 ? ' is-active' : '' }}" role="tab" aria-selected="{{ $i === 0 ? 'true' : 'false' }}" aria-controls="svc-panel-{{ $i }}" id="svc-tab-{{ $i }}">
                        @include('partials.icon', ['name' => $tab['icon']])
                        <span>{{ $tab['label'] }}</span>
                    </button>
                @endforeach
            </div>
            <div class="svc-tab-panels">
                @foreach ($s['tabs'] as $i => $tab)
                    <div class="svc-panel{{ $i === 0 ? ' is-active' : '' }}" role="tabpanel" id="svc-panel-{{ $i }}" aria-labelledby="svc-tab-{{ $i }}">
                        <img src="%%BASE%%/assets/images/{{ $tab['image'] }}" alt="{{ $tab['alt'] }}" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>{{ $tab['heading'] }}</h3>
                            <div class="svc-panel-text">{!! $tab['body'] !!}</div>
                            <a class="svc-btn svc-btn-dark" href="#quote">{{ $tab['button'] }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
