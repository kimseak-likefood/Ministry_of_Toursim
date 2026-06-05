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
    <div class="row justify-content-center py-4 mb-5" >
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
            <p class="text-body-secondary mb-4">Visit Cambodia Today</p>

            <div class="row g-3 mb-3">
              <div class="col">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" placeholder="John Doe" name="name">
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" placeholder="john@example.com" name="email">
            </div>

            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" placeholder="Min. 6 characters" name = "password">
            </div>
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
            <div class="mb-3">
              <label class="form-label">Confirm password</label>
              <input type="password" class="form-control" placeholder="Confirm password" name = "password_confirmation">
            </div>

            

            <button class="btn btn-dark w-100 mt-3" type="submit">Create account</button>

            <p class="text-center text-body-secondary small mt-3 mb-0">
              Already have an account? <a href="/login">Log in</a>
            </p>
            
            <div class="text-center mt-3">
              <a href="/" class="btn btn-sm btn-primary">Back to Home</a>
            </div>
            
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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\MSILMC\Ministry_of_Toursim\resources\views/register.blade.php ENDPATH**/ ?>