@extends('backend.layouts.master')
@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Dashboard</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <div class="card-group">
            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg bg-danger">
                                        <i class="ti-clipboard text-white"></i>
                                    </span>
                        </div>
                        <div>
                            <a href="javascript:void()">Total Bidder</a>
                        </div>
                        <div class="ml-auto">
                            <h2 class="m-b-0 font-light">15</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg btn-info">
                                        <i class="ti-clipboard text-white"></i>
                                    </span>
                        </div>
                        <div>
                            <a href="javascript:void()">Total Home Owners</a>
                        </div>
                        <div class="ml-auto">
                            <h2 class="m-b-0 font-light">20</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg bg-success">
                                        <i class="ti-clipboard text-white"></i>
                                    </span>
                        </div>
                        <div>
                            <a href="total-bids.html">Total Bid's</a>
                        </div>
                        <div class="ml-auto">
                            <h2 class="m-b-0 font-light">35</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg bg-warning">
                                        <i class="ti-clipboard text-white"></i>
                                    </span>
                        </div>
                        <div>
                            <a href="monthly-weekly-incom.html">Total Earning $5000</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <!-- Column -->


        </div>

        <div class="row">
            <div class="col-12">
                <h3>Monthly/Weekly Report</h3>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="dateopen" class="control-label col-form-label">Start Date</label>
                            <input type="date" class="form-control" id="dateopen">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="datefixe" class="control-label col-form-label">End Date</label>
                            <input type="date" class="form-control" id="datefixe">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label fclass="control-label col-form-label">Select Period</label>
                            <select class="form-control">
                                <option>Weekly</option>
                                <option>Monthly</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Columns Oriented Data Chart -->
        <!-- Start Category Data Chart -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Chart</h4>
                        <div id="category-data"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
