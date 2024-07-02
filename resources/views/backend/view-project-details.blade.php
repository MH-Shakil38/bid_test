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
            @if(isset($activeBid) && $activeBid !=null)
                <h4>Active Bid's</h4>
                <a href="{{route('bid.details',$activeBid->id)}}" class="text-decoration-none" style="color: #0b0b0b">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-success-light">
                                <div class="card-body ">
                                    <!-- Comment Row -->
                                    <h4 class="card-title mb-2">{{ $activeBid->user->full_name ?? ''}}
                                        <div class="bid-option">
                                            @if($activeBid->status == 1)
                                                <button class="btn btn-info float-right" onclick="changeStatus({{$activeBid->id}},'BidProject',2)"> Submit </button>
                                            @elseif($activeBid->status == 2)
                                                <button class="btn btn-success float-right"> Complete </button>
                                            @elseif($activeBid->status == 3)
                                                <button class="btn btn-light-info disabled float-right"> Completed </button>
                                            @elseif($activeBid->status == 4)
                                                <button class="btn btn-danger float-right"> Rejected.. </button>
                                            @endif
                                        </div>
                                    </h4>
                                    <span class="text-muted">{{bid_date($activeBid->created_at)}}</span>
                                    <span class="mb-3 d-block">{!! $activeBid->cover_letter !!}</span>


                                </div>
                            </div>
                        </div>
                </div>
                </a>
            @endif
            <h4>All Bid's</h4>
            <div class="row">
                @forelse($project->bids as $bid)
                    @if($bid->status != 1)
                    <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <!-- Comment Row -->
                            @if($bid->status == 0)
                                <button class="btn btn-info float-right" onclick="changeStatus({{$bid->id}},'BidProject',1)"> Accept </button>
                            @elseif($bid->status == 4)
                                <button class="btn btn-success float-right"> Rejected </button>
                            @endif

                            <span class="text-muted">{{bid_date($bid->created_at)}}</span>
                            <span class="mb-3 d-block">{!! $bid->cover_letter !!}</span>
                            <a href="{{route('bid.details',$bid->id)}}" class="text-decoration-none float-right" style="color: #0b0b0b">Details...</a>

                        </div>
                    </div>
                </div>
                    @endif
                @empty
                    <div class="">
                    <hr>
                    <h4 class="text-center">No bid Available</h4>
                    </div>
                @endforelse
            </div>
        </section>
    </div>
     <style>
         img{
             max-width: 100%;
         }
     </style>
    <script>
        function changeStatus(id, model,value = null) {
            alert()

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
                            setTimeout(function() {
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
