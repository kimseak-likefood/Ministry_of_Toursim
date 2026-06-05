<?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->startSection('title', 'Blog'); ?>

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

<!-- blog section -->
<section style="padding: 60px 40px; background: #f9f9f9;">
    <h2 style="text-align: center; margin-bottom: 40px; font-size: 32px;">Latest Posts</h2>

    <?php if(auth()->guard()->check()): ?>
        <div style="text-align: center; margin-bottom: 40px;">
            <a href="<?php echo e(route('posts.create')); ?>" style="background: #222; color: white; padding: 12px 30px; border-radius: 50px; text-decoration: none; font-size: 15px;">+ New Post</a>
        </div>
        <?php else: ?>
            <div style="text-align: center; margin-bottom: 30px; padding: 16px;">
                <p style="margin: 0; font-size: 15px; color: #666;">Want to share your experience? <a href="<?php echo e(route('register')); ?>" style="color: #222; font-weight: 600;">Register</a> or <a href="<?php echo e(route('login')); ?>" style="color: #222; font-weight: 600;">Log in</a> to post.</p>
            </div>
    <?php endif; ?>

   <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div style="display: flex; align-items: center; gap: 30px; margin-bottom: 40px;">
        
    <?php if($post->image): ?>
             <div style="overflow: hidden; border-radius: 15px; flex-shrink: 0;">
                <img src="<?php echo e(Storage::url($post->image)); ?>" alt="<?php echo e($post->title); ?>"
                style="width: 300px; height: 200px; object-fit: cover; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.15); transition: transform 0.4s ease;"
                onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            </div>
    <?php else: ?>
            <div style="width: 300px; height: 200px; border-radius: 15px; flex-shrink: 0; background: #f0ede8; display: flex; align-items: center; justify-content: center; box-shadow: 0 6px 20px rgba(0,0,0,0.08);">
            <span style="font-size: 48px;">No image</span>
            </div>
    <?php endif; ?>

        <div>
            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 12px;">
                <div style="width: 36px; height: 36px; border-radius: 50%; background: #c8a46e; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 14px;">
                    <?php echo e(strtoupper(substr($post->user->name, 0, 1))); ?>

                </div>
                <div>
                    <div style="font-weight: 600; font-size: 14px;"><?php echo e($post->user->name); ?></div>
                    <div style="font-size: 12px; color: #888;"><?php echo e($post->created_at->format('F j, Y')); ?></div>
                </div>
            </div>

            <h3 style="font-size: 34px; margin-bottom: 15px;"><?php echo e($post->title); ?></h3>
            <p style="color: #666; font-size: 20px; line-height: 1.8;"><?php echo e(Str::limit($post->content, 200)); ?></p>

            <div style="margin-top: 16px; display: flex; gap: 12px; align-items: center;">
                <a href="<?php echo e(route('posts.viewposts', $post)); ?>" style="color: #222; font-size: 14px; font-weight: 600; text-decoration: underline;">Read more</a>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $post)): ?>
                    <a href="<?php echo e(route('posts.edit', $post)); ?>" style="color: #222; font-size: 14px; font-weight: 600;">Edit</a>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $post)): ?>
                    <form method="POST" action="<?php echo e(route('posts.destroy', $post)); ?>" style="display:contents;">
                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                       <button type="submit" style="background: none; border: none; color: #222; font-size: 14px; font-weight: 600; cursor: pointer;">Delete</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div style="text-align: center; padding: 60px 20px; color: #888;">
        <p style="font-size: 20px;">No posts yet.</p>
        <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(route('posts.create')); ?>" style="color: #222; font-weight: 600;">Be the first to write one!</a>
        <?php endif; ?>
    </div>
<?php endif; ?>

    <div style="margin-top: 30px;"><?php echo e($posts->links()); ?></div>
</section>
 
 
<section style="padding: 60px 40px; background: white;">
    <h2 style="text-align: center; margin-bottom: 40px; font-size: 32px;">Posting Guidelines</h2>
 
    <div style="display: flex; flex-wrap: wrap; gap: 25px; justify-content: center;">
 
        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">Content</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">Write about real experiences in Cambodia while keeping posts respectful of Khmer culture and traditions.</p>
        </div>
 
        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">Images</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">No innappropriate images are allowed on this platform.</p>
        </div>
 
        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">Language</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">No hate speech, discrimination, or harrassment. Be respectful and constructive.</p>
        </div>
 
        <div style="background: #f9f9f9; border-radius: 15px; padding: 30px; width: 260px; text-align: center; box-shadow: 0 4px 14px rgba(0,0,0,0.08);">
            <div style="font-size: 40px; margin-bottom: 12px;"></div>
            <h4 style="font-size: 18px; margin-bottom: 10px;">General</h4>
            <p style="color: #666; font-size: 15px; line-height: 1.7;">No promotional contents and lastly, have fun!</p>
        </div>
 
    </div>
</section>
 
 
<section style="
    background-image: url('/assets/images/phnom penh/Cambodia-Royal-Palace-Phnom-Penh.jpg');
    background-size: cover;
    background-position: center;
    padding: 80px 40px;
    position: relative;
    text-align: center;
">
    <div style="
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(0,0,0,0.55);
    "></div>
    <div style="position: relative; color: white;">
        <h2 style="font-size: 40px; font-weight: bold; margin-bottom: 16px;">Post and Interact with other users about Cambodia</h2>
        <p style="font-size: 18px; opacity: 0.9; margin-bottom: 30px;">Something troubling you? Give us some feedbacks.</p>
        <a href="/plan-your-trip" style="
            display: inline-block;
            background: white;
            color: #222;
            padding: 14px 36px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            transition: background 0.3s ease;
        " onmouseover="this.style.background='#f0f0f0'" onmouseout="this.style.background='white'">
            Feedbacks
        </a>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\MSILMC\Ministry_of_Toursim\resources\views/posts/blogposts.blade.php ENDPATH**/ ?>