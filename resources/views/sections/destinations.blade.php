<section class="destinations" id="holidays">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <h4 class="fs-2 fw-bold theme-text-secondary mb-0">Most loved Destinations</h4>
                <p class="mb-0 theme-text-accent-one">International & Domestic fames ac ante ipsum</p>
            </div>
            <div class="col-12">
                @include('partials.destinations-tabs')
                <div class="tab-content mt-5" id="pills-tab2Content">
                    @foreach (['regions' => 'Regions', 'cities' => 'Cities', 'contact' => 'Places of interest'] as $tab => $label)
                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="pills-{{ $tab }}" role="tabpanel"
                        aria-labelledby="pills-{{ $tab }}-tab" tabindex="0">
                        <div class="row">
                            @php
                            $destinations = [
                                ['name' => 'Hawai', 'img' => 'destination01.jpg'],
                                ['name' => 'Turkey', 'img' => 'destination02.jpg'],
                                ['name' => 'Iceland', 'img' => 'destination03.jpg'],
                                ['name' => 'Maldives', 'img' => 'destination04.jpg'],
                                ['name' => 'Australia', 'img' => 'destination05.jpg'],
                                ['name' => 'Rome', 'img' => 'destination06.jpg'],
                                ['name' => 'England', 'img' => 'destination07.jpg'],
                                ['name' => 'London', 'img' => 'destination08.jpg'],
                                ['name' => 'Zealand', 'img' => 'destination09.jpg'],
                                ['name' => 'Peru', 'img' => 'destination10.jpg'],
                                ['name' => 'France', 'img' => 'destination11.jpg'],
                                ['name' => 'Paris', 'img' => 'destination12.jpg'],
                            ];
                            @endphp
                            @foreach ($destinations as $dest)
                            <div class="col-12 col-lg-3">
                                <div class="theme-bg-white mb-5">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-4 col-xxl-2 overflow-hidden rounded-circle">
                                            <div class="overflow-hidden">
                                                <figure class="mb-0 img-effect">
                                                    <img src="{{ asset('assets/images/destinations/' . $dest['img']) }}" class="img-fluid" alt="{{ $dest['name'] }}" title="{{ $dest['name'] }}">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-8 col-xxl-10">
                                            <div class="mt-2 mt-xxl-0 ps-3 d-flex justify-content-between align-items-center">
                                                <div class="d-flex flex-column">
                                                    <span class="d-flex fs-6">{{ $dest['name'] }}</span>
                                                    <span class="d-flex small fw-normal theme-text-accent-one">12,683 Hotels</span>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="#" class="link-btn"><span><i class="bi bi-arrow-up-right"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
