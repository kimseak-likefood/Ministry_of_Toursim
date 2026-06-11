
<?php $__env->startSection('title', 'Edit Event'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<section style="padding: 60px 40px; max-width: 800px; margin: 0 auto;">
    <h2 style="font-size: 32px; margin-bottom: 30px;">Edit Event</h2>

    <form method="POST" action="<?php echo e(route('events.update', $event)); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Event Name</label>
            <input type="text" name="name" value="<?php echo e(old('name', $event->name)); ?>" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 16px;">
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Date</label>
            <input type="date" name="date" value="<?php echo e(old('date', isset($event) ? $event->date : '')); ?>" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 16px;">
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Description</label>
            <textarea name="description" rows="4" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 16px;"><?php echo e(old('description', $event->description)); ?></textarea>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Image</label>
            <?php if($event->image): ?>
                <img id="imagePreview" src="<?php echo e(asset('storage/' . $event->image)); ?>?v=<?php echo e(time()); ?>" style="width: 200px; border-radius: 8px; margin-bottom: 10px; display: block;">
            <?php else: ?>
                <img id="imagePreview" src="" style="width: 200px; border-radius: 8px; margin-bottom: 10px; display: none;">
            <?php endif; ?>
            <input type="file" name="image" accept="image/*" id="imageInput">
        </div>

        <button type="submit" style="background: #222; color: white; padding: 12px 30px; border: none; border-radius: 50px; font-size: 15px; cursor: pointer;">Update Event</button>
        <a href="/holidays&events" style="margin-left: 16px; color: #888; font-size: 14px;">← Back to Events</a>
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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\MSILMC\Ministry_of_Toursim\resources\views/posts/edit_events.blade.php ENDPATH**/ ?>