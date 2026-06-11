<?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->startSection('title', 'Edit Post'); ?>

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



<!-- edit post section -->
<section style="padding: 60px 40px; max-width: 800px; margin: 0 auto;">
    <h2 style="font-size: 32px; margin-bottom: 30px;">Edit Post</h2>

    <form method="POST" action="<?php echo e(route('posts.update', $post)); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Title</label>
            <input type="text" name="title" value="<?php echo e(old('title', $post->title)); ?>" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 16px;">
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p style="color: red; margin-top: 6px;"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Content</label>
            <textarea name="content" rows="8" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 16px;"><?php echo e(old('content', $post->content)); ?></textarea>
            <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p style="color: red; margin-top: 6px;"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div style="margin-bottom: 20px;">
    <label style="display: block; margin-bottom: 8px; font-weight: 600;">Image (optional)</label>
    <?php if($post->image): ?>
        <img id="imagePreview" src="<?php echo e(Storage::url($post->image)); ?>" style="width: 200px; border-radius: 8px; margin-bottom: 10px; display: block;">
    <?php else: ?>
        <img id="imagePreview" src="" style="width: 200px; border-radius: 8px; margin-bottom: 10px; display: none;">
    <?php endif; ?>
    <input type="file" name="image" accept="image/*" id="imageInput">
</div>

        <button type="submit" style="background: #222; color: white; padding: 12px 30px; border: none; border-radius: 50px; font-size: 15px; cursor: pointer;">Update Post</button>
    </form>
</section>
<script>
    document.getElementById('imageInput').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('imagePreview');
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(file);
        }
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\MSILMC\Ministry_of_Toursim\resources\views/posts/edit.blade.php ENDPATH**/ ?>