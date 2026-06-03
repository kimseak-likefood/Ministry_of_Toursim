<div class="tab-pane fade show active" id="flight-tab-pane" role="tabpanel"
    aria-labelledby="flight-tab" tabindex="0">
    <?php echo $__env->make('partials.search.flight-subtabs', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class="tab-content" id="pills-tabContent">
        <?php echo $__env->make('partials.search.flight-oneway', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->make('partials.search.flight-round', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->make('partials.search.flight-multicity', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
</div>
<?php /**PATH C:\Users\User\Herd\Ministry_of_Toursim-main\resources\views/partials/search/flight.blade.php ENDPATH**/ ?>