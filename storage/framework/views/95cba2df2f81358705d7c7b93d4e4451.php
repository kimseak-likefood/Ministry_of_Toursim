<?php $__env->startSection('content'); ?>

<div class="container pt-3">
        <div class="d-flex align-items-center gap-4" style="padding-top: 10px">
            <img src="<?php echo e(asset('assets/images/MOT1-logo.png')); ?>" alt="Logo" height="40">
              <div>
                  <p class="mb-0">ក្រសួងទេសចរណ៍</p>
                  <p class="mb-0">Ministry of Tourism</p>
              </div>
          </div>
    </div>

<main class="container">
  <div class="row justify-content-center py-4 mb-5">
    <div class="col-md-6 col-lg-5">
      <div class="border rounded-3 p-4 shadow-sm bg-body">
        <h2 class="mb-1">Welcome back!</h2>
        <p class="text-body-secondary mb-4">Sign in to your account</p>

        <form action="/login" method="post">
          <?php echo csrf_field(); ?>

          <?php if(session('error')): ?>
            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
          <?php endif; ?>

          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="john@example.com">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="text-danger small mt-1"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <div class="mb-1">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Your password">
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="text-danger small mt-1"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <div class="text-end mb-3">
            <a href="#" class="small">Forgot password?</a>
          </div>

          <div class="mb-4 form-check">
            <input type="checkbox" class="form-check-input" id="remember">
            <label class="form-check-label text-body-secondary small" for="remember">Remember me</label>
          </div>

          <button type="submit" class="btn btn-dark w-100">Sign in</button>

          <p class="text-center text-body-secondary small mt-3 mb-0">
            Don't have an account? <a href="/register">Sign up</a>
          </p>
        </form>
         
        <div class="text-center mt-3">
          <a href="/" class="btn btn-sm btn-primary">Back Home</a>
        </div>

      </div>
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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\Herd\cs262_midterm_project\resources\views/login.blade.php ENDPATH**/ ?>