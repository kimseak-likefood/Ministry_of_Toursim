<?php $__env->startSection('title', $post->title); ?>
<?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->startSection('content'); ?>
<section style="
    background-image: url('/assets/images/phnom penh/pp.jpg');
    background-size: cover;
    background-position: center top;
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
        <p style="font-size: 16px; letter-spacing: 4px; text-transform: uppercase; margin-bottom: 12px; opacity: 0.85;">Welcome to Cambodia's</p>
        <h1 style="font-size: 64px; font-weight: bold; margin: 0;">Official Blog</h1>
        <p style="font-size: 20px; margin-top: 14px; opacity: 0.9;">Interact with posts about Cambodia from users all around the globe.</p>
    </div>
</section>


<!-- veiw post section -->
<section style="padding: 60px 40px; max-width: 800px; margin: 0 auto;">

    <?php if($post->image): ?>
        <img src="<?php echo e(Storage::url($post->image)); ?>" style="width: 100%; height: 400px; object-fit: cover; border-radius: 15px; margin-bottom: 30px;">
    <?php endif; ?>

    <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 20px;">
        <div style="width: 36px; height: 36px; border-radius: 50%; background: #c8a46e; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; overflow: hidden;">
    <?php if($post->user && $post->user->avatar): ?>
        <img src="<?php echo e(asset('storage/' . $post->user->avatar)); ?>" style="width: 100%; height: 100%; object-fit: cover;">
    <?php else: ?>
        <?php echo e(strtoupper(substr($post->user->name ?? 'D', 0, 1))); ?>

    <?php endif; ?>
</div>
        <div>
            <?php echo e($post->user->name ?? 'Deleted User'); ?>

            <div style="font-size: 12px; color: #888;"><?php echo e($post->created_at->format('F j, Y')); ?></div>
        </div>
    </div>

    <h1 style="font-size: 40px; margin-bottom: 20px;"><?php echo e($post->title); ?></h1>
    <p style="font-size: 18px; line-height: 1.9; color: #444;"><?php echo e($post->content); ?></p>

    <div style="margin-top: 30px; display: flex; gap: 12px;">
        <a href="<?php echo e(route('blogposts')); ?>" style="color: #888; font-size: 14px;">← Back to posts</a>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $post)): ?>
            <a href="<?php echo e(route('posts.edit', $post)); ?>" style="color: #222; font-size: 14px; font-weight: 600;">Edit</a>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $post)): ?>
            <form method="POST" action="<?php echo e(route('posts.destroy', $post)); ?>">
                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                <button type="submit" style="background: none; border: none; color: #222; font-size: 14px; font-weight: 600; cursor: pointer;">Delete</button>
            </form>
        <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\MSILMC\Ministry_of_Toursim\resources\views/posts/viewposts.blade.php ENDPATH**/ ?>