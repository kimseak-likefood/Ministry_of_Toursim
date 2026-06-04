<header class="header theme-bg-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg py-3 py-lg-0 px-0">
            <a class="navbar-brand" href="/">
                <img src="/assets/images/logo.png" alt="Brand Logo" title="Brand Logo" class="logo.png"style="width: 90px; height: auto;">
            </a>
            <button class="navbar-toggler px-1 btn rounded-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto page-menu" id="nav">
                    <li class="nav-item"><a class="nav-link pe-5 ps-0 ps-lg-5" href="#deals">Deals</a></li>
                    <li class="nav-item"><a class="nav-link pe-5" href="#offers">Offers</a></li>
                    <li class="nav-item"><a class="nav-link pe-5" href="#holidays">Holidays</a></li>
                    <li class="nav-item"><a class="nav-link pe-5" href="#review">Review</a></li>
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
<?php /**PATH C:\Users\dogso\OneDrive\Documents\GitHub\Ministry_of_Toursim\resources\views/partials/header.blade.php ENDPATH**/ ?>