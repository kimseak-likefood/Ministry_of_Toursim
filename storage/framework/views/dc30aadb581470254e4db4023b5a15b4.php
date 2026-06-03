<div class="search-engine">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 mb-5 text-center position-relative">
                <h1 class="display-3 fw-bold mb-4 theme-text-white theme-text-shadow">
                    A Journey to Adventurous
                </h1>
                <p class="mb-0 theme-text-white">Discover amazing places at exclusive deals</p>
            </div>
        </div>
        <div class="row mt-0 mt-lg-5">
            <div class="col-12 col-lg-10 offset-lg-1 mb-5 text-center position-relative">
                <?php echo $__env->make('partials.search.tabs', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <div class="tab-content mt-3" id="myTabContent">
                    <?php echo $__env->make('partials.search.flight', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('partials.search.hotel', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('partials.search.holiday', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\dogso\OneDrive\Documents\GitHub\Ministry_of_Toursim\resources\views/partials/search-engine.blade.php ENDPATH**/ ?>