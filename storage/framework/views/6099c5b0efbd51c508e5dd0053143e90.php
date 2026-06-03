<ul class="nav nav-pills mb-3 destination-pill" id="pills-tab2" role="tablist">
    <?php $__currentLoopData = ['regions' => 'Regions', 'cities' => 'Cities', 'contact' => 'Places of interest']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="nav-item" role="presentation">
        <button class="nav-link <?php echo e($loop->first ? 'active' : ''); ?>" id="pills-<?php echo e($tab); ?>-tab" data-bs-toggle="pill"
            data-bs-target="#pills-<?php echo e($tab); ?>" type="button" role="tab" aria-controls="pills-<?php echo e($tab); ?>"
            aria-selected="<?php echo e($loop->first ? 'true' : 'false'); ?>"><?php echo e($label); ?></button>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH C:\Users\USER\Herd\cs262_midterm_project\resources\views/partials/destinations-tabs.blade.php ENDPATH**/ ?>