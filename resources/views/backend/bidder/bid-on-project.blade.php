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
                                        <label class="control-label">Search by Date</label>
                                        <input type="date" class="form-control" name="date" id="date">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Search by Status</label>
                                        <select class="form-control custom-select" name="status" id="status">
                                            <option disabled selected>All</option>
                                            @forelse(bid_status() as $bid)
                                                <option value="{{$bid['id']}}">{{$bid['name']}}</option>
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
                <h4>Projects</h4>
                <div class="card">
                    <div class="table-responsive">
                        <table class="table v-middle">
                            <thead>
                            <tr class="bg-light">
                                <th class="border-top-0">Projects Name</th>
                                <th class="border-top-0">Contract</th>
                                <th class="border-top-0">Created Date</th>
                                <th class="border-top-0">Price</th>
                                <th class="border-top-0">Budget</th>
                                <th class="border-top-0">Duration</th>
                                <th class="border-top-0">Reviews/Rating</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                            </thead>
                            <tbody class="append-table">
                            @forelse($projects as $info)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="m-r-10">
                                                <a class="btn btn-circle btn-danger text-white">EA</a>
                                            </div>
                                            <div class="">
                                                <h4 class="m-b-0 font-16">{{$info->project->title}}</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <label class="label label-danger">{{$info->project->contract}}</label>
                                    </td>

                                    <td>
                                        {{\Carbon\Carbon::parse($info->project->created_at)->format('d-M-Y')}}
                                    </td>
                                    <td>
                                        {{$info->price}}
                                    </td>
                                    <td>
                                        <span class="text-muted">min:${{$info->project->min_price}}, Max: ${{$info->max_price}} </span>
                                    </td>
                                    <td>
                                        {{$info->project->duration}}
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
                                        <a href="{{route('bidder.bid.details',$info->id)}}" class="btn btn-info">Details</a>
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
    <script>
        function ajaxLoader(){
            return `<h2 class="text-center loader no-record"><div class="spinner-border text-success"></div> Data Fetching.....</h2>`;
        }
        $(document).ready(function() {
            function fetchProjects() {
                $('.append-table').html(ajaxLoader());
                var status = $('#status').val();
                var type = 'search';

                $.ajax({
                    url: '{{ route("bidder.dashboard") }}',
                    type: 'GET',
                    data: {

                        status  : status,
                        type    : type,
                    },
                    success: function(data) {
                        $('.append-table').html(data);
                    }
                });
            }

            $('#title').on('keyup', fetchProjects);
            $('#date').on('change', fetchProjects);
            $('#status').on('change', fetchProjects);
        });
    </script>
@endsection
