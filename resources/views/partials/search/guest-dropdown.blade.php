<div class="form-group border-0">
    <label class="form-label">{{ $label }}</label>
    <div class="dropdown" id="{{ $id }}">
        <button class="dropdown-toggle form-control" type="button" id="{{ $buttonId }}"
            data-bs-toggle="dropdown" aria-expanded="false">
            <span class="text-truncate">2 adults - 1 children - 1 room</span>
        </button>
        <div class="dropdown-menu" aria-labelledby="{{ $buttonId }}">
            <ul class="drop-rest">
                @foreach (['Adults' => 'onewayAdult', 'Child' => 'onewayChild', 'Rooms' => 'onewayInfant'] as $label => $field)
                <li>
                    <div class="d-flex small">{{ $label }}</div>
                    <div class="ms-auto input-group plus-minus-input">
                        <div class="input-group-button">
                            <button type="button" class="circle" data-quantity="minus" data-field="{{ $field }}">
                                <i class="bi bi-dash"></i>
                            </button>
                        </div>
                        <input class="input-group-field" type="number" name="{{ $field }}" value="0">
                        <div class="input-group-button">
                            <button type="button" class="circle" data-quantity="plus" data-field="{{ $field }}">
                                <i class="bi bi-plus"></i>
                            </button>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
