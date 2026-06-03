<?php if($errors->any()): ?>
    <div style="color: red;">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<form method="POST" action="/register">
    <?php echo csrf_field(); ?>

    <input type="text" name="name" placeholder="Name">

    <input type="email" name="email" placeholder="Email">

    <input type="password" name="password" placeholder="Password">

    <button type="submit">Register</button>
</form><?php /**PATH C:\Users\MSILMC\Ministry_of_Toursim\resources\views/register.blade.php ENDPATH**/ ?>