
<?php $__env->startSection('title', $event->name); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<section style="padding: 60px 40px; max-width: 800px; margin: 0 auto;">

    <?php if($event->image): ?>
        <img src="<?php echo e(asset('storage/' . $event->image)); ?>" style="width: 100%; height: 400px; object-fit: cover; border-radius: 15px; margin-bottom: 30px;">
    <?php else: ?>
        <div style="width: 100%; height: 400px; border-radius: 15px; background: #f0ede8; display: flex; align-items: center; justify-content: center; margin-bottom: 30px;">
            <span style="font-size: 80px;">no image</span>
        </div>
    <?php endif; ?>

    <p style="color: #9ca3af; font-size: 14px; margin-bottom: 8px;"><?php echo e(\Carbon\Carbon::parse($event->date)->format('d M Y')); ?></p>
    <h1 style="font-size: 40px; margin-bottom: 20px;"><?php echo e($event->name); ?></h1>

    <?php if($event->description): ?>
        <p style="font-size: 18px; line-height: 1.9; color: #444;"><?php echo e($event->description); ?></p>
    <?php endif; ?>

    <div style="margin-top: 30px; display: flex; gap: 12px; align-items: center;">
        <a href="/holidays&events" style="color: #888; font-size: 14px;">← Back to Events</a>
        <?php if(auth()->guard()->check()): ?>
            <?php if(auth()->user()->is_admin): ?>
                <a href="<?php echo e(route('posts.viewposts', $event)); ?>" style="color: #222; font-size: 14px; font-weight: 600;">Edit</a>
                <form method="POST" action="<?php echo e(route('events.destroy', $event)); ?>" style="display:contents;">
                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                    <button type="submit"  style="background: none; border: none; color: #888; font-size: 14px; cursor: pointer;">Delete</button>
                </form>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\MSILMC\Ministry_of_Toursim\resources\views/posts/viewevents.blade.php ENDPATH**/ ?>