@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid">
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <form class="form">--}}
{{--                            <div class="form-group row">--}}
{{--                                <div class="col-md-3">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label class="control-label">Search by Name</label>--}}
{{--                                        <input type="text" class="form-control" name="first_name" id="first_name">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-3">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label class="control-label">Search by Date</label>--}}
{{--                                        <input type="date" class="form-control">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-3">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label class="control-label">Search by Status</label>--}}
{{--                                        <select class="form-control custom-select">--}}
{{--                                            <option>Active</option>--}}
{{--                                            <option>Draft</option>--}}
{{--                                            <option>Complete</option>--}}
{{--                                            <option>Reject</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="row">
            <div class="col-lg-12">
                <h3>Total Bidders</h3>
            </div>
        </div>
        <div class="row">
            @forelse($bidders as $bidder)
                <div class="col-sm-6">
                    <div class="bidder-block">
                        <div class="d-flex align-items-center">
                            <div class="m-r-10">
                                <img src="{{profile_pic_check($bidder->getFirstMediaUrl("profile_picture"))}}" alt="user" class="rounded-circle" width="45">
                            </div>
                            <div class="">
                                <h4 class="m-b-0 font-16"><a href="{{route('profile',['id'=>$bidder->id])}}">{{$bidder->full_name}}</a>
                                </h4>
                                <div id="round-disabled" class="raiting-container" style="cursor: pointer;">
                                    <img alt="1" src="../assets/images/rating/star-on.png" title="bad">&nbsp;
                                    <img alt="2" src="../assets/images/rating/star-on.png" title="poor">&nbsp;
                                    <img alt="3" src="../assets/images/rating/star-on.png" title="regular">&nbsp;
                                    <img alt="4" src="../assets/images/rating/star-off.png" title="good">&nbsp;
                                    <img alt="5" src="../assets/images/rating/star-off.png" title="gorgeous">
                                </div>
                            </div>
                            <div class="bid-option">
                                <span class="dots">...</span>
{{--                                <ul>--}}
{{--                                    <li><a href="javascript:void()">Edit</a></li>--}}
{{--                                    <li><a href="javascript:void()">Delete</a></li>--}}
{{--                                </ul>--}}
                            </div>
                        </div>

                        <p class="bider-bio">
                            <label>Profile:</label> {{$bidder->details}}
                        </p>

{{--                        <div class="bidder-info-container">--}}
{{--                            <label>Joining Date: <span class="text-muted">{{bid_date($bidder->created_at)}}</span></label>--}}
{{--                            <p class="project-hours total-project-completed">--}}
{{--                                <label>Total Project Completed</label> (5)--}}
{{--                            </p>--}}
{{--                            <p class="project-hours total-income">--}}
{{--                                <label>Total Income</label> (5)--}}
{{--                            </p>--}}
{{--                        </div>--}}
                    </div>
                </div>
            @empty
                <div class="no-record">No record Fount</div>
            @endforelse
        </div>
    </div>
@endsection
