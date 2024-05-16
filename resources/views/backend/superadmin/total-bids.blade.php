@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="filter-container">
                    <div class="search-block">
                        <label>Sort by:</label>
                        <select class="form-control custom-select">
                            <option>Active</option>
                            <option>Draft</option>
                            <option>Complete</option>
                            <option>Reject</option>
                        </select>
                    </div>
                    <span class="total-bid-lable">Total Bid (10)</span>
                    <a class="download-csv-btn" href="javascript:void()">Download CSV</a>
                </div>

                <h4>Active Bids</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card bid-container-listing">
                            <div class="card-body">
                                <h4 class="card-title mb-0">
                                    Tongue and wood ceiling
                                    <div id="round-disabled" class="raiting-container" style="cursor: pointer;">
                                        <img alt="1" src="../assets/images/rating/star-on.png" title="bad">&nbsp;
                                        <img alt="2" src="../assets/images/rating/star-on.png" title="poor">&nbsp;
                                        <img alt="3" src="../assets/images/rating/star-on.png" title="regular">&nbsp;
                                        <img alt="4" src="../assets/images/rating/star-off.png" title="good">&nbsp;
                                        <img alt="5" src="../assets/images/rating/star-off.png" title="gorgeous">
                                    </div>
                                </h4>

                                <div class="bid-option">
                                    <span class="dots">...</span>
                                    <ul>
                                        <li><a href="javascript:void()">Edit</a></li>
                                        <li><a href="javascript:void()">Delete</a></li>
                                    </ul>
                                </div>
                                <div class="d-flex justify-content-between pt-3">
                                    <span class="text-muted">Project-add: <span
                                            class="font-weight-bold">April 24, 2020</span></span>
                                    <span class="text-muted float-right">Total Bid: <span
                                            class="font-weight-bold">3</span> </span>
                                    <span class="text-muted float-right">Bid Ending Time: <span
                                            class="font-weight-bold text-danger">3h:30m</span> </span>
                                </div>
                                <p class="project-hours pt-3"><span>Fixed</span> - More than 6 months, 300$</p>

                                <span class="mb-3 d-block">Renovated basements provide a unique space that is highly beneficial to your home. Having a private gym, a beautiful entertainment space or an additional guest room are just a few of the many perks about renovating your basement. Nonetheless, renovation is a big financial undertaking. Homeowners often worry about basement renovation costs when they are looking to upgrade.

                                          <a href="#">View Details </a>
                                      </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card bid-container-listing">
                            <div class="card-body">
                                <h4 class="card-title mb-0">
                                    Tongue and wood ceiling
                                    <div id="round-disabled" class="raiting-container" style="cursor: pointer;">
                                        <img alt="1" src="../assets/images/rating/star-on.png" title="bad">&nbsp;
                                        <img alt="2" src="../assets/images/rating/star-on.png" title="poor">&nbsp;
                                        <img alt="3" src="../assets/images/rating/star-on.png" title="regular">&nbsp;
                                        <img alt="4" src="../assets/images/rating/star-off.png" title="good">&nbsp;
                                        <img alt="5" src="../assets/images/rating/star-off.png" title="gorgeous">
                                    </div>
                                </h4>

                                <div class="bid-option">
                                    <span class="dots">...</span>
                                    <ul>
                                        <li><a href="javascript:void()">Edit</a></li>
                                        <li><a href="javascript:void()">Delete</a></li>
                                    </ul>
                                </div>
                                <div class="d-flex justify-content-between pt-3">
                                    <span class="text-muted">Project-add: <span
                                            class="font-weight-bold">April 24, 2020</span></span>
                                    <span class="text-muted float-right">Total Bid: <span
                                            class="font-weight-bold">3</span> </span>
                                    <span class="text-muted float-right">Bid Ending Time: <span
                                            class="font-weight-bold text-danger">3h:30m</span> </span>
                                </div>
                                <p class="project-hours pt-3"><span>Fixed</span> - More than 6 months, 300$</p>

                                <span class="mb-3 d-block">Renovated basements provide a unique space that is highly beneficial to your home. Having a private gym, a beautiful entertainment space or an additional guest room are just a few of the many perks about renovating your basement. Nonetheless, renovation is a big financial undertaking. Homeowners often worry about basement renovation costs when they are looking to upgrade.

                                          <a href="#">View Details </a>
                                      </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card bid-container-listing">
                            <div class="card-body">
                                <h4 class="card-title mb-0">
                                    Tongue and wood ceiling
                                    <div id="round-disabled" class="raiting-container" style="cursor: pointer;">
                                        <img alt="1" src="../assets/images/rating/star-on.png" title="bad">&nbsp;
                                        <img alt="2" src="../assets/images/rating/star-on.png" title="poor">&nbsp;
                                        <img alt="3" src="../assets/images/rating/star-on.png" title="regular">&nbsp;
                                        <img alt="4" src="../assets/images/rating/star-off.png" title="good">&nbsp;
                                        <img alt="5" src="../assets/images/rating/star-off.png" title="gorgeous">
                                    </div>
                                </h4>

                                <div class="bid-option">
                                    <span class="dots">...</span>
                                    <ul>
                                        <li><a href="javascript:void()">Edit</a></li>
                                        <li><a href="javascript:void()">Delete</a></li>
                                    </ul>
                                </div>
                                <div class="d-flex justify-content-between pt-3">
                                    <span class="text-muted">Project-add: <span
                                            class="font-weight-bold">April 24, 2020</span></span>
                                    <span class="text-muted float-right">Total Bid: <span
                                            class="font-weight-bold">3</span> </span>
                                    <span class="text-muted float-right">Bid Ending Time: <span
                                            class="font-weight-bold text-danger">3h:30m</span> </span>
                                </div>
                                <p class="project-hours pt-3"><span>Fixed</span> - More than 6 months, 300$</p>

                                <span class="mb-3 d-block">Renovated basements provide a unique space that is highly beneficial to your home. Having a private gym, a beautiful entertainment space or an additional guest room are just a few of the many perks about renovating your basement. Nonetheless, renovation is a big financial undertaking. Homeowners often worry about basement renovation costs when they are looking to upgrade.

                                          <a href="#">View Details </a>
                                      </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card bid-container-listing">
                            <div class="card-body">
                                <h4 class="card-title mb-0">
                                    Tongue and wood ceiling
                                    <div id="round-disabled" class="raiting-container" style="cursor: pointer;">
                                        <img alt="1" src="../assets/images/rating/star-on.png" title="bad">&nbsp;
                                        <img alt="2" src="../assets/images/rating/star-on.png" title="poor">&nbsp;
                                        <img alt="3" src="../assets/images/rating/star-on.png" title="regular">&nbsp;
                                        <img alt="4" src="../assets/images/rating/star-off.png" title="good">&nbsp;
                                        <img alt="5" src="../assets/images/rating/star-off.png" title="gorgeous">
                                    </div>
                                </h4>

                                <div class="bid-option">
                                    <span class="dots">...</span>
                                    <ul>
                                        <li><a href="javascript:void()">Edit</a></li>
                                        <li><a href="javascript:void()">Delete</a></li>
                                    </ul>
                                </div>
                                <div class="d-flex justify-content-between pt-3">
                                    <span class="text-muted">Project-add: <span
                                            class="font-weight-bold">April 24, 2020</span></span>
                                    <span class="text-muted float-right">Total Bid: <span
                                            class="font-weight-bold">3</span> </span>
                                    <span class="text-muted float-right">Bid Ending Time: <span
                                            class="font-weight-bold text-danger">3h:30m</span> </span>
                                </div>
                                <p class="project-hours pt-3"><span>Fixed</span> - More than 6 months, 300$</p>

                                <span class="mb-3 d-block">Renovated basements provide a unique space that is highly beneficial to your home. Having a private gym, a beautiful entertainment space or an additional guest room are just a few of the many perks about renovating your basement. Nonetheless, renovation is a big financial undertaking. Homeowners often worry about basement renovation costs when they are looking to upgrade.

                                          <a href="#">View Details </a>
                                      </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card bid-container-listing">
                            <div class="card-body">
                                <h4 class="card-title mb-0">
                                    Tongue and wood ceiling
                                    <div id="round-disabled" class="raiting-container" style="cursor: pointer;">
                                        <img alt="1" src="../assets/images/rating/star-on.png" title="bad">&nbsp;
                                        <img alt="2" src="../assets/images/rating/star-on.png" title="poor">&nbsp;
                                        <img alt="3" src="../assets/images/rating/star-on.png" title="regular">&nbsp;
                                        <img alt="4" src="../assets/images/rating/star-off.png" title="good">&nbsp;
                                        <img alt="5" src="../assets/images/rating/star-off.png" title="gorgeous">
                                    </div>
                                </h4>

                                <div class="bid-option">
                                    <span class="dots">...</span>
                                    <ul>
                                        <li><a href="javascript:void()">Edit</a></li>
                                        <li><a href="javascript:void()">Delete</a></li>
                                    </ul>
                                </div>
                                <div class="d-flex justify-content-between pt-3">
                                    <span class="text-muted">Project-add: <span
                                            class="font-weight-bold">April 24, 2020</span></span>
                                    <span class="text-muted float-right">Total Bid: <span
                                            class="font-weight-bold">3</span> </span>
                                    <span class="text-muted float-right">Bid Ending Time: <span
                                            class="font-weight-bold text-danger">3h:30m</span> </span>
                                </div>
                                <p class="project-hours pt-3"><span>Fixed</span> - More than 6 months, 300$</p>

                                <span class="mb-3 d-block">Renovated basements provide a unique space that is highly beneficial to your home. Having a private gym, a beautiful entertainment space or an additional guest room are just a few of the many perks about renovating your basement. Nonetheless, renovation is a big financial undertaking. Homeowners often worry about basement renovation costs when they are looking to upgrade.

                                          <a href="#">View Details </a>
                                      </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card bid-container-listing">
                            <div class="card-body">
                                <h4 class="card-title mb-0">
                                    Tongue and wood ceiling
                                    <div id="round-disabled" class="raiting-container" style="cursor: pointer;">
                                        <img alt="1" src="../assets/images/rating/star-on.png" title="bad">&nbsp;
                                        <img alt="2" src="../assets/images/rating/star-on.png" title="poor">&nbsp;
                                        <img alt="3" src="../assets/images/rating/star-on.png" title="regular">&nbsp;
                                        <img alt="4" src="../assets/images/rating/star-off.png" title="good">&nbsp;
                                        <img alt="5" src="../assets/images/rating/star-off.png" title="gorgeous">
                                    </div>
                                </h4>

                                <div class="bid-option">
                                    <span class="dots">...</span>
                                    <ul>
                                        <li><a href="javascript:void()">Edit</a></li>
                                        <li><a href="javascript:void()">Delete</a></li>
                                    </ul>
                                </div>
                                <div class="d-flex justify-content-between pt-3">
                                    <span class="text-muted">Project-add: <span
                                            class="font-weight-bold">April 24, 2020</span></span>
                                    <span class="text-muted float-right">Total Bid: <span
                                            class="font-weight-bold">3</span> </span>
                                    <span class="text-muted float-right">Bid Ending Time: <span
                                            class="font-weight-bold text-danger">3h:30m</span> </span>
                                </div>
                                <p class="project-hours pt-3"><span>Fixed</span> - More than 6 months, 300$</p>

                                <span class="mb-3 d-block">Renovated basements provide a unique space that is highly beneficial to your home. Having a private gym, a beautiful entertainment space or an additional guest room are just a few of the many perks about renovating your basement. Nonetheless, renovation is a big financial undertaking. Homeowners often worry about basement renovation costs when they are looking to upgrade.

                                          <a href="#">View Details </a>
                                      </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
