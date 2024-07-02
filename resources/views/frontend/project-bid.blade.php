@extends('frontend.layouts.master')
@section('content')
    <section class="my-5" style="font-family: 'Open Sans', sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Job details</h4>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title mb-0">{{$info->title}}
                                        <a href="javascript:void">
                                            <i class="ti-heart float-right"></i>
                                        </a>
                                    </h4>
                                    <span class="text-muted">{{bid_date($info->created_at)}}</span>
{{--                                    <p class="project-hours pt-3"><span>Fixed</span> - More than 6 months, 300$</p>--}}
                                    <span class="mb-3 d-block four-line-text">{!! $info->details !!} </span>
                                    <a target="_blank" href="{{route('project.details',$info->id)}}">View job posting </a>
                                </div>
                            </div>
                            <form action="{{route('bid-project-store')}}" method="post">
                                @csrf
                                <input type="hidden" name="project_id" value="{{$info->id}}">
                                <div class="card mt-4">
                                    <div class="card-header">
                                        <h4>Terms</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row border-bottom">
                                            <div class="col-lg-6">
                                                <p><span class="font-weight-bold">Fixed Rate</span><br>
                                                    Total amount the client will see on your proposal</p>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input type="text" class="form-control fixed_rate" id="price"
                                                           aria-label="Amount (to the nearest dollar)"
                                                           name="fixed_rate" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row border-bottom mt-4">
                                            <div class="col-lg-6">
                                                <p><span class="font-weight-bold" >{{commission_fee()}}% Website Service Fee</span><br>
                                                    Total amount the client will see on your proposal</p>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input type="text" class="form-control" disabled value="{{commission_fee()}}"
                                                           aria-label="Amount (to the nearest dollar)" id="commission"  name="service_fee">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row border-bottom mt-4">
                                            <div class="col-lg-6">
                                                <p><span class="font-weight-bold">You'll Receive</span><br>
                                                    The estimated amount you'll receive after service fees
                                                    Depending on hours billed, amount shown may vary slightly due to
                                                </p>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                           aria-label="Amount (to the nearest dollar)" id="calculate" name="estimated_amount">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-4">
                                    <div class="card-header">
                                        <h4>Additional details </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p><span class="font-weight-bold">Cover Letter</span></p>
                                            </div>
                                            <div class="col-lg-12">
                                                <textarea class="form-control" style="height:300px" name="cover_letter"></textarea>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-lg-12">
                                                <p><span class="font-weight-bold">Files</span></p>
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="file" class="form-control" name="file"/>
                                                <p class="text-mute">You may attach up to 10 files under the size of
                                                    25MB
                                                    each. Include work samples or other documents to support your
                                                    application. Do not attach your résumé — your website profile is
                                                    automatically forwarded to the client with your proposal. </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <button type="submit" class="btn btn-primary">Submit a Proposal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <a href="#" class="btn btn-primary w-100 mb-3" data-toggle="modal" data-target="#exampleModal">Submit
                        Perposal</a>
                    <p>Required Connects to submit a proposal: 6</p>
                    <p>Available Connects: 102</p>
                    <p><span class="font-weight-bold">2 jobs posted</span>
                        0% hire rate, 1 open job
                    </p>
                    <p>Member since Aug 26, 2019 </p>
                    <a href="#">
                        <img class="img-fluid" src="images/banner.jpg"/>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Perposal Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Reserved Amount $5
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Pay Now</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('.fixed_rate').on('keyup', function() {
                var price = parseFloat($('#price').val()) || 0;
                var commission = parseFloat($('#commission').val()) || 0;
                var total = (commission / 100) * price;
                var total =  price - total;
                $('#calculate').val(total.toFixed(2));
            });
        });
    </script>
@endsection
