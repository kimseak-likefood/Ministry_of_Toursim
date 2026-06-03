<section class="special-offers" id="offers">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h4 class="fs-2 fw-bold theme-text-secondary mb-0">Special Offers</h4>
                <p class="mb-0 theme-text-accent-one">These popular destinations have a lot to offer</p>
            </div>
        </div>
        <div class="row">
            <?php
            $offers = [
                ['class' => 'product01', 'subtitle' => null, 'title' => "Things to do on <br>your trip", 'btn' => 'Learn More'],
                ['class' => 'product02', 'subtitle' => 'Enjoy Summer Deals', 'title' => 'Up to 70% Discount!', 'btn' => 'View Deal'],
            ];
            ?>
            <?php $__currentLoopData = $offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 col-md-6 mb-3 mb-md-0 overflow-hidden hoverShine">
                <div class="box <?php echo e($offer['class']); ?>">
                    <div class="content">
                        <?php if($offer['subtitle']): ?>
                        <p class="fs-6 mb-2 theme-text-white"><?php echo e($offer['subtitle']); ?></p>
                        <?php endif; ?>
                        <p class="fs-1 theme-heading theme-text-white mb-4"><?php echo $offer['title']; ?></p>
                        <div class="custom-button">
                            <a href="javascript:void(0)" class="btn btn-shop small">
                                <?php echo e($offer['btn']); ?>

                                <i class="bi bi-arrow-up-right fs-6 ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\dogso\OneDrive\Documents\GitHub\Ministry_of_Toursim\resources\views/sections/special-offers.blade.php ENDPATH**/ ?>