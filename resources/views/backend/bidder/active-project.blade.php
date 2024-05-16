@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Search by Name</label>
                                        <input type="text" class="form-control" name="first_name" id="first_name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Search by Date</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Search by Status</label>
                                        <select class="form-control custom-select">
                                            <option>Active</option>
                                            <option>Draft</option>
                                            <option>Complete</option>
                                            <option>Reject</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h4>Active Projects</h4>
                <div class="card">
                    <div class="table-responsive">
                        <table class="table v-middle">
                            <thead>
                            <tr class="bg-light">
                                <th class="border-top-0">Projects Name</th>
                                <th class="border-top-0">Contract</th>
                                <th class="border-top-0">Start Date</th>
                                <th class="border-top-0">Budget</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10">
                                            <a class="btn btn-circle btn-danger text-white">EA</a>
                                        </div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Elite Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <label class="label label-danger">Park</label>
                                </td>
                                <td>
                                    <span class="text-muted">May 14, 2020</span>
                                </td>
                                <td>
                                    <span class="text-muted">$250</span>
                                </td>
                                <td>
                                    <a href="view-details.html" class="label label-success label-rounded">View Details</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10">
                                            <a class="btn btn-circle btn-danger text-white">EA</a>
                                        </div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Elite Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <label class="label label-danger">Bedroom</label>
                                </td>
                                <td>
                                    <span class="text-muted">May 14, 2019</span>
                                </td>
                                <td>
                                    <span class="text-muted">$70</span>
                                </td>
                                <td>
                                    <a href="view-details.html" class="label label-success label-rounded">View Details</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10">
                                            <a class="btn btn-circle btn-danger text-white">EA</a>
                                        </div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Elite Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <label class="label label-danger">Park</label>
                                </td>
                                <td>
                                    <span class="text-muted">May 14, 2020</span>
                                </td>
                                <td>
                                    <span class="text-muted">$70</span>
                                </td>
                                <td>
                                    <a href="view-details.html" class="label label-success label-rounded">View Details</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10">
                                            <a class="btn btn-circle btn-danger text-white">EA</a>
                                        </div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Elite Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <label class="label label-danger">Park</label>
                                </td>
                                <td>
                                    <span class="text-muted">May 14, 2020</span>
                                </td>
                                <td>
                                    <span class="text-muted">$120</span>
                                </td>
                                <td>
                                    <a href="view-details.html" class="label label-success label-rounded">View Details</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
