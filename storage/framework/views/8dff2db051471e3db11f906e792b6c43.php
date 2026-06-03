<section class="popular-routes">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                <h4 class="fs-2 fw-bold theme-text-secondary mb-0">Popular Routes</h4>
                <p class="mb-0 theme-text-accent-one">International &amp; Domestic fames ac ante ipsum</p>
            </div>
            <div class="col-12 col-lg-6 align-self-center justify-content-end d-flex">
                <div class="d-flex">
                    <div class="dropdown-center">
                        <button class="btn recomended-btn" type="button">More <i class="bi bi-arrow-up-right ms-2"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <?php
            $routes = [
                ['icon1' => '1.png', 'dep1' => '14:00', 'arr1' => '22:00', 'from1' => 'DEL', 'to1' => 'LHR', 'dur1' => '4h 05m',
                 'icon2' => '2.png', 'dep2' => '15:00', 'arr2' => '17:00', 'from2' => 'ABD', 'to2' => 'AEH', 'dur2' => '2h 00m',
                 'price' => '934', 'deals' => '16'],
                ['icon1' => '5.png', 'dep1' => '12:00', 'arr1' => '14:50', 'from1' => 'AAR', 'to1' => 'LHR', 'dur1' => '2h 05m',
                 'icon2' => '4.png', 'dep2' => '14:00', 'arr2' => '17:00', 'from2' => 'LHR', 'to2' => 'AAR', 'dur2' => '3h 00m',
                 'price' => '734', 'deals' => '12'],
                ['icon1' => '1.png', 'dep1' => '20:00', 'arr1' => '22:15', 'from1' => 'DXB', 'to1' => 'LHR', 'dur1' => '2h 15m',
                 'icon2' => '3.png', 'dep2' => '14:00', 'arr2' => '18:50', 'from2' => 'LHR', 'to2' => 'DXB', 'dur2' => '2h 20m',
                 'price' => '534', 'deals' => '20'],
                ['icon1' => '3.png', 'dep1' => '12:00', 'arr1' => '22:05', 'from1' => 'MUB', 'to1' => 'LAS', 'dur1' => '10h 05m',
                 'icon2' => '4.png', 'dep2' => '14:00', 'arr2' => '24:00', 'from2' => 'LAS', 'to2' => 'MUM', 'dur2' => '10h 00m',
                 'price' => '998', 'deals' => '20'],
            ];
            ?>
            <?php $__currentLoopData = $routes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $route): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 mb-3">
                <div class="p-3 theme-border-radius border">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-4 col-lg-6">
                            <div class="row align-items-center">
                                <div class="col-sm-auto">
                                    <img class="size-40" src="<?php echo e(asset('assets/images/icons/' . $route['icon1'])); ?>" alt="image">
                                </div>
                                <div class="col">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="fs-6"><?php echo e($route['dep1']); ?></div>
                                            <div class="small theme-text-accent-one"><?php echo e($route['from1']); ?></div>
                                        </div>
                                        <div class="col text-center">
                                            <div class="flightLine"><div></div><div></div></div>
                                            <div class="small theme-text-accent-two"><?php echo e($route['dur1']); ?>- Nonstop</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="fs-6"><?php echo e($route['arr1']); ?></div>
                                            <div class="small theme-text-accent-one"><?php echo e($route['to1']); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 my-5 my-lg-0">
                            <div class="row align-items-center">
                                <div class="col-sm-auto">
                                    <img class="size-40" src="<?php echo e(asset('assets/images/icons/' . $route['icon2'])); ?>" alt="image">
                                </div>
                                <div class="col">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="fs-6"><?php echo e($route['dep2']); ?></div>
                                            <div class="small theme-text-accent-one"><?php echo e($route['from2']); ?></div>
                                        </div>
                                        <div class="col text-center">
                                            <div class="flightLine"><div></div><div></div></div>
                                            <div class="small theme-text-accent-two"><?php echo e($route['dur2']); ?>- Nonstop</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="fs-6"><?php echo e($route['arr2']); ?></div>
                                            <div class="small theme-text-accent-one"><?php echo e($route['to2']); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="d-flex justify-content-between">
                                <div class="me-4">
                                    <div class="fs-6">US$<?php echo e($route['price']); ?></div>
                                    <div class="small theme-text-accent-one"><?php echo e($route['deals']); ?> deals</div>
                                </div>
                                <a href="#" class="theme-btn-outline p-2">
                                    View Deal <i class="bi bi-arrow-up-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\dogso\OneDrive\Documents\GitHub\Ministry_of_Toursim\resources\views/sections/popular-routes.blade.php ENDPATH**/ ?>