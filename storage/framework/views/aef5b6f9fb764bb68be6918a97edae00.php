<?php $__env->startSection('title', 'Tourism'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

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
    <h2 style="text-align: center; margin-bottom: 50px; font-size: 45px;">Top Destinations</h2>

    <div style="display: flex; flex-wrap: wrap; gap: 25px; justify-content: center;">

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <img src="/assets/images/destinations/phnompenh.jpg" alt="Phnom Penh" style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold;">Phnom Penh</p>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <img src="/assets/images/destinations/sieamreap.jpg" alt="Siem Reap" style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold;">Siem Reap</p>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <img src="/assets/images/destinations/kampot.jpg" alt="Kampot" style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold;">Kampot</p>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <img src="/assets/images/destinations/mondulkiri.jpg" alt="Mondulkiri" style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold;">Mondulkiri</p>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <img src="/assets/images/destinations/kohkong.jpg" alt="Koh Kong" style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold;">Koh Kong</p>
        </div>

        <div style="text-align: center; overflow: hidden; border-radius: 15px;">
            <img src="/assets/images/destinations/battambang.jpg" alt="Battambang" style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); object-position: center top; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            <p style="margin-top: 10px; font-size: 16px; font-weight: bold;">Battambang</p>
        </div>

    </div>
</section>



<section style="padding: 60px 40px; background: white;">
    <h2 style="text-align: center; margin-bottom: 80px; font-size: 45px;">Things To Do</h2>

    
    <div style="display: flex; align-items: center; gap: 30px; margin-bottom: 40px;">
        <div style="overflow: hidden; border-radius: 15px; flex-shrink: 0;">
            <img src="/assets/images/destinations/culture.jpg" alt="Culture" style="width: 450px; height: 280px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
        </div>
        <div>
            <h3 style="font-size: 34px; margin-bottom: 15px;">Culture</h3>
            <p style="color: #666; font-size: 20px; line-height: 1.8;">Discover the heart and soul of Cambodia through its magnificent temples, royal palaces, vibrant traditions, and world-class museums. From the awe-inspiring legacy of the Khmer Empire to the colorful customs and warm hospitality of local communities, every destination offers a unique glimpse into the nation's rich heritage. Explore centuries of history, admire traditional arts and architecture, experience cultural performances, and uncover the stories that have shaped Cambodia into one of Southeast Asia's most fascinating cultural treasures. Whether wandering through ancient landmarks or participating in local celebrations, you'll find culture woven into every aspect of Cambodian life.</p>
        </div>
    </div>

   
    <div style="display: flex; align-items: center; gap: 30px; margin-bottom: 40px;">
        <div style="overflow: hidden; border-radius: 15px; flex-shrink: 0;">
            <img src="/assets/images/destinations/nature.jpg" alt="Nature" style="width: 450px; height: 280px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
        </div>
        <div>
            <h3 style="font-size: 34px; margin-bottom: 15px;">Nature</h3>
            <p style="color: #666; font-size: 20px; line-height: 1.8;">Experience the breathtaking natural beauty of Cambodia, where lush forests, rolling mountains, pristine rivers, and hidden waterfalls await discovery. Trek through scenic national parks, explore tranquil lakes, encounter diverse wildlife, and relax in some of the country's most stunning landscapes. From the remote jungles of the Cardamom Mountains to the serene countryside and tropical coastlines, Cambodia offers countless opportunities to connect with nature and uncover its untouched wonders. Each landscape reveals a different side of the Kingdom, inviting visitors to slow down, explore, and appreciate its remarkable natural diversity.</p>
        </div>
    </div>

    
    <div style="display: flex; align-items: center; gap: 30px; margin-bottom: 40px;">
        <div style="overflow: hidden; border-radius: 15px; flex-shrink: 0;">
            <img src="/assets/images/destinations/adventure.jpg" alt="Adventure" style="width: 450px; height: 280px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
        </div>
        <div>
            <h3 style="font-size: 34px; margin-bottom: 15px;">Adventure</h3>
            <p style="color: #666; font-size: 20px; line-height: 1.8;">Embark on unforgettable adventures across Cambodia, where ancient ruins, rugged landscapes, and thrilling outdoor experiences await. Climb hidden temple mountains, trek through dense jungles, explore remote provinces, and navigate winding trails that lead to breathtaking views. Whether you're seeking adrenaline-pumping activities, off-the-beaten-path destinations, or exciting encounters with nature and history, Cambodia offers endless opportunities for exploration and discovery at every turn. Every journey promises new challenges, memorable experiences, and the excitement of uncovering places few travelers have seen.</p>
        </div>
    </div>

</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\Herd\cs262_midterm_project\resources\views/pages/tourism.blade.php ENDPATH**/ ?>