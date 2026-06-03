<div class="tab-pane fade show active" id="flight-tab-pane" role="tabpanel"
    aria-labelledby="flight-tab" tabindex="0">
    @include('partials.search.flight-subtabs')
    <div class="tab-content" id="pills-tabContent">
        @include('partials.search.flight-oneway')
        @include('partials.search.flight-round')
        @include('partials.search.flight-multicity')
    </div>
</div>
