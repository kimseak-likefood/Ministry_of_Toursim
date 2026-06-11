<?php $__env->startSection('title', 'Public Holidays 2026'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- Hero Banner -->
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
        <h1 style="font-size: 60px; font-weight: bold;">Events</h1>
        <p style="font-size: 20px; margin-top: 10px;">Explore Cambodia's official tourism guide — plan your perfect journey today.</p>
    </div>
</section> 

<!-- Featured Holidays -->
<section style="padding: 60px 40px; background: #f9f9f9;">
    <h2 style="text-align: center; margin-bottom: 40px; font-size: 32px;">Major Celebrations</h2>

    <?php if(auth()->guard()->check()): ?>
    <?php if(auth()->user()->is_admin): ?>
        <div style="text-align: center; margin-bottom: 45px;">
            <a href="<?php echo e(route('posts.create_events')); ?>" style="background: #222; color: white; padding: 10px 24px; border-radius: 50px; text-decoration: none; font-size: 14px;">+ Add Event</a>
        </div>
    <?php endif; ?>
<?php endif; ?>

<div style="display: flex; flex-wrap: wrap; gap: 25px; justify-content: center;">
    <?php $__currentLoopData = $featured; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(route('posts.viewevents', $event)); ?>" style="text-decoration: none; color: inherit;">
    <div style="text-align: center; overflow: hidden; border-radius: 15px;">
        <?php if($event->image): ?>
            <img src="<?php echo e(asset('storage/' . $event->image)); ?>" alt="<?php echo e($event->name); ?>" style="width: 350px; height: 250px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
        <?php else: ?>
    <div style="width: 350px; height: 250px; border-radius: 15px; background: #f0ede8; display: flex; align-items: center; justify-content: center; box-shadow: 0 6px 20px rgba(0,0,0,0.08);">
        <span style="font-size: 48px;">no image</span>
    </div>
<?php endif; ?>
        <p style="margin-top: 10px; font-size: 16px; font-weight: bold;"><?php echo e($event->name); ?></p>
        <p style="color: #9ca3af; font-size: 14px; margin: 0;"><?php echo e($event->date->format('d M Y')); ?></p>
        <?php if(auth()->guard()->check()): ?>
            <?php if(auth()->user()->is_admin): ?>
                <div style="margin-top: 8px; display: flex; gap: 8px; justify-content: center;">
                    <a href="<?php echo e(route('posts.edit_events', $event)); ?>" style="font-size: 13px; color: #222;">Edit</a>
                    <form method="POST" action="<?php echo e(route('events.destroy', $event)); ?>" style="display:contents;">
                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                        <button type="submit" onclick="return confirm('Delete this event?')" style="background: none; border: none; font-size: 13px; color: #888; cursor: pointer;">Delete</button>
                    </form>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</section>

<!-- Holiday Stories -->
<section style="padding: 60px 40px; background: white;">
    <h2 style="text-align: center; margin-bottom: 40px; font-size: 32px;">Holiday Traditions</h2>

    <div style="display: flex; align-items: center; gap: 30px; margin-bottom: 40px;">
        <div style="overflow: hidden; border-radius: 15px; flex-shrink: 0;">
            <img src="/assets/images/celebration/kny_1.jpg" alt="Khmer New Year" style="width: 450px; height: 280px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
        </div>
        <div>
            <h3 style="font-size: 28px; margin-bottom: 15px;">Khmer New Year</h3>
            <p style="color: #666; font-size: 18px; line-height: 1.8;">The most anticipated celebration in Cambodia, marking the end of the harvest season. Families gather to play traditional games, visit pagodas, and welcome the new year with blessings and joy.</p>
        </div>
    </div>

    <div style="display: flex; align-items: center; gap: 30px; margin-bottom: 40px; flex-direction: row-reverse;">
        <div style="overflow: hidden; border-radius: 15px; flex-shrink: 0;">
            <img src="/assets/images/celebration/pchum.jpeg" alt="Pchum Ben" style="width: 450px; height: 280px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
        </div>
        <div>
            <h3 style="font-size: 28px; margin-bottom: 15px;">Pchum Ben</h3>
            <p style="color: #666; font-size: 18px; line-height: 1.8;">A 15-day religious festival where Cambodians honor their ancestors. Families visit pagodas to offer food to monks and spirits, believing that the deceased return to receive blessings during this sacred time.</p>
        </div>
    </div>

    <div style="display: flex; align-items: center; gap: 30px; margin-bottom: 40px;">
        <div style="overflow: hidden; border-radius: 15px; flex-shrink: 0;">
            <img src="/assets/images/celebration/om_tuk.jpg" alt="Water Festival" style="width: 450px; height: 280px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
        </div>
        <div>
            <h3 style="font-size: 28px; margin-bottom: 15px;">Water Festival</h3>
            <p style="color: #666; font-size: 18px; line-height: 1.8;">Thousands gather along the Tonle Sap river to watch spectacular boat races, illuminated floats, and fireworks. This ancient festival celebrates the reversal of the river's flow and marks the end of the rainy season.</p>
        </div>
    </div>

</section>

<!-- Full Holiday List -->
<section style="padding: 60px 0; background: #f9f9f9;">
    <h2 style="text-align: center; margin-bottom: 40px; font-size: 32px;">Complete Holiday Calendar</h2>
    <div style="max-width: 800px; margin: 0 auto; padding: 0 40px;">
        <table style="width:100%; border-collapse:collapse; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
            <table style="width:100%; border-collapse:collapse; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.08); text-align: center;">
            <tbody>
<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr style="border-bottom:1px solid #e5e7eb;">
    <td style="padding:14px 20px; color:#6b7280; font-size:14px; white-space:nowrap; width:140px; font-weight:500;"><?php echo e($event->date->format('d M Y')); ?></td>
    <td style="padding:14px 20px; color:#111827; font-size:14px;"><?php echo e($event->name); ?></td>
    <?php if(auth()->guard()->check()): ?>
        <?php if(auth()->user()->is_admin): ?>
        <td style="padding:14px 20px; white-space:nowrap;">
            <a href="<?php echo e(route('posts.edit_events', $event)); ?>" style="font-size: 13px; color: #222; margin-right: 8px;">Edit</a>
            <form method="POST" action="<?php echo e(route('events.destroy', $event)); ?>" style="display:inline;">
                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                <button type="submit" style="background: none; border: none; font-size: 13px; color: #888; cursor: pointer;">Delete</button>
            </form>
        </td>
        <?php endif; ?>
    <?php endif; ?>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>

    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\MSILMC\Ministry_of_Toursim\resources\views/pages/holidays&events.blade.php ENDPATH**/ ?>