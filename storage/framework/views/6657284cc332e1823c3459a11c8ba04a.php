<?php $__env->startSection('content'); ?>

<?php $__env->startSection('content'); ?>
    <div class="pagewrap">
        <div class="head-wrapper">
            <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>
   
    
    <main class="container">
    <div class="row justify-content-center py-5">
      <div class="col-md-6 col-lg-5">
        <div class="border rounded-3 p-4 shadow-sm bg-body">
          
          <form action="/register" method="post"> 
            <?php echo csrf_field(); ?>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <h2 class="mb-1">Create an account</h2>
            <p class="text-body-secondary mb-4">Join Table Tennis today</p>

            <div class="row g-3 mb-3">
              <div class="col">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" placeholder="John Doe" name="name">
              </div>
              <!-- <div class="col">
                <label class="form-label">Last name</label>
                <input type="text" class="form-control" placeholder="Doe">
              </div> -->
            </div>

            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" placeholder="john@example.com" name="email">
            </div>

            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" placeholder="Min. 8 characters" name = "password">
            </div>

            <div class="mb-3">
              <label class="form-label">Confirm password</label>
              <input type="password" class="form-control" placeholder="Repeat password" name = "password_confirmation">
            </div>

            <div class="mb-4 form-check">
              <input type="checkbox" class="form-check-input" id="terms">
              <label class="form-check-label text-body-secondary small" for="terms">
                I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
              </label>
            </div>

            <button class="btn btn-dark w-100" type="submit">Create account</button>

            <p class="text-center text-body-secondary small mt-3 mb-0">
              Already have an account? <a href="/login">Sign in</a>
            </p>
          </form>
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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\dogso\OneDrive\Documents\GitHub\Ministry_of_Toursim\resources\views/register.blade.php ENDPATH**/ ?>