<section class="blog py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="fs-2 fw-bold text-center theme-text-secondary mb-0">Get inspiration for your next trip</h2>
                <p class="mb-0 theme-text-accent-one">Interdum et malesuada fames</p>
            </div>
        </div>
        <div class="row mt-5">
            @php
            $posts = [
                ['img' => 'post01.png', 'title' => '10 European ski destinations you should visit this winter', 'date' => 'April 06, 2022'],
                ['img' => 'post02.png', 'title' => 'Where can I go? 5 amazing countries that are open right now', 'date' => 'April 16, 2022'],
                ['img' => 'post03.png', 'title' => 'Booking travel during Corona: good advice in an uncertain time', 'date' => 'April 23, 2022'],
            ];
            @endphp
            @foreach ($posts as $post)
            <div class="col-12 col-lg-4 mb-4">
                <div class="blog-card row g-0">
                    <div class="overflow-hidden position-relative col-12 theme-border-radius">
                        <figure class="mb-0 img-effect">
                            <img src="{{ asset('assets/images/news/' . $post['img']) }}" class="img-fluid" alt="news articles">
                        </figure>
                    </div>
                    <div class="col-12 mt-3">
                        <h2 class="fs-5 fw-bold theme-heading my-3">{{ $post['title'] }}</h2>
                        <div class="my-3">
                            <a href="javascript:void(0)" class="small fw-bold theme-text-accent-one">
                                <i class="bi bi-calendar4-week me-2 theme-text-primary"></i>
                                {{ $post['date'] }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
