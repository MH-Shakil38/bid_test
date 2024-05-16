@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid">

        <section>
            <div>
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Create Project</h4>
                    </div>
                </div>
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('projects.store')}}" method="post">
                                    @csrf
                                    <div class="form-body">
                                        <h5 class="card-title">About Project</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Project Title</label>
                                                    <input type="text" id="firstName" required name="title" class="form-control"/>
                                                    @error('title')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Category</label>
                                                    <select name="category_id" class="form-control"
                                                            data-placeholder="Choose a Category" tabindex="1">
                                                        @forelse($categories as $info)
                                                            <option value="{{$info->id}}">{{$info->name}}</option>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                    @error('category_id')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Budget</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="number" name="min_price" class="form-control"
                                                                   placeholder="Min Price" aria-label="price"
                                                                   aria-describedby="basic-addon1">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="number" name="max_price" class="form-control"
                                                                   placeholder="Min Price" aria-label="price"
                                                                   aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Project Due Date</label>
                                                    <input type="date" class="form-control" name="due_date">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Bid End Date</label>
                                                    <input type="datetime-local" name="bid_end" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Contract</label>
                                                    <input type="text" class="form-control" name="contract">
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="card-title m-t-40">Project Description</h5>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                            <textarea cols="80" id="testedit" name="details" rows="10" data-sample="1"
                                                      data-sample-short>
                                            </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <div class="card text-center pt-3">
                                                    <div class="card-body" style="height:90px">
                                                        Upload image here
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions mt-4">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Publish
                                        </button>
                                        <a href="ongoing-projects.html" class="btn btn-success"> <i class="fa fa-check"></i>
                                            Save as a Draft</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
        </section>
    </div>
@endsection
