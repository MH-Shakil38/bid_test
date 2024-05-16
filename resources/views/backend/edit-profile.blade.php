@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid edit-profile">

        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-img">
                            <span style="background-image: url(../images/john.png)"></span>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/col-3-->

            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-head">
                            <form class="form" action="{{route('profile.update')}}" method="post" id="registrationForm">
                                @csrf
                                @method('PATCH')
                                <div class="form-group row">
                                    <div class="col-xs-6 col-md-6 col-sm-6">
                                        <label for="first_name"><h4>First name</h4></label>
                                        <input type="text" class="form-control" name="first_name"
                                               value="{{$user->first_name}}" id="first_name"/>
                                    </div>

                                    <div class="col-xs-6 col-md-6 col-sm-6">
                                        <label for="last_name"><h4>Last name</h4></label>
                                        <input type="text" class="form-control" name="last_name"
                                               value="{{$user->last_name}}" id="last_name"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-xs-6 col-md-6 col-sm-6">
                                        <label for="phone"><h4>Email</h4></label>
                                        <input type="text" class="form-control" name="email" value="{{$user->email}}"
                                               id="phone"/>
                                    </div>
                                    <div class="col-xs-6 col-md-6 col-sm-6">
                                        <label for="mobile"><h4>Phone number</h4></label>
                                        <input type="text" class="form-control" name="mobile" value="{{$user->mobile}}"
                                               id="mobile"/>
                                    </div>
                                </div>

                                {{--                                <div class="form-group row">--}}
                                {{--                                    <div class="col-xs-6 col-md-6 col-sm-6">--}}
                                {{--                                        <label for="email"><h4>City</h4></label>--}}
                                {{--                                        <input type="email" class="form-control" name="email" id="email"/>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="col-xs-6 col-md-6 col-sm-6">--}}
                                {{--                                        <label for="email"><h4>Province</h4></label>--}}
                                {{--                                        <input type="email" class="form-control" id="location"/>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}

                                <div class="form-group row">
                                    <div class="col-xs-6 col-md-6 col-sm-6">
                                        <label for="exampleFormControlSelect1">Select Country</label>
                                        <select class="form-control" name="country"
                                                id="exampleFormControlSelect1">
                                            <option
                                                {{isset($user) && $user->country == 'India' ? 'selected' : ''}} value="India">
                                                India
                                            </option>
                                            <option
                                                {{isset($user) && $user->country == 'USA' ? 'selected' : ''}} value="USA">
                                                USA
                                            </option>
                                            <option
                                                {{isset($user) && $user->country == 'UK' ? 'selected' : ''}} value="UK">
                                                UK
                                            </option>
                                            <option
                                                {{isset($user) && $user->country == 'New Zealand' ? 'selected' : ''}} value="New Zealand">
                                                New Zealand
                                            </option>
                                            <option
                                                {{isset($user) && $user->country == 'Australia' ? 'selected' : ''}} value="Australia">
                                                Australia
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-xs-6 col-md-6 col-sm-6">
                                        <label for="password2"><h4>address</h4></label>
                                        <input type="text" class="form-control" name="address"
                                               value="{{$user->address}}"/>
                                    </div>
                                </div>

                                <input type="submit" value="Save Profile" class="save-profile"/>
                            </form>
                        </div><!--/col-9-->
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="mb-0">Factor Authentication</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-xs-6 col-md-6 col-sm-6">
                                <label for="first_name"><h4>2FA Enabled</h4></label>
                            </div>

                            <div class="col-xs-6 col-md-6 col-sm-6">
                                <input type="checkbox" checked data-toggle="toggle">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="mb-0">Reset Password</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update.password')}}" method="post">
                            @csrf
                            @method('PUT')


                            <div class="form-group row">
                                <div class="col-xs-6 col-md-6 col-sm-6">
                                    <label for=""><h4>Old Password</h4></label>
                                    <input type="Password" class="form-control" name="old_password" id=""/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-6 col-md-6 col-sm-6">
                                    <label for=""><h4>New Password</h4></label>
                                    <input type="Password" class="form-control" name="password" id=""/>
                                </div>
                                <div class="col-xs-6 col-md-6 col-sm-6">
                                    <label for=""><h4>Confirm New Password</h4></label>
                                    <input type="Password" class="form-control" name="password_confirmation" id=""/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-6 col-md-6 col-sm-6">
                                    <input type="submit" value="Update Password" class="save-profile"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
