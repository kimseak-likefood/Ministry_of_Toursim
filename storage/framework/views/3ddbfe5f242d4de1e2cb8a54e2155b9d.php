<?php if(session('error')): ?>
    <p><?php echo e(session('error')); ?></p>
<?php endif; ?>
<form method="POST" action="/login">
    <?php echo csrf_field(); ?>

    <input type="email" name="email" placeholder="Email" required>

    <input type="password" name="password" placeholder="Password" required>

    <button type="submit">Login</button>
</form>
<?php /**PATH C:\Users\MSILMC\Ministry_of_Toursim\resources\views/login.blade.php ENDPATH**/ ?>