<header class="header theme-bg-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg py-3 py-lg-0 px-0">
            <a class="navbar-brand d-flex align-items-center gap-2" href="/">
                <img src="/assets/images/logo.png" alt="Brand Logo" title="Brand Logo" class="logo.png"style="width: 50px; height: auto;">
                <div>
                  <p class="mb-0" style="font-size: 15px;">ក្រសួងទេសចរណ៍</p>
                  <p class="mb-0" style="font-size: 15px;">Ministry of Tourism</p>
                </div>
            </a>
            <button class="navbar-toggler px-1 btn rounded-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto page-menu" id="nav">
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle pe-5" href="#" id="DiscoverDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Discover</a>
                             <ul class="dropdown-menu" aria-labelledby="DiscoverDropdown">
                                 <li><a class="dropdown-item" href="<?php echo e(url('phnompenh')); ?>">Phnom Penh</a></li>
                                 <li><a class="dropdown-item" href="<?php echo e(url('siemreap')); ?>">Siem Reap</a></li>
                                 <li><a class="dropdown-item" href="<?php echo e(url('mondulkiri')); ?>">Mondulkiri</a></li>
                                 <li><a class="dropdown-item" href="<?php echo e(url('battambang')); ?>">Battambang</a></li>
                                 <li><a class="dropdown-item" href="<?php echo e(url('kohkong')); ?>">Kohkong</a></li>
                                 <li><a class="dropdown-item" href="<?php echo e(url('kampot')); ?>">Kampot</a></li>
                            </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link pe-5" href="<?php echo e(url('activities')); ?>">Activities</a></li>
                    <li class="nav-item"><a class="nav-link pe-5" href="<?php echo e(url('holidays&events')); ?>">Events</a></li>
                    <li class="nav-item"><a class="nav-link pe-5" href="<?php echo e(url('tourism')); ?>">Tourism</a></li>
                    <li class="nav-item"><a class="nav-link pe-5" href="<?php echo e(url('statistics')); ?>">Statistics</a></li>
                    <li class="nav-item"><a class="nav-link pe-5" href="<?php echo e(url('laws&regulations')); ?>">Regulations</a></li>
                    <li class="nav-item"><a class="nav-link pe-5" href="<?php echo e(url('blogposts')); ?>">Blog</a></li>
                </ul>
                <ul class="navbar-nav page-menu mb-3 mb-lg-0">
                    <?php echo $__env->make('partials.nav.language', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('partials.nav.currency', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('partials.nav.notifications', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('partials.nav.user', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </ul>
            </div>
        </nav>
        
    </div>
</header>
<?php /**PATH C:\Users\USER\Herd\Ministry_of_Toursim\resources\views/partials/header.blade.php ENDPATH**/ ?>