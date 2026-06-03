<ul class="nav nav-pills mb-3 destination-pill" id="pills-tab2" role="tablist">
    @foreach (['regions' => 'Regions', 'cities' => 'Cities', 'contact' => 'Places of interest'] as $tab => $label)
    <li class="nav-item" role="presentation">
        <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="pills-{{ $tab }}-tab" data-bs-toggle="pill"
            data-bs-target="#pills-{{ $tab }}" type="button" role="tab" aria-controls="pills-{{ $tab }}"
            aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ $label }}</button>
    </li>
    @endforeach
</ul>
