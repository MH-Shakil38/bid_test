@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid">
        <section>
            <div>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Comment Row -->

                                        <h4 class="card-title mb-0">{{$project->title ?? ''}}
                                            <a href="javascript:void">
                                                <i class="ti-heart float-right"></i>
                                            </a>
                                        </h4>
                                        <span class="text-muted">{{bid_date($project->created_at)}}</span>
                                        <p class="project-hours pt-3"><span>Fixed</span> - Expert level -  More than 6 months, 300+ $ - Renewed 17 minutes ago</p>
                                        <span class="mb-3 d-block">{!! $project->details !!}</span>
                                        <p class="project-images">
                                            @forelse($project->getMedia('*') as $img)
                                                <a class="example-image-link" href="{{$img->getFullUrl()}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="{{$img->getFullUrl()}}" alt=""/></a>
                                            @empty
                                            @endforelse
                                        </p>
                                        <hr>
                                        <ul class="pl-3">
                                            <li class="font-weight-bold mb-0">Needs to hire 3 Freelancers </li>
                                            <li>This Project is about 6 to 8 months contract.</li>
                                            <li>This Project is about 6 to 8 months contract.</li>
                                            <li>This Project is about 6 to 8 months contract.</li>
                                            <li>This Project is about 6 to 8 months contract.</li>
                                            <li>This Project is about 6 to 8 months contract.</li>
                                            <li>This Project is about 6 to 8 months contract.</li>
                                        </ul>
                                        <div class="row border-top border-bottom pt-3">
                                            <div class="col-lg-4">
                                                <p class="font-weight-bold mb-0">More than 3000$ work</p>
                                                <p>Hourly</p>
                                            </div>
                                            <div class="col-lg-4">
                                                <p class="font-weight-bold mb-0">More than 6 months</p>
                                                <p>Project Length</p>
                                            </div>
                                            <div class="col-lg-4">
                                                <p class="font-weight-bold mb-0">Intermediate level</p>
                                                <p>I am looking for a mix of experience and value </p>
                                            </div>
                                        </div>
                                        <ul class="pl-3 mt-3">
                                            <li class="font-weight-bold mb-0">Activity on this job</li>
                                            <li>Bids: Less than 5 </li>
                                            <li>Interviewing: 0 </li>
                                            <li>Invites sent: 0 </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <p>Total Bids : {{bid_count($project->id)}}</p>
                        <p>Bid End Date: {{bid_date($project->due_date)}}</p>
                        <p>Bid End Time: {{bid_time($project->bid_end)}}</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

{{--    --}}
{{--     <div class="container-fluid">--}}
{{--        <section>--}}
{{--            <div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-9">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-12 mb-3">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <!-- Comment Row -->--}}

{{--                                        <h4 class="card-title mb-0">{{$project->title}}--}}
{{--                                            <a href="javascript:void">--}}
{{--                                                <i class="ti-heart float-right"></i>--}}
{{--                                            </a>--}}
{{--                                        </h4>--}}
{{--                                        <span class="text-muted mb-2">{{\Carbon\Carbon::parse($project->created_at)->format('M d, Y')}}</span>--}}
{{--                                        <br>--}}
{{--                                        {!! $project->details !!}--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3">--}}
{{--                        <p>Total Bids : ....20</p>--}}
{{--                        <p>Bid End Date: {{\Carbon\Carbon::parse($project->bid_end)->format('d-M-Y')}}</p>--}}
{{--                        <p>Bid End Time: {{\Carbon\Carbon::parse($project->bid_end)->format('h\h :i\m a')}}</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    </div>--}}

     <style>
         img{
             max-width: 100%;
         }
     </style>
@endsection
