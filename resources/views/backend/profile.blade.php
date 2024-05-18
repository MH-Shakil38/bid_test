@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid emp-profile">
        <form action="{{route('change.profile.picture')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                    <div class="col-md-3">
                        <div class="profile-img">
                            <span id="imagePreview" style="background-image: url({{auth()->user()->getFirstMediaUrl("*") ?? asset('images/logo-icon.png')}})"></span>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="profile_picture" id="imageInput" accept="image/*"/>
                            </div>
                            <button class="file btn btn-lg btn-success" id="upload_bth" style="display: none">upload Image</button>

                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="profile-head">
                            <h3 class="m-b-0">{{$user->full_name}}
                                <a class="profile-edit-btn" href="{{route('profile.edit')}}">
                                    <i class="mdi mdi-border-color"></i> Edit Profile
                                </a>
                            </h3>
                            <div class="user-email">
                                <span>{{$user->email}}</span>
                            </div>
                            <div id="round-disabled" class="rating">
                                <img width="15" alt="1" src="../assets/images/rating/star-on.png" title="bad">&nbsp;
                                <img width="15" alt="2" src="../assets/images/rating/star-on.png" title="poor">&nbsp;
                                <img width="15" alt="3" src="../assets/images/rating/star-on.png" title="regular">&nbsp;
                                <img width="15" alt="4" src="../assets/images/rating/star-off.png" title="good">&nbsp;
                                <img width="15" alt="5" src="../assets/images/rating/star-off.png" title="gorgeous">
                            </div>

                            <span class="m-b-15 bio-block d-block">Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look. Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</span>

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="skills-tab" data-toggle="tab" href="#skills" role="tab" aria-controls="skills" aria-selected="false">Skills</a>
                                </li>
                            </ul>

                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>First Name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$user->first_name}}</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Last Name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$user->last_name}}</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Username</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$user->full_name}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$user->email}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Address:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$user->address ?? '---'}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Experience</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>10 year's</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Total Earning</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>1000$</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Total Projects</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>10</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Package </label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Active</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="label label-primary">Park</label>
                                            <label class="label label-primary">Bedroom</label>
                                            <label class="label label-primary">Drawing Room</label>
                                            <label class="label label-primary">Roof</label>
                                            <label class="label label-primary">Park</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </form>

        <div class="col-md-12 work-history-section">
            <h3>Work History</h3>
            <ul class="nav nav-tabs" id="profile" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="profile-one" data-toggle="tab" href="#one" role="tab" aria-controls="home" aria-selected="true">COMPLETED JOBS (2)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tow" data-toggle="tab" href="#tabTow" role="tab" aria-controls="tabTow" aria-selected="false">IN PROGRESS (5)</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="profile-one">
                    <div class="mb-3 work-post-list">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tongue and wood ceiling
                                    <a href="javascript:void">
                                        <i class="ti-heart float-right"></i>
                                    </a>
                                </h4>
                                <div id="round-disabled" class="rating">
                                    <img width="15" alt="1" src="../assets/images/rating/star-on.png" title="bad">&nbsp;
                                    <img width="15" alt="2" src="../assets/images/rating/star-on.png" title="poor">&nbsp;
                                    <img width="15" alt="3" src="../assets/images/rating/star-on.png" title="regular">&nbsp;
                                    <img width="15" alt="4" src="../assets/images/rating/star-off.png" title="good">&nbsp;
                                    <img width="15" alt="5" src="../assets/images/rating/star-off.png" title="gorgeous">
                                </div>

                                <p class="project-hours">
                                    <span>Fixed</span> - Entry level -  More than 6 months, <span class="text-primary">300$+</span>
                                </p>

                                <span class="mb-3 d-block">Many basement renovation contractors offer financing plans for your renovation projects. Therefore, if you’re overwhelmed with the costs of renovating a basement, it’s good to do your research in advance just to learn about your payment options...</span>
                                <div class="d-flex justify-content-between">

                                    <span class="text-muted">Project-add:
                                        <span class="font-weight-bold">April 24, 2020</span>
                                    </span>

                                    <span class="text-muted float-right">
                                        Total Bid: <span class="font-weight-bold">3</span>
                                    </span>
                                    <span class="text-muted float-right">
                                        Bid Ending Time:
                                        <span class="font-weight-bold text-danger">3h:30m</span>
                                    </span>

                                </div>

                                <a href="#" class="view-detail-btn">View Details</a>

                            </div>
                        </div>
                    </div>

                    <div class="mb-3 work-post-list">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tongue and wood ceiling
                                    <a href="javascript:void">
                                        <i class="ti-heart float-right"></i>
                                    </a>
                                </h4>
                                <div id="round-disabled" class="rating">
                                    <img width="15" alt="1" src="../assets/images/rating/star-on.png" title="bad">&nbsp;
                                    <img width="15" alt="2" src="../assets/images/rating/star-on.png" title="poor">&nbsp;
                                    <img width="15" alt="3" src="../assets/images/rating/star-on.png" title="regular">&nbsp;
                                    <img width="15" alt="4" src="../assets/images/rating/star-off.png" title="good">&nbsp;
                                    <img width="15" alt="5" src="../assets/images/rating/star-off.png" title="gorgeous">
                                </div>

                                <p class="project-hours">
                                    <span>Fixed</span> - Entry level -  More than 6 months, <span class="text-primary">300$+</span>
                                </p>

                                <span class="mb-3 d-block">Many basement renovation contractors offer financing plans for your renovation projects. Therefore, if you’re overwhelmed with the costs of renovating a basement, it’s good to do your research in advance just to learn about your payment options...</span>
                                <div class="d-flex justify-content-between">
                                    <span class="text-muted">Project-add: <span class="font-weight-bold">April 24, 2020</span></span>
                                    <span class="text-muted float-right">Total Bid: <span class="font-weight-bold">3</span> </span>
                                    <span class="text-muted float-right">Bid Ending Time: <span class="font-weight-bold text-danger">3h:30m</span> </span>

                                </div>
                                <a href="#" class="view-detail-btn">View Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 work-post-list">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tongue and wood ceiling
                                    <a href="javascript:void">
                                        <i class="ti-heart float-right"></i>
                                    </a>
                                </h4>
                                <div id="round-disabled" class="rating">
                                    <img width="15" alt="1" src="../assets/images/rating/star-on.png" title="bad">&nbsp;
                                    <img width="15" alt="2" src="../assets/images/rating/star-on.png" title="poor">&nbsp;
                                    <img width="15" alt="3" src="../assets/images/rating/star-on.png" title="regular">&nbsp;
                                    <img width="15" alt="4" src="../assets/images/rating/star-off.png" title="good">&nbsp;
                                    <img width="15" alt="5" src="../assets/images/rating/star-off.png" title="gorgeous">
                                </div>

                                <p class="project-hours">
                                    <span>Fixed</span> - Entry level -  More than 6 months, <span class="text-primary">300$+</span>
                                </p>

                                <span class="mb-3 d-block">Many basement renovation contractors offer financing plans for your renovation projects. Therefore, if you’re overwhelmed with the costs of renovating a basement, it’s good to do your research in advance just to learn about your payment options...</span>
                                <div class="d-flex justify-content-between">
                                    <span class="text-muted">Project-add: <span class="font-weight-bold">April 24, 2020</span></span>
                                    <span class="text-muted float-right">Total Bid: <span class="font-weight-bold">3</span> </span>
                                    <span class="text-muted float-right">Bid Ending Time: <span class="font-weight-bold text-danger">3h:30m</span> </span>

                                </div>
                                <a href="#" class="view-detail-btn">View Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 work-post-list">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tongue and wood ceiling
                                    <a href="javascript:void">
                                        <i class="ti-heart float-right"></i>
                                    </a>
                                </h4>
                                <div id="round-disabled" class="rating">
                                    <img width="15" alt="1" src="../assets/images/rating/star-on.png" title="bad">&nbsp;
                                    <img width="15" alt="2" src="../assets/images/rating/star-on.png" title="poor">&nbsp;
                                    <img width="15" alt="3" src="../assets/images/rating/star-on.png" title="regular">&nbsp;
                                    <img width="15" alt="4" src="../assets/images/rating/star-off.png" title="good">&nbsp;
                                    <img width="15" alt="5" src="../assets/images/rating/star-off.png" title="gorgeous">
                                </div>

                                <p class="project-hours">
                                    <span>Fixed</span> - Entry level -  More than 6 months, <span class="text-primary">300$+</span>
                                </p>

                                <span class="mb-3 d-block">Many basement renovation contractors offer financing plans for your renovation projects. Therefore, if you’re overwhelmed with the costs of renovating a basement, it’s good to do your research in advance just to learn about your payment options...</span>
                                <div class="d-flex justify-content-between">
                                    <span class="text-muted">Project-add: <span class="font-weight-bold">April 24, 2020</span></span>
                                    <span class="text-muted float-right">Total Bid: <span class="font-weight-bold">3</span> </span>
                                    <span class="text-muted float-right">Bid Ending Time: <span class="font-weight-bold text-danger">3h:30m</span> </span>

                                </div>
                                <a href="#" class="view-detail-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="tabTow" role="tabpanel" aria-labelledby="profile-tow">
                    <div class="mb-3 work-post-list">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tongue and wood ceiling
                                    <a href="javascript:void">
                                        <i class="ti-heart float-right"></i>
                                    </a>
                                </h4>
                                <div id="round-disabled" class="rating">
                                    <img width="15" alt="1" src="../assets/images/rating/star-on.png" title="bad">&nbsp;
                                    <img width="15" alt="2" src="../assets/images/rating/star-on.png" title="poor">&nbsp;
                                    <img width="15" alt="3" src="../assets/images/rating/star-on.png" title="regular">&nbsp;
                                    <img width="15" alt="4" src="../assets/images/rating/star-off.png" title="good">&nbsp;
                                    <img width="15" alt="5" src="../assets/images/rating/star-off.png" title="gorgeous">
                                </div>

                                <p class="project-hours">
                                    <span>Fixed</span> - Entry level -  More than 6 months, <span class="text-primary">300$+</span>
                                </p>

                                <span class="mb-3 d-block">Many basement renovation contractors offer financing plans for your renovation projects. Therefore, if you’re overwhelmed with the costs of renovating a basement, it’s good to do your research in advance just to learn about your payment options...</span>
                                <div class="d-flex justify-content-between">
                                    <span class="text-muted">Project-add: <span class="font-weight-bold">April 24, 2020</span></span>
                                    <span class="text-muted float-right">Total Bid: <span class="font-weight-bold">3</span> </span>
                                    <span class="text-muted float-right">Bid Ending Time: <span class="font-weight-bold text-danger">3h:30m</span> </span>

                                </div>
                                <a href="#" class="view-detail-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('imageInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const imageUrl = e.target.result;
                    document.getElementById('imagePreview').style.backgroundImage = `url(${imageUrl})`;
                    $("#upload_bth").css("display", "block");
                };
                reader.readAsDataURL(file);
            }

        });

    </script>
@endsection
