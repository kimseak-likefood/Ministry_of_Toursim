<<<<<<< HEAD:storage/framework/views/86c0f348d78b6ac70f414c3bd6371ec8.php
<?php if(session('error')): ?>
    <p><?php echo e(session('error')); ?></p>
<?php endif; ?>
<form method="POST" action="/login">
    <?php echo csrf_field(); ?>

    <input type="email" name="email" placeholder="Email" required>
=======
<?php $__env->startSection('content'); ?>
    
    </div>
    <main class="container">
              <div class="row justify-content-center py-5">
      <div class="col-md-6 col-lg-5">
        <div class="border rounded-3 p-4 shadow-sm bg-body">
          <h2 class="mb-1">Welcome back</h2>
          <p class="text-body-secondary mb-4">Sign in to your account</p>
>>>>>>> 0018d61865fcd4fc201e72ca1db5044d5ac371ba:storage/framework/views/d4e9a6d7bcdaee4640d01914ae2bc53e.php

    <input type="password" name="password" placeholder="Password" required>

<<<<<<< HEAD:storage/framework/views/86c0f348d78b6ac70f414c3bd6371ec8.php
    <button type="submit">Login</button>
</form>
<?php /**PATH C:\Users\dogso\OneDrive\Documents\GitHub\Ministry_of_Toursim\resources\views/login.blade.php ENDPATH**/ ?>
=======
          <?php if(session('error')): ?>
            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
          <?php endif; ?>

          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="loginname" placeholder="john@example.com">
          </div>

          <div class="mb-1">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="loginpassword" placeholder="Your password">
          </div>

          <div class="text-end mb-3">
            <a href="#" class="small">Forgot password?</a>
          </div>

          <div class="mb-4 form-check">
            <input type="checkbox" class="form-check-input" id="remember">
            <label class="form-check-label text-body-secondary small" for="remember">Remember me</label>
          </div>

          <button class="btn btn-dark w-100" name="submit">Sign in</button>

            <p class="text-center text-body-secondary small mt-3 mb-0">
              Don't have an account? <a href="/signup">Sign up</a>
            </p>
          </div>
        </form>
      </div>
    </div>
    </main>

    <footer class="py-5 text-center text-body-secondary bg-body-tertiary">
      <p>
        Blog template built for
        <a href="https://getbootstrap.com/">Bootstrap</a> by
        <a href="https://x.com/mdo">@mdo</a>.
      </p>
      <p class="mb-0"><a href="#">Back to top</a></p>
    </footer>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\Herd\Ministry_of_Toursim\resources\views/login.blade.php ENDPATH**/ ?>
>>>>>>> 0018d61865fcd4fc201e72ca1db5044d5ac371ba:storage/framework/views/d4e9a6d7bcdaee4640d01914ae2bc53e.php
