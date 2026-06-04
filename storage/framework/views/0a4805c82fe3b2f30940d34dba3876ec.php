<?php $__env->startSection('title', 'RoundTours - Tours and Travel Landing Page'); ?>

<?php $__env->startSection('content'); ?>
    <div class="pagewrap">
        <div class="head-wrapper">
            <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo $__env->make('partials.search-engine', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>

    <?php echo $__env->make('sections.recommended', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('sections.special-offers', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('sections.destinations', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

   <div class="showcase-banner" style="
    background: url('/assets/images/section/banner-image.jpg') center center / cover no-repeat;
    height: 400px;
    width: 100%;
    margin-bottom: 15rem;
    margin-top: 8rem;
    position: relative;
">
    <div style="
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(0,0,0,0.15) 0%, rgba(0,0,0,0.55) 100%);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 2rem;
    ">
        <h1 style="color: #fff; font-weight: 700; font-size: 2.8rem; text-shadow: 0 2px 10px rgba(0,0,0,0.4); margin-bottom: 0.75rem;">
            Discover the Kingdom of Wonder
        </h1>
        <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; max-width: 550px; margin-bottom: 1.5rem;">
            Explore Cambodia's ancient temples, vibrant culture, and breathtaking landscapes
        </p>
    </div>
</div>



    <?php echo $__env->make('sections.experience', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php $__env->startSection('content'); ?>
    <?php echo $__env->make('sections.testimonials', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('sections.blog', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('sections.newsletter', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\MSILMC\Ministry_of_Toursim\resources\views/home.blade.php ENDPATH**/ ?>