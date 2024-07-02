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
                                    <span class="text-muted">{{bid_date($info->created_at)}}</span><br>
                                    <span class="text-bolder">Created By: {{$info->user->full_name}}</span>
                                    <p class="project-hours"><span>Fixed</span> - Entry level -  More than
                                        ({{$info->duration ?? '...'}}) months, <span class="text-primary"></span></p>
                                    <div class="d-flex justify-content-between pt-3">
                                        <span class="text-muted">Project-add: <span class="font-weight-bold">{{bid_date($info->created_at)}}</span></span>
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
                        <div class="listing-right-block">
                            <h4><a href="dashboard-page.html"><img src="{{thumbnail(auth()->user()->getFirstMediaUrl("*"))}}"> Jhone Deo</a></h4>
                            <h3>Proposals</h3>
                            <ul>
                                <li>
                                    <a href="#">{{bidderProjectCountByStatus(0)}} active candidacy</a>
                                </li>
                                <li>
                                    <a href="#">{{bidderProjectCountByStatus(3)}} submitted proposals</a>
                                </li>
                                <li>
                                    <a href="#">{{bidderProjectCountByStatus(1)}} available connects</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#">
                            <img class="img-fluid" src="{{asset('/')}}/images/banner.jpg" />
                        </a>
                </div>
            </div>
        </div>
    </section>
@endsection
