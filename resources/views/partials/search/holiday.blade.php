<div class="tab-pane fade" id="holiday-tab-pane" role="tabpanel"
    aria-labelledby="holiday-tab" tabindex="0">
    <div class="row">
        <div class="col-12">
            <div class="search-pan row mx-0 theme-border-radius">
                <div class="col-12 col-lg-4 col-xl-2 ps-0 mb-2 mb-xl-0 pe-0 pe-lg-2">
                    <div class="form-group">
                        <label for="holidayCountry" class="form-label">Country <i class="bi bi-caret-down-fill small"></i></label>
                        <input class="form-control" list="datalistOptions6" id="holidayCountry" placeholder="India">
                        <datalist id="datalistOptions6">
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
                        <label for="holidayLocation" class="form-label">Location <i class="bi bi-caret-down-fill small"></i></label>
                        <input class="form-control" list="datalistOptions8" id="holidayLocation" placeholder="New Delhi">
                        <datalist id="datalistOptions8">
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
                        <label class="form-label">Check in Date - Check out Date</label>
                        <input type="text" class="form-control" placeholder="Wed 2 Mar  -  Fri 11 Apr">
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 ps-0 mb-2 mb-lg-0 mb-xl-0 pe-0 pe-lg-2">
                    @include('partials.search.guest-dropdown', ['id' => 'myDD5', 'buttonId' => 'travellerInfoOneway31', 'label' => 'Guest'])
                </div>
                <div class="col-12 col-lg-6 col-xl-2 px-0">
                    <button type="submit" class="btn btn-search" onclick="window.location.href='flight-listing-oneway.html';">
                        <span class="fw-bold"><i class="bi bi-search me-2"></i>Search</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
