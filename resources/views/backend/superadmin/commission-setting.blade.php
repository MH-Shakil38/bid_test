@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid edit-profile">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Commission</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-resposive">
                            <table class="table">
                                @if(isset($com))
                                    <tr>
                                        <td>Last Commission</td>
                                        <td><span class="font-weight-bold">${{$com->amount ??'--'}}</span></td>
                                        <td>{{\Carbon\Carbon::parse($com->created_at ?? now())->format('d-M-Y')}}</td>
                                        <td><a href="{{route('commission.edit',$com->id ?? '0')}}">Edit</a></td>
                                    </tr>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="mb-0">Commission setting</h3>
                    </div>
                    <div class="card-body">
                        @if(isset($commission))
                            <form action="{{route('commission.update',$commission->id)}}" method="post">
                                @method('PUT')
                                @else
                                    <form action="{{route('commission.store')}}" method="post">
                                        @endif
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-xs-6 col-md-6 col-sm-6">
                                                <label for=""><h4>Add Commission</h4></label>
                                                <input type="Add Category here" class="form-control" name="amount"
                                                       value="{{isset($commission) ? $commission->amount : ''}}" id=""/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-6 col-md-6 col-sm-6">
                                                <input type="submit" value="Submit" class="save-profile"/>
                                            </div>
                                        </div>
                                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
