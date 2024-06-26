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
                                        @if($bid->status == 1)
                                          <button class="btn btn-info float-right"> Accepted</button>
                                        @elseif($bid->status == 2)
                                            <button class="btn btn-danger float-right" onclick="changeStatus({{$bid->id}},'BidProject',1)"> Rejected.. </button>
                                        @else
                                          <button class="btn btn-warning float-right" onclick="changeStatus({{$bid->id}},'BidProject',1)"> Pending.. </button>
                                        @endif

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
