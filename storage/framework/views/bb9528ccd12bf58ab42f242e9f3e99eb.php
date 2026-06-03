<div class="form-group border-0">
    <label class="form-label">Traveller's</label>
    <div class="dropdown" id="<?php echo e($id); ?>">
        <button class="dropdown-toggle form-control" type="button" id="<?php echo e($buttonId); ?>"
            data-bs-toggle="dropdown" aria-expanded="false">
            <span class="text-truncate">2 adults - 1 children - 1 Infants</span>
        </button>
        <div class="dropdown-menu" aria-labelledby="<?php echo e($buttonId); ?>">
            <ul class="drop-rest">
                <?php $__currentLoopData = ['Adults' => 'onewayAdult', 'Child' => 'onewayChild', 'Infants' => 'onewayInfant']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <div class="d-flex small"><?php echo e($label); ?></div>
                    <div class="ms-auto input-group plus-minus-input">
                        <div class="input-group-button">
                            <button type="button" class="circle" data-quantity="minus" data-field="<?php echo e($field); ?>">
                                <i class="bi bi-dash"></i>
                            </button>
                        </div>
                        <input class="input-group-field" type="number" name="<?php echo e($field); ?>" value="0">
                        <div class="input-group-button">
                            <button type="button" class="circle" data-quantity="plus" data-field="<?php echo e($field); ?>">
                                <i class="bi bi-plus"></i>
                            </button>
                        </div>
                    </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\USER\Herd\cs262_midterm_project\resources\views/partials/search/traveller-dropdown.blade.php ENDPATH**/ ?>