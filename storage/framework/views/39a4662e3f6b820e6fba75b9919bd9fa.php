<?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->startSection('title', 'Tourism'); ?>

<?php $__env->startSection('content'); ?>


<section style="
    background-image: url('/assets/images/section/banner-image.jpg');
    background-size: cover;
    background-position: center;
    height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
">

    <div style="
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(0,0,0,0.5);
    "></div>

    
    <div style="position: relative; text-align: center; color: white;">
        <h1 style="font-size: 60px; font-weight: bold;">Cambodia Tourism</h1>
        <p style="font-size: 20px; margin-top: 10px;">Explore Cambodia's official tourism guide — plan your perfect journey today.</p>
    </div>
</section>



<section style="padding: 60px 40px; background: #f9f9f9;">
    <h2 style="text-align: center; margin-bottom: 40px; font-size: 32px;">Top Destinations</h2>

    <div style="display: flex; flex-wrap: wrap; gap: 25px; justify-content: center;">

        <div style="text-align: center;">
            <img src="/assets/images/destinations/phnompenh.jpg" alt="Phnom Penh" style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15);">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold;">Phnom Penh</p>
        </div>

        <div style="text-align: center;">
            <img src="/assets/images/destinations/sieamreap.jpg" alt="Siem Reap" style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15);">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold;">Siem Reap</p>
        </div>

        <div style="text-align: center;">
            <img src="/assets/images/destinations/kampot.jpg" alt="Kampot" style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15);">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold;">Kampot</p>
        </div>

        <div style="text-align: center;">
            <img src="/assets/images/destinations/mondulkiri.jpg" alt="Mondulkiri" style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15);">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold;">Mondulkiri</p>
        </div>

        <div style="text-align: center;">
            <img src="/assets/images/destinations/kohkong.jpg" alt="Koh Kong" style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15);">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold;">Koh Kong</p>
        </div>

        <div style="text-align: center;">
            <img src="/assets/images/destinations/battambang.jpg" alt="Battambang" style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); object-position: center top;">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold;">Battambang</p>
        </div>

    </div>
</section>



<section style="padding: 60px 40px; background: white;">
    <h2 style="text-align: center; margin-bottom: 40px; font-size: 32px;">Things To Do</h2>

    
    <div style="display: flex; align-items: center; gap: 30px; margin-bottom: 40px;">
        <img src="/assets/images/activities/national-museum.jpg" alt="Culture" style="width: 450px; height: 280px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15);">
        <div>
            <h3 style="font-size: 34px; margin-bottom: 15px;">Culture</h3>
            <p style="color: #666; font-size: 20px; line-height: 1.8;">Explore ancient temples, royal palaces, and world-class museums that tell Cambodia's remarkable story.</p>
        </div>
    </div>

   
    <div style="display: flex; align-items: center; gap: 30px; margin-bottom: 40px;">
        <img src="/assets/images/activities/yeak-loam.jpg" alt="Nature" style="width: 450px; height: 280px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15);">
        <div>
            <h3 style="font-size: 34px; margin-bottom: 15px;">Nature</h3>
            <p style="color: #666; font-size: 20px; line-height: 1.8;">Trek through lush forests, swim in volcanic lakes, and discover stunning waterfalls across the countryside.</p>
        </div>
    </div>

    
    <div style="display: flex; align-items: center; gap: 30px; margin-bottom: 40px;">
        <img src="/assets/images/activities/koh-ker.jpg" alt="Adventure" style="width: 450px; height: 280px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15);">
        <div>
            <h3 style="font-size: 34px; margin-bottom: 15px;">Adventure</h3>
            <p style="color: #666; font-size: 20px; line-height: 1.8;">Climb ancient pyramid temples, go off-road through remote provinces, and experience real adventure.</p>
        </div>
    </div>

</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Herd\Ministry_of_Toursim-main\resources\views/pages/tourism.blade.php ENDPATH**/ ?>