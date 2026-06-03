<h1>Welcome <?php echo e(Auth::user()->name); ?></h1>

<form method="POST" action="/logout">
    <?php echo csrf_field(); ?>
    <button type="submit">Logout</button>
</form><?php /**PATH C:\Users\MSILMC\Ministry_of_Toursim\resources\views/dashboard.blade.php ENDPATH**/ ?>