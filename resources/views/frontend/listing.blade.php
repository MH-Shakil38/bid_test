@extends('frontend.layouts.master')
@section('content')
    <section class="my-5" style="font-family: 'Open Sans', sans-serif;">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-3">
                    <h4>Find a Work</h4>
                </div>
                <div class="col-md-7">
                    <div class="input-group">
                        <input type="text" placeholder="Find Work" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <div class="input-group-prepend">
                            <a href="#" class="btn btn-primary" id="inputGroup-sizing-sm">Search</a>
                        </div>
                    </div>
                    <a href="#">Advance Search</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="filter card">
                        <div class="card-body">
                            {{-- <h4 class="mt-0">Recent Search</h4>
                            <ul>
                                <li>
                                    <a href="#">Basement Renovations</a>
                                </li>
                                <li>
                                    <a href="#">Basement Finishing</a>
                                </li>
                                <li>
                                    <a href="#">Basement Suite</a>
                                </li>
                                <li>
                                    <a href="#">Personal Use</a>
                                </li>
                                <li>
                                    <a href="#">Building Permits</a>
                                </li>
                                <li>
                                    <a href="#">3D AutoCAD Modeling</a>
                                </li>
                            </ul> --}}
                            <h4 class="mt-4">My Categories</h4>
                            <ul>
                                @forelse(categories() as $category)
                                    <li>
                                        <a href="{{route('find.project',['category'=>$category->id])}}">{{$category->name}}</a>
                                    </li>
                                @empty
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row project-listing">
                        @forelse($projects as $info)
                            <div class="col-lg-12 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3 pr-0">
                                                <img class="img-fluid pro-img border" src="images/ff.jpg" alt="product-img" />
                                            </div>
                                            <div class="col-lg-9">
                                                <a href="#" class="whislist"><i class="fas fa-heart"></i></a>
                                                <h4 class="card-title">{{$info->title}}
                                                    <a href="javascript:void">
                                                        <i class="ti-heart float-right"></i>
                                                    </a>
                                                </h4>
                                                <p class="project-hours"><span>Fixed</span> - Entry level -  More than
                                                    ({{$info->duration ?? '...'}}) months, <span class="text-primary"><br>Budget: {{$info->max_price}}$-{{$info->min_price}}$</span></p>
                                                <span class="mb-3 d-block four-line-text">{!! $info->details !!}</span>
                                                <div class="d-flex justify-content-between">
                                                    <span class="text-muted">Project-add: <span class="font-weight-bold">{{bid_date($info->created_at)}}</span></span>
                                                    <span class="text-muted float-right">Total Bid: <span class="font-weight-bold">{{bid_count($info->id)}}</span> </span>
{{--                                                    <span class="text-muted float-right">Bid End Time: <span class="font-weight-bold text-danger">{{ bid_time($info->bid_end)}}</span> </span>--}}
                                                </div>
                                                <hr>
                                                <div class="d-flex no-block float-right align-items-center">
                                                    <a href="{{route('project.details',$info->id)}}" class="btn btn-sm btn-dark btn-outline">Bid on Project <i class="sl-icon-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="listing-right-block">
                        <h4>
                            <a href="{{route('profile')}}">
                                <img src="{{thumbnail(auth()->user()->getFirstMediaUrl("*"))}}"> {{auth()->user()->full_name}}</a></h4>
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
                        <img class="img-fluid" src="images/banner.jpg" />
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

