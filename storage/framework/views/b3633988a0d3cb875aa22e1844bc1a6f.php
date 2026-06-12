<?php $__env->startSection('title', 'Activities'); ?>
<?php $__env->startSection('content'); ?>
    <div class="pagewrap">
        <div class="head-wrapper">
            <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>

<section style="
    background-image: url('/assets/images/section/banner-image.jpg');
    background-size: cover;
    background-position: center;
    height: 500px;
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: center;
    position: relative;
">

    <div style="
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(0,0,0,0.5);
    "></div>

    
    <div style="position: relative; color: white;">
        <h1 style="font-size: 60px; font-weight: bold;">Activities in Cambodia</h1>
        <p style="font-size: 20px; margin-top: 10px;">From ancient temples to jungle adventures — find your next experience in the Kingdom of Wonder.</p>
    </div>
</section>

    <!-- About Cambodia -->
    <section class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 style="font-weight: 700; font-size: 2.4rem; color: #1f2937; margin-bottom: 1.5rem; margin-top: 3rem; ">
                    About Cambodia
                </h2>
                <p style="font-size: 1.1rem; line-height: 1.8; color: #6b7280;">
                    Nestled in the heart of Southeast Asia, Cambodia is a land of timeless beauty, rich history, and warm hospitality. From the magnificent Angkor temples to pristine tropical islands, the Kingdom of Wonder offers unforgettable experiences for every traveler.
                </p>
            </div>
        </div>
    </section>

    <!-- Geography -->
    
    <?php if($geography): ?>
    <section class="container mb-5">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                
                <div class="img-card-wrap" style="border-radius: 24px; overflow: hidden; position: relative; box-shadow: 0 10px 40px rgba(0,0,0,0.12); height: 320px;">
                    
                    <img src="<?php echo e(asset($geography->image)); ?>" 
                        alt="<?php echo e($geography->alt_text); ?>" 
                        style="width:100%; height:100%; object-fit:cover; display:block; transition: transform 0.4s ease;" 
                        onmouseover="this.style.transform='scale(1.08)'" 
                        onmouseout="this.style.transform='scale(1)'">

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('modify', $geography)): ?>
                    <div class="admin-overlay">
                        <a href="<?php echo e(route('attractions.edit', $geography)); ?>" class="admin-btn">✏️</a>
                        <form method="POST" action="<?php echo e(route('attractions.destroy', $geography)); ?>" onsubmit="return confirm('Delete this section?')" style="margin:0;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="admin-btn">🗑️</button>
                        </form>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
            <div class="col-md-6">
                <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;"><?php echo e($geography->name); ?></h3>
                <p style="color: #6b7280; line-height: 1.8;">
                    <?php echo e($geography->subtitle); ?>

                </p>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- History -->
    <?php if($history): ?>
    <section class="container mb-5">
        <div class="row align-items-center flex-md-row-reverse">
            <div class="col-md-6 mb-4 mb-md-0">
                
                <div class="img-card-wrap" style="border-radius: 24px; overflow: hidden; position: relative; box-shadow: 0 10px 40px rgba(0,0,0,0.12); height: 320px;">
                    
                    <img src="<?php echo e(asset($history->image)); ?>" 
                        alt="<?php echo e($history->alt_text); ?>" 
                        style="width:100%; height:100%; object-fit:cover; display:block; transition: transform 0.4s ease;" 
                        onmouseover="this.style.transform='scale(1.08)'" 
                        onmouseout="this.style.transform='scale(1)'">

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('modify', $history)): ?>
                    <div class="admin-overlay">
                        <a href="<?php echo e(route('attractions.edit', $history)); ?>" class="admin-btn">✏️</a>
                        <form method="POST" action="<?php echo e(route('attractions.destroy', $history)); ?>" onsubmit="return confirm('Delete this section?')" style="margin:0;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="admin-btn">🗑️</button>
                        </form>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
            <div class="col-md-6">
                <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;"><?php echo e($history->name); ?></h3>
                <p style="color: #6b7280; line-height: 1.8;">
                    <?php echo e($history->subtitle); ?>

                </p>
            </div>
        </div>
    </section>
    <?php endif; ?>
    

    <!-- Culture -->
    <?php if($culture): ?>
    <section class="container mb-5">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                
                <div class="img-card-wrap" style="border-radius: 24px; overflow: hidden; position: relative; box-shadow: 0 10px 40px rgba(0,0,0,0.12); height: 320px;">
                    
                    <img src="<?php echo e(asset($culture->image)); ?>" 
                        alt="<?php echo e($history->alt_text); ?>" 
                        style="width:100%; height:100%; object-fit:cover; display:block; transition: transform 0.4s ease;" 
                        onmouseover="this.style.transform='scale(1.08)'" 
                        onmouseout="this.style.transform='scale(1)'">

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('modify', $culture)): ?>
                    <div class="admin-overlay">
                        <a href="<?php echo e(route('attractions.edit', $culture)); ?>" class="admin-btn">✏️</a>
                        <form method="POST" action="<?php echo e(route('attractions.destroy', $history)); ?>" onsubmit="return confirm('Delete this section?')" style="margin:0;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="admin-btn">🗑️</button>
                        </form>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
            <div class="col-md-6">
                <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;"><?php echo e($culture->name); ?></h3>
                <p style="color: #6b7280; line-height: 1.8;">
                    <?php echo e($culture->subtitle); ?>

                </p>
            </div>
        </div>
    </section>
    <?php endif; ?>
    

    <!-- Climate -->
    <?php if($climate): ?>
    <section class="container mb-5">
        <div class="row align-items-center flex-md-row-reverse">
            <div class="col-md-6 mb-4 mb-md-0">
                
                <div class="img-card-wrap" style="border-radius: 24px; overflow: hidden; position: relative; box-shadow: 0 10px 40px rgba(0,0,0,0.12); height: 320px;">
                    
                    <img src="<?php echo e(asset($climate->image)); ?>" 
                        alt="<?php echo e($history->alt_text); ?>" 
                        style="width:100%; height:100%; object-fit:cover; display:block; transition: transform 0.4s ease;" 
                        onmouseover="this.style.transform='scale(1.08)'" 
                        onmouseout="this.style.transform='scale(1)'">

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('modify', $climate)): ?>
                    <div class="admin-overlay">
                        <a href="<?php echo e(route('attractions.edit', $culture)); ?>" class="admin-btn">✏️</a>
                        <form method="POST" action="<?php echo e(route('attractions.destroy', $climate)); ?>" onsubmit="return confirm('Delete this section?')" style="margin:0;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="admin-btn">🗑️</button>
                        </form>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
            <div class="col-md-6">
                <h3 style="font-weight: 700; font-size: 1.5rem; color: #1f2937; margin-bottom: 1rem;"><?php echo e($climate->name); ?></h3>
                <p style="color: #6b7280; line-height: 1.8;">
                    <?php echo e($climate->subtitle); ?>

                </p>
            </div>
        </div>
    </section>
    <?php endif; ?>
    

    <!-- Featured Tourist Attractions -->
    
    <div style="max-width:1200px; margin:3rem auto; padding:0 1.5rem;">

        <div style="text-align:center; margin-bottom:2.5rem;">
            <h2 style="font-size:2rem; font-weight:700; margin:0 0 12px;">
                Featured Tourist Attractions
            </h2>
            <div style="width:60px; height:3px; background:#c0392b; margin:0 auto;"></div>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('modify', App\Models\Attraction::class)): ?>
            <div style="text-align: right; margin-bottom: 2rem;">
                <a href="<?php echo e(route('attractions.create')); ?>" style="background: #27ae60; color: white; text-decoration: none; padding: 12px 24px; border-radius: 8px; font-weight: 600; display: inline-block; box-shadow: 0 4px 12px rgba(39,174,96,0.2); transition: background 0.2s;">
                    ➕ Add New Attraction
                </a>
            </div>
            <?php endif; ?>
        </div>

        <div style="display:grid; grid-template-columns:repeat(3, 1fr); gap:24px;">

            <?php $__currentLoopData = $attractions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attraction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="img-card-wrap" style="border-radius:24px; overflow:hidden; position:relative; box-shadow:0 10px 40px rgba(0,0,0,0.12);">
                    
                    <div style="position:relative; width:100%; height:260px; overflow:hidden;">
                        <img src="<?php echo e(asset($attraction->image)); ?>"
                            alt="<?php echo e($attraction->alt_text); ?>"
                            style="width:100%; height:100%; object-fit:cover; display:block; transition:transform 0.4s ease;"
                            onmouseover="this.style.transform='scale(1.08)'"
                            onmouseout="this.style.transform='scale(1)'">

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('modify', $attraction)): ?>
                        <div class="admin-overlay">
                            <a href="<?php echo e(route('attractions.edit', $attraction)); ?>" class="admin-btn">✏️</a>
                            <form method="POST" action="<?php echo e(route('attractions.destroy', $attraction)); ?>"
                                onsubmit="return confirm('Delete this attraction?')" style="margin:0;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="admin-btn">🗑️</button>
                            </form>
                        </div>
                        <?php endif; ?>
                    </div>

                    <a href="#" style="text-decoration:none; display:block; padding:16px 4px 16px 16px;">
                        <h3 style="color:#1f2937; font-size:16px; font-weight:600; margin:0 0 4px;"><?php echo e($attraction->name); ?></h3>
                        <p style="color:#9ca3af; font-size:14px; margin:0;"><?php echo e($attraction->name_kh ?? $attraction->subtitle); ?></p>
                    </a>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
    <?php echo $__env->make('sections.newsletter', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\Herd\cs262_midterm_project\resources\views/pages/activies.blade.php ENDPATH**/ ?>