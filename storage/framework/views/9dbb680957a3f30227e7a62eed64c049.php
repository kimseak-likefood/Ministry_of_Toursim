<div class="tab-pane fade" id="pills-Round" role="tabpanel"
    aria-labelledby="pills-Round-tab" tabindex="0">
    <div class="row">
        <div class="col-12">
            <div class="search-pan row mx-0 theme-border-radius">
                <div class="col-12 col-lg-4 col-xl-2 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-2">
                    <div class="form-group">
                        <label for="roundDepart" class="form-label">Depart From</label>
                        <input class="form-control" list="datalistOptions3" id="roundDepart" placeholder="New Delhi">
                        <datalist id="datalistOptions3">
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
                        <label for="roundArrival" class="form-label">Arrival To</label>
                        <input class="form-control" list="datalistOptions4" id="roundArrival" placeholder="London">
                        <datalist id="datalistOptions4">
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
                        <label class="form-label">Departure Date - Arrival Date</label>
                        <input type="text" class="form-control" placeholder="Wed 2 Mar  -  Fri 11 Apr">
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 ps-0 mb-2 mb-lg-0 mb-xl-0 pe-0 pe-lg-2">
                    <?php echo $__env->make('partials.search.traveller-dropdown', ['id' => 'myDD2', 'buttonId' => 'travellerInfoOneway51'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
                <div class="col-12 col-lg-6 col-xl-2 px-0">
                    <button type="submit" class="btn btn-search" onclick="window.location.href='#';">
                        <span class="fw-bold"><i class="bi bi-search me-2"></i>Search</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\USER\Herd\cs262_midterm_project\resources\views/partials/search/flight-round.blade.php ENDPATH**/ ?>