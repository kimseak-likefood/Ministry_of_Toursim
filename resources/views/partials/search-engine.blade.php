<div class="search-engine">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 mb-5 text-center position-relative">
                <h1 class="display-3 fw-bold mb-4 theme-text-white theme-text-shadow">
                    A Journey to Adventurous
                </h1>
                <p class="mb-0 theme-text-white">Discover amazing places at exclusive deals</p>
            </div>
        </div>
        <div class="row mt-0 mt-lg-5">
            <div class="col-12 col-lg-10 offset-lg-1 mb-5 text-center position-relative">
                @include('partials.search.tabs')
                <div class="tab-content mt-3" id="myTabContent">
                    @include('partials.search.flight')
                    @include('partials.search.hotel')
                    @include('partials.search.holiday')
                </div>
            </div>
        </div>
    </div>
</div>
