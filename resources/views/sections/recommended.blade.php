<section class="recommended" id="deals">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h4 class="fs-2 fw-bold theme-text-secondary mb-0">Recommended</h4>
                <p class="mb-0 theme-text-accent-one">International & Domestic fames ac ante ipsum</p>
            </div>
            <div class="col-12 col-lg-6 align-self-center justify-content-end d-flex">
                <div class="d-flex">
                    <div class="dropdown-center">
                        <button class="btn btn-secondary dropdown-toggle recomended-btn" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Hotels
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Hotels</a></li>
                            <li><a class="dropdown-item" href="#">Flight</a></li>
                            <li><a class="dropdown-item" href="#">Holidays</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            @php
            $deals = [
                ['img' => 'offers01.png', 'tag' => 'bg-warning', 'title' => 'The Montcalm At Brewery London City', 'loc' => 'Westminster Borough, London', 'rating' => '4.8', 'rating_bg' => 'bg-warning', 'reviews' => '3,014', 'price' => '72'],
                ['img' => 'offers02.png', 'tag' => 'bg-info', 'title' => 'Flying Over Bali', 'loc' => 'Beautiful Lands, Indonesia', 'rating' => '4.7', 'rating_bg' => 'bg-danger', 'reviews' => '4,114', 'price' => '89'],
                ['img' => 'offers03.png', 'tag' => 'bg-success', 'title' => 'American Landscapes', 'loc' => 'Pestminster Worough, USA', 'rating' => '4.9', 'rating_bg' => 'bg-success', 'reviews' => '3,894', 'price' => '88'],
                ['img' => 'offers04.png', 'tag' => '', 'title' => 'The Beauty of Scotland', 'loc' => 'Mestminster Gorough, UK', 'rating' => '4.5', 'rating_bg' => 'bg-info', 'reviews' => '2,914', 'price' => '69'],
            ];
            @endphp
            @foreach ($deals as $deal)
            <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="card-wrap">
                    <div class="con-img-wrap m-auto">
                        <img src="{{ asset('assets/images/recommended/' . $deal['img']) }}" class="img-fluid mx-auto d-block" alt="product picture">
                        <div class="offer-tag {{ $deal['tag'] }}">Best Deal</div>
                        <span class="wishlist-tag"><i class="bi bi-heart"></i></span>
                    </div>
                    <div class="con-wrap mt-4">
                        <h2 class="fs-6 mt-4 fw-bold text-truncate">{{ $deal['title'] }}</h2>
                        <p class="mb-2 theme-text-accent-two small">{{ $deal['loc'] }}</p>
                        <div class="d-flex bottom mb-2">
                            <div class="rating-cover">
                                <span class="p-1 small rounded-1 {{ $deal['rating_bg'] }} theme-text-white">{{ $deal['rating'] }}</span>
                                <span class="me-2 small theme-text-accent-one">Exceptional</span>
                                <span class="small">{{ $deal['reviews'] }} reviews</span>
                            </div>
                        </div>
                        <p class="mb-0 theme-text-accent-one">Starting from US${{ $deal['price'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
