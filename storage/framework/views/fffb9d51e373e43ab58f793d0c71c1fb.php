<section class="experience">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wrap">
                    <div class="row">
                        <div class="col-12 position-relative align-self-center">
                            <h4 class="display-4 theme-text-white mb-0 fw-bold text-center">Wonderful Travel Experiences with<br>Round Tours</h4>
                            <div class="group custom-button">
                                <div class="d-flex align-items-center">
                                    <a href="https://www.youtube.com/watch?v=oNxCporOofo" class="video-icon video-icon2 mr-30 ml-20 video_model">
                                        <i class="bi bi-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <?php
            $stats = [
                ['icon' => 'bi-airplane', 'count' => '4259', 'label' => 'Flights'],
                ['icon' => 'bi-hospital', 'count' => '8289', 'label' => 'Hotels'],
                ['icon' => 'bi-award', 'count' => '9789', 'label' => 'Packages'],
                ['icon' => 'bi-star', 'count' => '9999', 'label' => 'Ratings'],
            ];
            ?>
            <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-lg-0">
                <div class="d-flex align-items-center p-4 p-md-0">
                    <i class="bi <?php echo e($stat['icon']); ?> fs-4 theme-text-primary"></i>
                    <h3 class="fs-2 mb-0 mx-3"><?php echo e($stat['count']); ?></h3>
                    <p class="fs-4 mb-0 theme-text-accent-one"><?php echo e($stat['label']); ?></p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\USER\Herd\cs262_midterm_project\resources\views/sections/experience.blade.php ENDPATH**/ ?>