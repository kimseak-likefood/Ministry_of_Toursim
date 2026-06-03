<div class="tab-pane fade show active" id="pills-oneway" role="tabpanel"
    aria-labelledby="pills-oneway-tab" tabindex="0">
    <div class="row">
        <div class="col-12">
            <div class="search-pan row mx-0 theme-border-radius">
                <div class="col-12 col-lg-4 col-xl-2 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-2">
                    <div class="form-group">
                        <label for="onewayDepart" class="form-label">Depart From</label>
                        <input class="form-control" list="datalistOptions1" id="onewayDepart" placeholder="New Delhi">
                        <datalist id="datalistOptions1">
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
                        <label for="onewayArrival" class="form-label">Arrival To</label>
                        <input class="form-control" list="datalistOptions2" id="onewayArrival" placeholder="London">
                        <datalist id="datalistOptions2">
                            <option value="San Francisco">
                            <option value="New York">
                            <option value="Seattle">
                            <option value="Los Angeles">
                            <option value="Chicago">
                        </datalist>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-3 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-0 pe-xl-2">
                    <div class="form-group">
                        <label class="form-label">Departure Date</label>
                        <input type="text" class="form-control" placeholder="Wed 2 Mar">
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 ps-0 mb-2 mb-lg-0 mb-xl-0 pe-0 pe-lg-2">
                    <?php echo $__env->make('partials.search.traveller-dropdown', ['id' => 'myDD1', 'buttonId' => 'travellerInfoOneway11'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
                <div class="col-12 col-lg-6 col-xl-2 px-0">
                    <button type="submit" class="btn btn-search" onclick="window.location.href='#';">
                        <span class="fw-bold"><i class="bi bi-search me-2"></i>Search</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-12 mt-2">
            <?php echo $__env->make('partials.search.flight-options', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\User\Herd\Ministry_of_Toursim-main\resources\views/partials/search/flight-oneway.blade.php ENDPATH**/ ?>