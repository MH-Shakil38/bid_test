@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid edit-profile">
        <div class="row">
            <div class="col-sm-8">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="mb-0">Notofication Send</h3>
                    </div>
                    <div class="card-body">
                        <form method="Post" action="{{route('notifications.store')}}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for=""><h4>Select Notification to</h4></label>
                                    <select class="form-control custom-select" name="notification_to">
                                        <option value="1">Bidder</option>
                                        <option value="2">Home Owner</option>
                                        <option value="3">To All</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea rows="10" class="form-control" name="detail"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="submit" value="Send" class="save-profile"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
