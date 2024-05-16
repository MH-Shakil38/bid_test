@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid edit-profile">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="mb-0">Add Staff</h3>
                    </div>
                    <div class="card-body">
                        @if(isset($user))
                            <form method="post" action="{{route('users.update',$user->id)}}">
                                @method('PUT')
                                @else
                                    <form method="post" action="{{route('users.store')}}">
                                        @endif
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label for=""><h4>First Name</h4></label>
                                                <input type="text" class="form-control"
                                                       value="{{$user->first_name ?? old('first_name')}}"
                                                       name="first_name" id=""/>
                                            </div>
                                            <div class="col-md-4">
                                                <label for=""><h4>Last Name</h4></label>
                                                <input type="text" class="form-control" name="last_name"
                                                       value="{{$user->last_name ?? old('last_name')}}" id=""/>
                                            </div>
                                            <div class="col-md-4">
                                                <label for=""><h4>Email</h4></label>
                                                <input type="email" class="form-control" name="email"
                                                       value="{{$user->email ?? old('email')}}" id=""/>
                                            </div>

                                            <div class="col-md-4">
                                                <label for=""><h4>Mobile</h4></label>
                                                <input type="text" class="form-control" name="mobile"
                                                       value="{{$user->mobile ?? old('mobile')}}" id=""/>
                                            </div>

                                            <div class="col-md-4 col-sm-12">
                                                <label>Create Password</label>
                                                <input type="password" class="form-control" name="password"
                                                       maxlength="150"
                                                       size="45"/>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label>Confirm Password</label>
                                                <input type="password" class="form-control" name="password_confirmation"
                                                       maxlength="150" size="45"/>
                                            </div>


                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
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
                                            </div>


                                            <div class="col-md-4">
                                                <label for=""><h4>Select Permission for</h4></label>
                                                <select class="form-control custom-select" name="user_type">
                                                    <option
                                                        value="1" {{isset($user) && $user->user_type == 1 ? 'selected' : ''}}>
                                                        Full
                                                    </option>
                                                    <option
                                                        value="2" {{isset($user) && $user->user_type == 2 ? 'selected' : ''}}>
                                                        Bidder
                                                    </option>
                                                    <option
                                                        value="3" {{isset($user) && $user->user_type == 3 ? 'selected' : ''}}>
                                                        Home Owner
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label>Address</label>
                                                <textarea name="address" class="form-control"
                                                          rows="3"> {{$user->address ?? ''}} </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-6 col-md-6 col-sm-6">
                                                <input type="submit" value="Add New Staff" class="save-profile"/>
                                            </div>
                                        </div>
                                    </form>
                                    @if(isset($user))
                                        <div class="form-group">
                                            <div class="col-xs-6 col-md-6 col-sm-6">
                                                <a href="{{route('staff')}}" class="btn btn-warning">Cancel</a>
                                            </div>
                                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Staff Listing</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Name</th>
                                    <th>Date Join</th>
                                    <th>Role Assigned</th>
                                    <th>Actioned</th>
                                </tr>
                                @forelse($users as $info)
                                    <tr>
                                        <td>{{$info->first_name . ' ' .$info->last_name}}</td>
                                        <td>{{\Carbon\Carbon::parse($info->created_at)->format('d-M-Y')}}</td>
                                        <td><span class="label
                                    {{$info->user_type == 1 ? 'label-primary' : ($info->user_type == 1 ? 'label-info' : 'label-danger')}}">{{$info->type}}</span>
                                        </td>
                                        <td>
                                            @if(isset($user) && $user->id == $info->id)
                                                <span class="label label-danger">updating...</span>
                                            @else
                                                {{--                                            <a href="#" data-toggle="modal" data-target="#exampleModal">Edit</a>--}}
                                                <a href="{{route('users.edit',$info->id)}}"
                                                   class="btn btn-primary">Edit</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"--}}
    {{--         aria-hidden="true">--}}
    {{--        <div class="modal-dialog">--}}
    {{--            <div class="modal-content">--}}
    {{--                <div class="modal-header">--}}
    {{--                    <h5 class="modal-title" id="exampleModalLabel">Edit Staff</h5>--}}
    {{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
    {{--                        <span aria-hidden="true">&times;</span>--}}
    {{--                    </button>--}}
    {{--                </div>--}}
    {{--                <div class="modal-body">--}}
    {{--                    <div class="form-group row">--}}
    {{--                        <div class="col-md-4">--}}
    {{--                            <label for=""><h4>Name</h4></label>--}}
    {{--                            <input type="Add Category here" class="form-control" name="" id=""/>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-4">--}}
    {{--                            <label for=""><h4>Select Permission for</h4></label>--}}
    {{--                            <select class="form-control custom-select">--}}
    {{--                                <option >Full</option>--}}
    {{--                                <option>Bidder</option>--}}
    {{--                                <option>Home Owner</option>--}}
    {{--                            </select>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="form-group row">--}}
    {{--                        <div class="col-xs-6 col-md-6 col-sm-6">--}}
    {{--                            <input type="submit" value="Add New Category" class="save-profile"/>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="modal-footer">--}}
    {{--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
    {{--                    <button type="button" class="btn btn-primary">Save changes</button>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

@endsection
