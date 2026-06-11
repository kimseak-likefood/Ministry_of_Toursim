
<?php $__env->startSection('title', 'Create Event'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<section style="padding: 60px 40px; max-width: 800px; margin: 0 auto;">
    <h2 style="font-size: 32px; margin-bottom: 30px;">Add New Event</h2>

    <form method="POST" action="<?php echo e(route('events.store')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Event Name</label>
            <input type="text" name="name" required value="<?php echo e(old('name')); ?>" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 16px;">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p style="color: red; margin-top: 6px;"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Date</label>
            <input type="date" name="date" required value="<?php echo e(old('date', isset($event) ? $event->date : '')); ?>" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 16px;">
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
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Description</label>
            <textarea name="description" rows="4" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 16px;"><?php echo e(old('description')); ?></textarea>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Image (optional)</label>
            <img id="imagePreview" src="" style="width: 200px; border-radius: 8px; margin-bottom: 10px; display: none;">
            <input type="file" name="image" accept="image/*" id="imageInput">
        </div>

        <button type="submit" style="background: #222; color: white; padding: 12px 30px; border: none; border-radius: 50px; font-size: 15px; cursor: pointer;">Add Event</button>
        <a href="/holidays&events" style="margin-left: 16px; color: #888; font-size: 14px;">Cancel</a>
    </form>
</section>

<script>
    document.getElementById('imageInput').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = e => {
                const preview = document.getElementById('imagePreview');
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(file);
        }
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\MSILMC\Ministry_of_Toursim\resources\views/posts/create_events.blade.php ENDPATH**/ ?>