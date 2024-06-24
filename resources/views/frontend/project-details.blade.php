@extends('frontend.layouts.master')
@section('content')
    <section class="my-5" style="font-family: 'Open Sans', sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Comment Row -->
                                    <h4 class="card-title mb-0">{{$info->title}}
                                        <a href="javascript:void">
                                            <i class="ti-heart float-right"></i>
                                        </a>
                                    </h4>
                                    <span class="text-muted">{{bid_date($info->created_at)}}</span>
                                    <div class="d-flex justify-content-between pt-3">
                                        <span class="text-muted">Project-add: <span class="font-weight-bold">{{bid_date($info->bid_date)}}</span></span>
                                        <span class="text-muted float-right">Total Bid: <span class="font-weight-bold">{{bid_count($info->id)}}</span> </span>
                                        <span class="text-muted float-right">Budget: <span class="font-weight-bold text-danger">${{$info->min_price}} - ${{$info->max_price}} </span> </span>
{{--                                        <span class="text-muted float-right">Bid Ending Time: <span class="font-weight-bold text-danger">{{bid_time($info->bid_end)}}</span> </span>--}}
                                    </div>
{{--                                    <p class="project-hours pt-3"><span>Fixed</span> - More than 6 months, 300$</p>--}}
                                    <span class="mb-3 d-block details">{!! $info->details !!}</span>
                                    <p class="project-images">
                                        @forelse($info->getMedia('*') as $img)
                                            <a class="example-image-link" href="{{$img->getFullUrl()}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="{{$img->getFullUrl()}}" alt=""/></a>
                                        @empty
                                        @endforelse
                                    </p>
                                    <hr>
{{--                                    <ul class="pl-3">--}}
{{--                                        <li class="font-weight-bold mb-0">Needs to hire 3 Freelancers </li>--}}
{{--                                    </ul>--}}
{{--                                    <ul class="pl-3 mt-3">--}}
{{--                                        <li class="font-weight-bold mb-0">Activity on this job</li>--}}
{{--                                        <li>Proposals: Less than 5 </li>--}}
{{--                                        <li>Interviewing: 0 </li>--}}
{{--                                        <li>Invites sent: 0 </li>--}}
{{--                                    </ul>--}}
                                    <a href="{{route('project.bid',$info->id)}}" class="btn btn-primary w-100 mb-3">Bid Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <a href="{{route('project.bid',$info->id)}}" class="btn btn-primary w-100 mb-3">Bid Project</a>
{{--                    <a href="{{route('project.bid',$info->id)}}" class="btn btn-warning w-100 mb-3">Ask Question</a>--}}
{{--                    <p>Available Connects: 102</p>--}}
                    <p><span class="font-weight-bold">{{user_projects($info->user_id)}} jobs posted</span>
                        0% hire rate, {{user_projects($info->user_id, 1)}} open job
                    </p>
                    <p>Member since {{date('M d, Y', strtotime($info->user->created_at))}} </p>
                    <a href="#">
                        <img class="img-fluid" src="{{asset('/')}}images/banner.jpg" />
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
