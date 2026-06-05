<section class="py-5 theme-bg-primary">
    <div class="container">
        <div class="row justify-between items-center">
            <div class="col-12 col-lg-6">
                <div class="d-flex align-items-center">
                    <img src="/assets/images/icons/subscribe-icon.png" alt="subscribe" class="img-fluid">
                    <div class="ms-3">
                        <h4 class="text-26 text-white fw-600">Your Travel Journey Starts Here</h4>
                        <p class="text-white">Sign up and we'll send the best deals to you</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 offset-lg-1 align-self-center">
                <form class="input-group subs-form" action="#" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="email" class="form-control border-0" placeholder="Your Email" aria-label="Your Email" required>
                    <button class="btn btn-search" type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\MSILMC\Ministry_of_Toursim\resources\views/sections/newsletter.blade.php ENDPATH**/ ?>