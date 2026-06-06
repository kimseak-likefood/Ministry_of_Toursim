
<?php $__env->startSection('title', $user->name); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<section style="padding: 60px 40px; max-width: 700px; margin: 0 auto;">
    <div style="background: white; border-radius: 20px; padding: 40px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
        
        
        <div style="display: flex; align-items: center; gap: 24px; margin-bottom: 30px;">
            <img src="<?php echo e($user->avatar ? asset('storage/' . $user->avatar) : asset('assets/images/default-pfp.png')); ?>" 
                style="width: 90px; height: 90px; border-radius: 50%; object-fit: cover;">
            <div>
                <h2 style="font-size: 26px; margin: 0;"><?php echo e($user->name); ?></h2>
                <?php if($user->location): ?>
                    <p style="color: #888; margin: 4px 0 0; font-size: 14px;">📍 <?php echo e($user->location); ?></p>
                <?php endif; ?>
            </div>
        </div>

        
        <?php if($user->bio): ?>
            <div style="background: #f9f9f9; border-radius: 10px; padding: 16px; margin-bottom: 24px;">
                <p style="margin: 0; color: #444; font-size: 15px; line-height: 1.7;"><?php echo e($user->bio); ?></p>
            </div>
        <?php endif; ?>

        
        <div style="display: flex; flex-direction: column; gap: 12px;">
            <?php if($user->phone): ?>
                <div style="display: flex; gap: 10px; font-size: 15px;">
                    <span style="color: #888;">📞</span>
                    <span><?php echo e($user->phone); ?></span>
                </div>
            <?php endif; ?>
        </div>

        
        <div style="margin-top: 36px;">
            <h3 style="font-size: 20px; margin-bottom: 20px;">Posts by <?php echo e($user->name); ?></h3>
            <?php $__empty_1 = true; $__currentLoopData = $user->posts()->latest()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div style="border-bottom: 1px solid #eee; padding-bottom: 16px; margin-bottom: 16px;">
                    <a href="<?php echo e(route('posts.viewposts', $post)); ?>" style="font-size: 17px; font-weight: 600; color: #222; text-decoration: none;"><?php echo e($post->title); ?></a>
                    <p style="color: #888; font-size: 13px; margin: 4px 0 0;"><?php echo e($post->created_at->format('F j, Y')); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p style="color: #888;">No posts yet.</p>
            <?php endif; ?>
        </div>

        <div style="margin-top: 30px;">
            <a href="<?php echo e(route('blogposts')); ?>" style="color: #888; font-size: 14px;">← Back to posts</a>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\MSILMC\Ministry_of_Toursim\resources\views/profileprev.blade.php ENDPATH**/ ?>