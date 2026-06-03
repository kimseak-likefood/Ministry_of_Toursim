<div class="tab-pane fade" id="pills-multiCity" role="tabpanel"
    aria-labelledby="pills-multiCity-tab" tabindex="0">
    <div class="row">
        <div class="col-12">
            <div class="search-pan row mx-0 theme-border-radius">
                <div class="col-12 col-lg-4 col-xl-2 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-2">
                    <div class="form-group">
                        <label for="multiDepart" class="form-label">Depart From</label>
                        <input class="form-control" list="datalistOptions14" id="multiDepart" placeholder="New Delhi">
                        <datalist id="datalistOptions14">
                            <option value="San Francisco">
                            <option value="New York">
                            <option value="Seattle">
                            <option value="Los Angeles">
                            <option value="Chicago">
                        </datalist>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-2 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-2">
                    <div class="form-group">
                        <label for="multiArrival" class="form-label">Arrival To</label>
                        <input class="form-control" list="datalistOptions5" id="multiArrival" placeholder="London">
                        <datalist id="datalistOptions5">
                            <option value="San Francisco">
                            <option value="New York">
                            <option value="Seattle">
                            <option value="Los Angeles">
                            <option value="Chicago">
                        </datalist>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-2 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-0 pe-xl-2">
                    <div class="form-group">
                        <label class="form-label">Departure Date</label>
                        <input type="text" class="form-control" placeholder="Wed 2 Mar">
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 ps-0 mb-2 mb-lg-0 mb-xl-0 pe-0 pe-lg-2">
                    <?php echo $__env->make('partials.search.traveller-dropdown', ['id' => 'myDD3', 'buttonId' => 'travellerInfoOneway21'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 px-0">
                    <div class="d-flex">
                        <button type="button" class="btn sector-add me-1">+ Add Sector</button>
                        <button type="submit" class="btn btn-search" onclick="window.location.href='#';">
                            <span class="fw-bold"><i class="bi bi-search me-2"></i>Search</span>
                        </button>
                    </div>
                </div>
            </div>
            <?php echo $__env->make('partials.search.flight-sector', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\User\Herd\Ministry_of_Toursim-main\resources\views/partials/search/flight-multicity.blade.php ENDPATH**/ ?>