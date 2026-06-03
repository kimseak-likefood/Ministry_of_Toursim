<section class="testimonials py-5" id="review">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h4 class="fs-2 fw-bold theme-text-secondary mb-0">What our customers are saying us?</h4>
                <p class="mb-0 theme-text-accent-one">These popular destinations have a lot to offer</p>
            </div>
            <div class="col-12 col-lg-6 align-self-center justify-content-end d-flex">
                <div class="d-flex">
                    <div class="d-flex flex-column text-end mt-3 mt-lg-0">
                        <span class="fs-3 theme-text-accent-one">13m+</span>
                        <span class="font-extra-small theme-text-accent-one">Happy People</span>
                    </div>
                    <div class="d-flex flex-column text-end mt-3 mt-lg-0 ms-5">
                        <span class="fs-3 theme-text-accent-one">4.88</span>
                        <span class="font-extra-small theme-text-accent-one">Overall rating</span>
                        <span class="text-warning">
                            <?php for($i = 0; $i < 5; $i++): ?>
                            <i class="bi bi-star-fill me-1 extra-text-color"></i>
                            <?php endfor; ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="row">
                <?php
                $reviews = [
                    ['title' => 'Hotel Equatorial Jwelqc', 'text' => '"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore sunt explicabo."', 'avatar' => 'avatar01.png', 'name' => 'Client Johna', 'role' => 'Expert Guide'],
                    ['title' => 'Holiday Places ptx', 'text' => '"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."', 'avatar' => 'avatar02.png', 'name' => 'Courtney Henry', 'role' => 'Water Coolers'],
                    ['title' => 'Flight Wdaatorial Melaka', 'text' => '"quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."', 'avatar' => 'avatar03.png', 'name' => 'Mustafa Ahamad', 'role' => 'Travel World'],
                ];
                ?>
                <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 col-lg-4 position-relative">
                    <div class="client-con p-5 mt-5 mt-lg-0 theme-box-shadow">
                        <h4 class="mb-3 fs-6 theme-text-primary"><?php echo e($review['title']); ?></h4>
                        <p class="mb-0 theme-text-accent-two lh-lg small"><?php echo e($review['text']); ?></p>
                        <div class="d-flex flex-column justify-content-center mt-3 pt-3 border-top">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <figure class="mb-0 avatar">
                                        <img src="<?php echo e(asset('assets/images/customer/' . $review['avatar'])); ?>" class="img-fluid" alt="client review">
                                    </figure>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="mt-2 theme-text-accent-one"><?php echo e($review['name']); ?></span>
                                    <p class="mb-0 theme-text-accent-two small"><?php echo e($review['role']); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\USER\Herd\cs262_midterm_project\resources\views/sections/testimonials.blade.php ENDPATH**/ ?>