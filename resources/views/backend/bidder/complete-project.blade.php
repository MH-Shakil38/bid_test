@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Search by Name</label>
                                        <input type="text" class="form-control" name="first_name" id="first_name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Search by Date</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Search by Status</label>
                                        <select class="form-control custom-select">
                                            @forelse(bid_status() as $info)
                                                <option value="{{$info['id']}}">{{$info['name']}}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
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
                            @forelse($projects as $info)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="m-r-10">
                                                <a class="btn btn-circle btn-danger text-white">EA</a>
                                            </div>
                                            <div class="">
                                                <h4 class="m-b-0 font-16">{{$info->name}}</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <label class="label label-danger">Park</label>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{bid_date($info->created_at)}}</span>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{bid_date($info->bid_end)}}</span>
                                    </td>
                                    <td>
                                        <span class="text-muted">${{$info->max_price}}</span>
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
    </div>
@endsection
