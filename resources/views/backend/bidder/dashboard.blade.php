@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <div class="card-group">
            <!-- Card -->
            <a href="#" class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg bg-danger">
                                        <i class="ti-clipboard text-white"></i>
                                    </span>
                        </div>
                        <div>
                            Total Bids on projects
                        </div>
                        <div class="ml-auto">
                            <h2 class="m-b-0 font-light">20</h2>
                        </div>
                    </div>
                </div>
            </a>
            <!-- Card -->
            <!-- Card -->
            <a href="#" class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg btn-info">
                                        <i class="ti-clipboard text-white"></i>
                                    </span>
                        </div>
                        <div>
                            Total Earning
                        </div>
                        <div class="ml-auto">
                            <h2 class="m-b-0 font-light">$75</h2>
                        </div>
                    </div>
                </div>
            </a>
            <!-- Card -->
            <!-- Card -->
            <a href="#" class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg bg-success">
                                        <i class="ti-clipboard text-white"></i>
                                    </span>
                        </div>
                        <div>
                            Project Porgress
                        </div>
                        <div class="ml-auto">
                            <h2 class="m-b-0 font-light">02</h2>
                        </div>
                    </div>
                </div>
            </a>
            <!-- Card -->
            <!-- Card -->
            <a href="#" class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                                    <span class="btn btn-circle btn-lg bg-warning">
                                        <i class="ti-clipboard text-white"></i>
                                    </span>
                        </div>
                        <div>
                            Reacent Project
                        </div>
                        <div class="ml-auto">
                            <h2 class="m-b-0 font-light">02</h2>
                        </div>
                    </div>
                </div>
            </a>
            <!-- Card -->
            <!-- Column -->
        </div>

        <!-- ============================================================== -->
        <!-- Email campaign chart -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Top Selliing Products -->
        <!-- ============================================================== -->
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <a href="#">
                    <img style="width:400px" class="img-fluid" src="../images/banner2.jpg">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h4>Bid On Project</h4>
                <div class="card">
                    <div class="table-responsive">
                        <table class="table v-middle">
                            <thead>
                            <tr class="bg-light">
                                <th class="border-top-0">Projects Name</th>
                                <th class="border-top-0">Contract</th>
                                <th class="border-top-0">Budget</th>
                                <th class="border-top-0">Bid Closing Time</th>
                                <th class="border-top-0">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($bids as $info)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="m-r-10">
                                                <a class="btn btn-circle btn-danger text-white">EA</a>
                                            </div>
                                            <div class="">
                                                <h4 class="m-b-0 font-16">{{$info->project->name}}</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <label class="label label-danger">Park</label>
                                    </td>
                                    <td>
                                        <span class="text-muted">${{$info->project->max_price}}</span>
                                    </td>
                                    <td>
                                        {{bid_date($info->project->bid_end)}} {{bid_time($info->project->bid_end)}}
                                    </td>
                                    <td>
                                        <a href="view-details.html" class="label label-success label-rounded">Active</a>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h4>Active Projects</h4>
                <div class="card">
                    <div class="table-responsive">
                        <table class="table v-middle">
                            <thead>
                            <tr class="bg-light">
                                <th class="border-top-0">Projects Name</th>
                                <th class="border-top-0">Contract</th>
                                <th class="border-top-0">Start Date</th>
                                <th class="border-top-0">Budget</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10">
                                            <a class="btn btn-circle btn-danger text-white">EA</a>
                                        </div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Elite Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <label class="label label-danger">Park</label>
                                </td>
                                <td>
                                    <span class="text-muted">May 14, 2020</span>
                                </td>
                                <td>
                                    <span class="text-muted">$250</span>
                                </td>
                                <td>
                                    <a href="view-details.html" class="label label-success label-rounded">View
                                        Details</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10">
                                            <a class="btn btn-circle btn-danger text-white">EA</a>
                                        </div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Elite Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <label class="label label-danger">Bedroom</label>
                                </td>
                                <td>
                                    <span class="text-muted">May 14, 2019</span>
                                </td>
                                <td>
                                    <span class="text-muted">$70</span>
                                </td>
                                <td>
                                    <a href="view-details.html" class="label label-success label-rounded">View
                                        Details</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10">
                                            <a class="btn btn-circle btn-danger text-white">EA</a>
                                        </div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Elite Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <label class="label label-danger">Park</label>
                                </td>
                                <td>
                                    <span class="text-muted">May 14, 2020</span>
                                </td>
                                <td>
                                    <span class="text-muted">$70</span>
                                </td>
                                <td>
                                    <a href="view-details.html" class="label label-success label-rounded">View
                                        Details</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10">
                                            <a class="btn btn-circle btn-danger text-white">EA</a>
                                        </div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Elite Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <label class="label label-danger">Park</label>
                                </td>
                                <td>
                                    <span class="text-muted">May 14, 2020</span>
                                </td>
                                <td>
                                    <span class="text-muted">$120</span>
                                </td>
                                <td>
                                    <a href="view-details.html" class="label label-success label-rounded">View
                                        Details</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h4>Complete Project</h4>
                <div class="card">
                    <div class="table-responsive">
                        <table class="table v-middle">
                            <thead>
                            <tr class="bg-light">
                                <th class="border-top-0">Projects Name</th>
                                <th class="border-top-0">Contract</th>
                                <th class="border-top-0">Start Date</th>
                                <th class="border-top-0">End Date</th>
                                <th class="border-top-0">Budget</th>
                                <th class="border-top-0">Reviews/Rating</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10">
                                            <a class="btn btn-circle btn-danger text-white">EA</a>
                                        </div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Elite Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <label class="label label-danger">Park</label>
                                </td>
                                <td>
                                    <span class="text-muted">May 14, 2020</span>
                                </td>
                                <td>
                                    <span class="text-muted">May 14, 2020</span>
                                </td>
                                <td>
                                    <span class="text-muted">$250</span>
                                </td>
                                <td>
                                    <div id="round-disabled" class="raiting-container" style="cursor: pointer;">
                                        <img alt="1" src="../assets/images/rating/star-on.png" title="bad">&nbsp;
                                        <img alt="2" src="../assets/images/rating/star-on.png" title="poor">&nbsp;
                                        <img alt="3" src="../assets/images/rating/star-on.png" title="regular">&nbsp;
                                        <img alt="4" src="../assets/images/rating/star-off.png" title="good">&nbsp;
                                        <img alt="5" src="../assets/images/rating/star-off.png" title="gorgeous">
                                    </div>
                                </td>
                                <td>
                                    <a href="view-details.html" class="label label-success label-rounded">View
                                        Details</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10">
                                            <a class="btn btn-circle btn-danger text-white">EA</a>
                                        </div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Elite Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <label class="label label-danger">Park</label>
                                </td>
                                <td>
                                    <span class="text-muted">May 14, 2020</span>
                                </td>
                                <td>
                                    <span class="text-muted">May 14, 2020</span>
                                </td>
                                <td>
                                    <span class="text-muted">$250</span>
                                </td>
                                <td>
                                    <div id="round-disabled" class="raiting-container" style="cursor: pointer;">
                                        <img alt="1" src="../assets/images/rating/star-on.png" title="bad">&nbsp;
                                        <img alt="2" src="../assets/images/rating/star-on.png" title="poor">&nbsp;
                                        <img alt="3" src="../assets/images/rating/star-on.png" title="regular">&nbsp;
                                        <img alt="4" src="../assets/images/rating/star-off.png" title="good">&nbsp;
                                        <img alt="5" src="../assets/images/rating/star-off.png" title="gorgeous">
                                    </div>
                                </td>
                                <td>
                                    <a href="view-details.html" class="label label-success label-rounded">View
                                        Details</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10">
                                            <a class="btn btn-circle btn-danger text-white">EA</a>
                                        </div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Elite Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <label class="label label-danger">Park</label>
                                </td>
                                <td>
                                    <span class="text-muted">May 14, 2020</span>
                                </td>
                                <td>
                                    <span class="text-muted">May 14, 2020</span>
                                </td>
                                <td>
                                    <span class="text-muted">$250</span>
                                </td>
                                <td>
                                    <div id="round-disabled" class="raiting-container" style="cursor: pointer;">
                                        <img alt="1" src="../assets/images/rating/star-on.png" title="bad">&nbsp;
                                        <img alt="2" src="../assets/images/rating/star-on.png" title="poor">&nbsp;
                                        <img alt="3" src="../assets/images/rating/star-on.png" title="regular">&nbsp;
                                        <img alt="4" src="../assets/images/rating/star-off.png" title="good">&nbsp;
                                        <img alt="5" src="../assets/images/rating/star-off.png" title="gorgeous">
                                    </div>
                                </td>
                                <td>
                                    <a href="view-details.html" class="label label-success label-rounded">View
                                        Details</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10">
                                            <a class="btn btn-circle btn-danger text-white">EA</a>
                                        </div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Elite Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <label class="label label-danger">Park</label>
                                </td>
                                <td>
                                    <span class="text-muted">May 14, 2020</span>
                                </td>
                                <td>
                                    <span class="text-muted">May 29, 2020</span>
                                </td>
                                <td>
                                    <span class="text-muted">$250</span>
                                </td>
                                <td>
                                    <div id="round-disabled" class="raiting-container" style="cursor: pointer;">
                                        <img alt="1" src="../assets/images/rating/star-on.png" title="bad">&nbsp;
                                        <img alt="2" src="../assets/images/rating/star-on.png" title="poor">&nbsp;
                                        <img alt="3" src="../assets/images/rating/star-on.png" title="regular">&nbsp;
                                        <img alt="4" src="../assets/images/rating/star-off.png" title="good">&nbsp;
                                        <img alt="5" src="../assets/images/rating/star-off.png" title="gorgeous">
                                    </div>
                                </td>
                                <td>
                                    <a href="view-details.html" class="label label-success label-rounded">View
                                        Details</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10">
                                            <a class="btn btn-circle btn-danger text-white">EA</a>
                                        </div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Elite Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <label class="label label-danger">Park</label>
                                </td>
                                <td>
                                    <span class="text-muted">May 14, 2020</span>
                                </td>
                                <td>
                                    <span class="text-muted">May 30, 2020</span>
                                </td>
                                <td>
                                    <span class="text-muted">$250</span>
                                </td>
                                <td>
                                    <div id="round-disabled" class="raiting-container" style="cursor: pointer;">
                                        <img alt="1" src="../assets/images/rating/star-on.png" title="bad">&nbsp;
                                        <img alt="2" src="../assets/images/rating/star-on.png" title="poor">&nbsp;
                                        <img alt="3" src="../assets/images/rating/star-on.png" title="regular">&nbsp;
                                        <img alt="4" src="../assets/images/rating/star-off.png" title="good">&nbsp;
                                        <img alt="5" src="../assets/images/rating/star-off.png" title="gorgeous">
                                    </div>
                                </td>
                                <td>
                                    <a href="view-details.html" class="label label-success label-rounded">View
                                        Details</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
