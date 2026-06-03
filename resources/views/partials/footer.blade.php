<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3 mb-5 mb-lg-0">
                <h5 class="mb-5 fs-6">Contact Us</h5>
                <div class="flex-grow-1">
                    Customer Care<br>
                    <a href="tel:+11234567890" class="fs-5 theme-text-primary">+(1) 123 456 7890</a>
                </div>
                <div class="flex-grow-1 mt-3">
                    Need live support?<br>
                    <a href="mailto:hi@example.com" class="fs-5 theme-text-primary">hi@example.com</a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-2 mb-5 mb-lg-0">
                <div class="d-flex"><h5 class="mb-5 fs-6">Company</h5></div>
                <div class="d-flex">
                    <ul class="fl-menu">
                        @foreach (['About Us', 'Careers', 'Blog', 'Press', 'Offers', 'Deals'] as $item)
                        <li class="nav-item"><a href="javascript:void(0)">{{ $item }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-2 mb-5 mb-lg-0">
                <h5 class="mb-5 fs-6">Support</h5>
                <div class="mt-5">
                    <ul class="fl-menu">
                        @foreach (['Contact', 'Legal Notice', 'Privacy Policy', 'Terms and Conditions', 'Sitemap'] as $item)
                        <li class="nav-item"><a href="javascript:void(0)">{{ $item }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mb-5 mb-lg-0">
                <div class="d-flex justify-content-lg-center"><h5 class="mb-5 fs-6">Other Services</h5></div>
                <div class="d-flex justify-content-lg-center">
                    <ul class="fl-menu">
                        @foreach (['Bus', 'Activity Finder', 'Tour List', 'Flight Search', 'Cruise Ticket', 'Holidays', 'Travel Agents'] as $item)
                        <li class="nav-item"><a href="javascript:void(0)">{{ $item }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-2 mb-5 mb-lg-0">
                <h5 class="mb-5 fs-6">Download App</h5>
                <a href="javascript:void(0)" class="d-inline-flex align-items-center border px-3 py-2 theme-border-radius min-w-150">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/images/icons/play-icon.png') }}" class="img-fluid" alt="Google-Play" title="Google-Play">
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <p class="mb-0 small theme-text-accent-two">Get it on</p>
                        <p class="mb-0 small theme-text-accent-one fw-bold">Google Play</p>
                    </div>
                </a>
                <a href="javascript:void(0)" class="d-inline-flex align-items-center border px-3 py-2 theme-border-radius mt-2 min-w-150">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/images/icons/apple.png') }}" class="img-fluid" alt="apple" title="apple">
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <p class="mb-0 small theme-text-accent-two">Get it on</p>
                        <p class="mb-0 small theme-text-accent-one fw-bold">App Store</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-3 mt-lg-5">
                <p class="pt-2 mb-0 small theme-text-accent-one">&copy; {{ date('Y') }} RoundTours All rights reserved.</p>
            </div>
            <div class="col-12 col-lg-6 mt-5">
                <ul class="footer-link d-flex flex-row flex-wrap justify-content-lg-center align-items-center">
                    @foreach (['Privacy', 'Terms', 'Site Map'] as $item)
                    <li><a href="javascript:void(0)">{{ $item }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-12 col-lg-3 mt-5">
                <div class="d-flex social justify-content-lg-end">
                    @foreach (['facebook', 'twitter-x', 'linkedin', 'instagram', 'whatsapp'] as $social)
                    <a href="javascript:void(0)" class="fs-4 {{ $loop->last ? '' : 'pe-3' }}"><i class="bi bi-{{ $social }}"></i></a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <a href="javascript:void(0)" class="scrollToTop"><i class="bi bi-chevron-double-up"></i></a>
</footer>

@push('scripts')
<script>
    $(document).ready(function () {
        var ScrollTop = $(".scrollToTop");
        $(window).on('scroll', function () {
            if ($(this).scrollTop() < 500) {
                ScrollTop.removeClass("active");
            } else {
                ScrollTop.addClass("active");
            }
        });
        $('.scrollToTop').on('click', function () {
            $('html, body').animate({ scrollTop: 0 }, 500);
            return false;
        });
    });
</script>
@endpush
