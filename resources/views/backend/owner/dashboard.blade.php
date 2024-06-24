@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h4>All Project</h4>
                <div class="card">
                    <div class="table-responsive">
                        <table class="table v-middle">
                            <thead>
                            <tr class="bg-light">
                                <th class="border-top-0">Projects Name</th>
                                <th class="border-top-0">Start Date</th>
                                <th class="border-top-0">Status</th>
                                <th class="border-top-0">Budget</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($projects as $info)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="m-r-10">
                                                <a class="btn btn-circle btn-danger text-white">EA</a>
                                            </div>
                                            <div class="">
                                                <h4 class="m-b-0 font-16">{{$info->title}}</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{\Carbon\Carbon::parse($info->created_at)->format('M d, Y')}}</span>
                                    </td>
                                    <td>
                                        {!! status($info->status) !!}
                                    </td>
                                    <td>
                                        <span class="text-muted">Min: ${{$info->min_price}}, Max: ${{$info->max_price}}</span>
                                    </td>
                                    <td>
                                        <a href="{{route('view.project-details',$info->id)}}" class="label label-success label-rounded">View Details</a>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="row">--}}
{{--            <div class="col-sm-12">--}}
{{--                <h4>Draft</h4>--}}
{{--                <div class="card">--}}
{{--                    <div class="table-responsive">--}}
{{--                        <table class="table v-middle">--}}
{{--                            <thead>--}}
{{--                            <tr class="bg-light">--}}
{{--                                <th class="border-top-0">Projects Name</th>--}}
{{--                                <th class="border-top-0">Start Date</th>--}}
{{--                                <th class="border-top-0">Status</th>--}}
{{--                                <th class="border-top-0">Budget</th>--}}
{{--                                <th class="border-top-0">Action</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td>--}}
{{--                                    <div class="d-flex align-items-center">--}}
{{--                                        <div class="m-r-10">--}}
{{--                                            <a class="btn btn-circle btn-danger text-white">EA</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="">--}}
{{--                                            <h4 class="m-b-0 font-16">Elite Admin</h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <span class="text-muted">May 14, 2018</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <label class="label label-warning">Draft</label>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <span class="text-muted">$25</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a href="{{route('view.project-details',$info->id)}}" class="label label-success label-rounded">View Details</a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}

{{--                            <tr>--}}
{{--                                <td>--}}
{{--                                    <div class="d-flex align-items-center">--}}
{{--                                        <div class="m-r-10">--}}
{{--                                            <a class="btn btn-circle btn-danger text-white">EA</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="">--}}
{{--                                            <h4 class="m-b-0 font-16">Elite Admin</h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <span class="text-muted">May 14, 2018</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <label class="label label-warning">Draft</label>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <span class="text-muted">$85</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a href="{{route('view.project-details',$info->id)}}" class="label label-success label-rounded">View Details</a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}

{{--                            <tr>--}}
{{--                                <td>--}}
{{--                                    <div class="d-flex align-items-center">--}}
{{--                                        <div class="m-r-10">--}}
{{--                                            <a class="btn btn-circle btn-danger text-white">EA</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="">--}}
{{--                                            <h4 class="m-b-0 font-16">Elite Admin</h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <span class="text-muted">May 14, 2018</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <label class="label label-warning">Draft</label>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <span class="text-muted">$95</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a href="{{route('view.project-details',$info->id)}}" class="label label-success label-rounded">View Details</a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}

{{--                            <tr>--}}
{{--                                <td>--}}
{{--                                    <div class="d-flex align-items-center">--}}
{{--                                        <div class="m-r-10">--}}
{{--                                            <a class="btn btn-circle btn-danger text-white">EA</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="">--}}
{{--                                            <h4 class="m-b-0 font-16">Elite Admin</h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <span class="text-muted">May 14, 2018</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <label class="label label-warning">Draft</label>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <span class="text-muted">$65</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a href="{{route('view.project-details',$info->id)}}" class="label label-success label-rounded">View Details</a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@endsection
