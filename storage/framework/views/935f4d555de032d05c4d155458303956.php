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
    

    <div class="showcase-banner" style="
        background: url('/assets/images/section/banner1image.jpg') center center / cover no-repeat;
        height: 400px;
        width: 100%;
        margin-bottom: 6rem;
        margin-top: 10rem;
        position: relative;
        box-shadow: 0 20px 60px rgba(0,0,0,0.35), 0 6px 20px rgba(0,0,0,0.2);
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
            <h1 style="
                color: #fff;
                font-weight: 700;
                font-size: 2.8rem;
                text-shadow: 0 4px 20px rgba(0,0,0,0.6), 0 2px 6px rgba(0,0,0,0.4);
                margin-bottom: 0.75rem;
            ">
                Discover the Kingdom of Wonder
            </h1>

            <p style="
                color: rgba(255,255,255,0.85);
                font-size: 1.1rem;
                max-width: 550px;
                margin-bottom: 1.5rem;
                text-shadow: 0 2px 8px rgba(0,0,0,0.5);
            ">
                Explore Cambodia's ancient temples, vibrant culture, and breathtaking landscapes
            </p>
        </div>
    </div>

    <!-- Cambodia Description -->
    <section class="container text-center mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 style="
                    font-weight: 700;
                    font-size: 2.4rem;
                    color: #1f2937;
                    margin-bottom: 3rem;
                ">
                    Experience Cambodia
                </h2>

                <p style="
                    font-size: 1.1rem;
                    line-height: 1.9;
                    color: #6b7280;
                    max-width: 850px;
                    margin: 0 auto;
                ">
                    Cambodia is a land of timeless beauty, rich history, and warm hospitality.
                    Home to the magnificent Angkor temples, vibrant cultural traditions, pristine
                    beaches, and breathtaking natural landscapes, the Kingdom of Wonder offers
                    unforgettable experiences for every traveler. From exploring ancient heritage
                    sites and bustling local markets to relaxing on tropical islands and discovering
                    hidden countryside gems, Cambodia invites visitors to immerse themselves in its
                    unique charm and create memories that last a lifetime.
                </p>
            </div>
        </div>
    </section>

    <div style="margin-bottom: 9rem;">
        <?php echo $__env->make('sections.experience', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>

    <?php echo $__env->make('sections.testimonials', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('sections.blog', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('sections.newsletter', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\Herd\cs262_midterm_project\resources\views/home.blade.php ENDPATH**/ ?>