<li class="nav-item dropdown my-auto">
    <a href="#" class="nav-link dropdown-toggle p-0 user" id="navbarDropdown3"
    data-bs-toggle="dropdown" aria-expanded="false">
    <?php if(auth()->guard()->check()): ?>
        <?php if(Auth::user()->avatar): ?>
            <img src="<?php echo e(asset('storage/' . Auth::user()->avatar)); ?>" 
                style="width: 32px; height: 32px; object-fit: cover; border-radius: 50%;">
        <?php else: ?>
            <span class="d-inline-block p-2 theme-bg-primary rounded-circle lh-1">
                <i class="bi bi-person"></i>
            </span>
        <?php endif; ?>
        <span class="small ms-1"><?php echo e(Auth::user()->name); ?></span>
        <?php if(Auth::user()->is_admin): ?>
    
        <?php endif; ?>
    <?php else: ?>
        <span class="d-inline-block p-2 theme-bg-primary rounded-circle lh-1">
            <i class="bi bi-person"></i>
        </span>
        <span class="small ms-1">User</span>
    <?php endif; ?>
</a>
   <?php if(auth()->guard()->check()): ?>
    <ul class="dropdown-menu dropdown-menu-end sub-menu" aria-labelledby="navbarDropdown3" style="min-width: auto;">
        <li>
            <form action="/logout" method="post">
                <?php echo csrf_field(); ?>
                <a href="<?php echo e(route('profile')); ?>" class="dropdown-item">Profile</a>
                <button type="submit" class="dropdown-item">Log out</button>
            </form>
        </li>
    </ul>
<?php else: ?>
    <ul class="dropdown-menu dropdown-menu-end sub-menu" aria-labelledby="navbarDropdown3">
        <li><a class="dropdown-item" href="<?php echo e(route('register')); ?>">Register</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('login')); ?>">Log in</a></li>
    </ul>
<?php endif; ?><?php /**PATH C:\Users\Asus\Herd\MinistryOfTourism\resources\views/partials/nav/user.blade.php ENDPATH**/ ?>