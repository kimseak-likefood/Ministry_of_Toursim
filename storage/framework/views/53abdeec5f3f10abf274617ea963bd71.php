<div class="form-group border-0">
    <label class="form-label"><?php echo e($label); ?></label>
    <div class="dropdown" id="<?php echo e($id); ?>">
        <button class="dropdown-toggle form-control" type="button" id="<?php echo e($buttonId); ?>"
            data-bs-toggle="dropdown" aria-expanded="false">
            <span class="text-truncate">2 adults - 1 children - 1 room</span>
        </button>
        <div class="dropdown-menu" aria-labelledby="<?php echo e($buttonId); ?>">
            <ul class="drop-rest">
                <li>
                    <div class="d-flex small">Adults</div>
                    <div class="ms-auto input-group plus-minus-input">
                        <div class="input-group-button">
                            <button type="button" class="circle" data-quantity="minus" data-field="onewayAdult">
                                <i class="bi bi-dash"></i>
                            </button>
                        </div>
                        <input class="input-group-field" type="number" name="onewayAdult" value="0">
                        <div class="input-group-button">
                            <button type="button" class="circle" data-quantity="plus" data-field="onewayAdult">
                                <i class="bi bi-plus"></i>
                            </button>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex small">Child</div>
                    <div class="ms-auto input-group plus-minus-input">
                        <div class="input-group-button">
                            <button type="button" class="circle" data-quantity="minus" data-field="onewayChild">
                                <i class="bi bi-dash"></i>
                            </button>
                        </div>
                        <input class="input-group-field" type="number" name="onewayChild" value="0">
                        <div class="input-group-button">
                            <button type="button" class="circle" data-quantity="plus" data-field="onewayChild">
                                <i class="bi bi-plus"></i>
                            </button>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex small">Rooms</div>
                    <div class="ms-auto input-group plus-minus-input">
                        <div class="input-group-button">
                            <button type="button" class="circle" data-quantity="minus" data-field="onewayInfant">
                                <i class="bi bi-dash"></i>
                            </button>
                        </div>
                        <input class="input-group-field" type="number" name="onewayInfant" value="0">
                        <div class="input-group-button">
                            <button type="button" class="circle" data-quantity="plus" data-field="onewayInfant">
                                <i class="bi bi-plus"></i>
                            </button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\USER\Herd\cs262_midterm_project\resources\views/partials/search/guest-dropdown.blade.php ENDPATH**/ ?>