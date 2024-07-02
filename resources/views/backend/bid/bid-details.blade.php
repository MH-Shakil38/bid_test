@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid">
        <section>
            <div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Comment Row -->
                                        @if($bid->status == 0)
                                            <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#exampleModal"> Accept & Pay Now </button>
                                        @elseif($bid->status == 1)
                                            <button class="btn btn-info float-right" onclick="changeStatus({{$bid->id}},'BidProject',2)"> Submit </button>
                                        @elseif($bid->status == 2)
                                            <button class="btn btn-success float-right" onclick="changeStatus({{$bid->id}},'BidProject',3)"> Complete </button>
                                        @elseif($bid->status == 3)
                                            <button class="btn btn-light-info disabled float-right"> Completed </button>
                                        @elseif($bid->status == 4)
                                            <button class="btn btn-danger float-right"> Rejected.. </button>

                                        @endif

                                        <!-- Modal -->
                                        <div class="modal fade" style="background-color: unset;left:50%" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Bid Invoice</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4>Project Title: <span> {{$project->title}}</span></h4>
                                                        <table class="table table-borderless">
                                                            <thead>
                                                            <tr>
                                                                <th colspan="4">Owner Name</th>
                                                                <td>{{$project->user->full_name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="4">Bidder Name</th>
                                                                <td>{{$bid->user->full_name}}</td>
                                                            </tr>

                                                            <tr>
                                                                <th colspan="5">Project Price</th>
                                                                <td>{{$project->min_price}}$ - {{$project->max_price}}$</td>
                                                            </tr>

                                                            <tr>
                                                                <th colspan="5">Bid Price</th>
                                                                <td>{{$bid->fixed_rate}}</td>
                                                            </tr>

                                                            <tr>
                                                                <th colspan="5">Sit Commission</th>
                                                                <td>{{commission_fee()}}%</td>
                                                            </tr>

                                                            <tr class="table-success">
                                                                <th colspan="5">Total Payable</th>
                                                                <td>{{$bid->fixed_rate}}</td>
                                                            </tr>


                                                            </thead>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="{{route('bid.invoice',$bid->id)}}" class="btn btn-success">Accept & Pay Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h4>{{$bid->user->full_name}}</h4>
                                        <span class="text-muted">{{bid_date($bid->created_at)}}</span>
                                        <hr>
                                        {{--                                        <p class="project-hours pt-3"><span>Fixed</span> - Expert level -  More than 6 months, 300+ $ - Renewed 17 minutes ago</p>--}}
                                        <span class="mb-3 d-block">{!! $bid->cover_letter !!}</span>
                                        <p class="project-images"> </h4>

                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <style>
        img {
            max-width: 100%;
        }
    </style>
    <script>
        function changeStatus(id, model, value = null) {
            Swal.fire({
                title: "Are you sure?",
                text: "Do you want to change the status?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, change it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Send AJAX request
                    $.ajax({
                        type: 'GET',
                        url: '{{ route('change.status') }}',
                        data: {
                            id: id,
                            model: model,
                            status: value,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            // Handle success response
                            console.log(response);
                            // Show success message using SweetAlert
                            Swal.fire({
                                title: "Status Updated!",
                                text: response.success,
                                icon: "success",
                                confirmButtonColor: "#3085d6",
                                confirmButtonText: "OK"
                            });
                            setTimeout(function () {
                                location.reload();
                            }, 1000);
                        },
                        error: function (xhr, status, error) {
                            // Handle error response
                            console.error(xhr.responseText);
                        }
                    });
                } else {
                    checkbox.checked = !checkbox.checked;
                }
            });
        }
    </script>
@endsection
