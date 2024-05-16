@extends('frontend.layouts.master')
@section('content')
    <section class="my-5" style="font-family: 'Open Sans', sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Comment Row -->

                                    <h4 class="card-title mb-0">{{$info->title}}
                                        <a href="javascript:void">
                                            <i class="ti-heart float-right"></i>
                                        </a>
                                    </h4>
                                    <span class="text-muted">{{bid_date($info->created_at)}}</span>
                                    <div class="d-flex justify-content-between pt-3">
                                        <span class="text-muted">Project-add: <span class="font-weight-bold">{{bid_date($info->bid_date)}}</span></span>
                                        <span class="text-muted float-right">Total Bid: <span class="font-weight-bold">{{bid_count($info->id)}}</span> </span>
                                        <span class="text-muted float-right">Bid Ending Time: <span class="font-weight-bold text-danger">{{bid_time($info->bid_end)}}</span> </span>
                                    </div>
                                    <p class="project-hours pt-3"><span>Fixed</span> - More than 6 months, 300$</p>
                                    <span class="mb-3 d-block details">{!! $info->details !!}</span>
                                    <p class="project-images">
                                        <a class="example-image-link" href="{{asset('/')}}images/ff.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="{{asset('/')}}/images/ff.jpg" alt=""/></a>
                                        <a class="example-image-link" href="{{asset('/')}}images/ff.jpg" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="example-image" src="{{asset('/')}}/images/ff.jpg" alt="" /></a>
                                        <a class="example-image-link" href="{{asset('/')}}images/ff.jpg" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="example-image" src="{{asset('/')}}/images/ff.jpg" alt="" /></a>
                                        <a class="example-image-link" href="{{asset('/')}}images/ff.jpg" data-lightbox="example-set" data-title="Click anywhere outside the image or the X to the right to close."><img class="example-image" src="{{asset('/')}}/images/ff.jpg" alt="" /></a>
                                        <a class="example-image-link" href="{{asset('/')}}images/ff.jpg" data-lightbox="example-set" data-title="Click anywhere outside the image or the X to the right to close."><img class="example-image" src="{{asset('/')}}/images/ff.jpg" alt="" /></a>
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
                                    <ul class="pl-3 mt-3">
                                        <li class="font-weight-bold mb-0">Activity on this job</li>
                                        <li>Proposals: Less than 5 </li>
                                        <li>Interviewing: 0 </li>
                                        <li>Invites sent: 0 </li>
                                    </ul>
                                    <a href="{{route('project.bid',$info->id)}}" class="btn btn-primary w-100 mb-3">Bid Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <a href="{{route('project.bid',$info->id)}}" class="btn btn-primary w-100 mb-3">Bid Project</a>
                    <a href="{{route('project.bid',$info->id)}}" class="btn btn-warning w-100 mb-3">Ask Question</a>
                    <p>Available Connects: 102</p>
                    <p><span class="font-weight-bold">2 jobs posted</span>
                        0% hire rate, 1 open job
                    </p>
                    <p>Member since Aug 26, 2019 </p>
                    <a href="#">
                        <img class="img-fluid" src="images/banner.jpg" />
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div class="chat-box">
        <div class="msg_history">
            <div class="incoming_msg">
                <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="received_msg">
                    <div class="received_withd_msg">
                        <p>Test which is a new approach to have all
                            solutions</p>
                        <span class="time_date"> 11:01 AM    |    June 9</span></div>
                </div>
            </div>
            <div class="outgoing_msg">
                <div class="sent_msg">
                    <p>Test which is a new approach to have all
                        solutions</p>
                    <span class="time_date"> 11:01 AM    |    June 9</span> </div>
            </div>
            <div class="incoming_msg">
                <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="received_msg">
                    <div class="received_withd_msg">
                        <p>Test, which is a new approach to have</p>
                        <span class="time_date"> 11:01 AM    |    Yesterday</span></div>
                </div>
            </div>
            <div class="outgoing_msg">
                <div class="sent_msg">
                    <p>Apollo University, Delhi, India Test</p>
                    <span class="time_date"> 11:01 AM    |    Today</span> </div>
            </div>
            <div class="incoming_msg">
                <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="received_msg">
                    <div class="received_withd_msg">
                        <p>We work directly with our designers and suppliers,
                            and sell direct to you, which means quality, exclusive
                            products, at a price anyone can afford.</p>
                        <span class="time_date"> 11:01 AM    |    Today</span></div>
                </div>
            </div>
        </div>
        <div class="type_msg">
            <div class="input_msg_write">
                <input type="text" class="write_msg" placeholder="Type a message">
            </div>
            <span>
        <a href="="><i class="fa fa-file-o"></i></a>
        <a href="="><i class="fa fa-file-image-o"></i></a>
      </span>
            <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
        </div>
    </div>
@endsection
