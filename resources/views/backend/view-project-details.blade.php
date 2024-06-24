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

                                        <h4 class="card-title mb-0">{{ $project->title ?? ''}}
                                            <a href="javascript:void">
                                                <i class="ti-heart float-right"></i>
                                            </a>
                                        </h4>
                                        <span class="text-muted">{{bid_date($project->created_at)}}</span>
{{--                                        <p class="project-hours pt-3"><span>Fixed</span> - Expert level -  More than 6 months, 300+ $ - Renewed 17 minutes ago</p>--}}
                                        <span class="mb-3 d-block">{!! $project->details !!}</span>
                                        <p class="project-images">
                                            @forelse($project->getMedia('*') as $img)
                                                <a class="example-image-link" href="{{$img->getFullUrl()}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="{{$img->getFullUrl()}}" alt=""/></a>
                                            @empty
                                            @endforelse
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <p>Total Bids : {{bid_count($project->id)}}</p>
                        <p>Bid End Date: {{bid_date($project->due_date)}}</p>
                        <p>Bid End Time: {{bid_time($project->bid_end)}}</p>
                        <p>Status: {!! status($project->status)  !!}</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
     <style>
         img{
             max-width: 100%;
         }
     </style>
@endsection
