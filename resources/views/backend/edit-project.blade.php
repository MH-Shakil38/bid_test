@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid">
        <section>
            <div>
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Update Project</h4>
                    </div>
                </div>
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('projects.update',$project->id)}}" method="POST" enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Project Title</label>
                                                    <input type="text" id="firstName" required name="title" class="form-control" value="{{$project->title}}"/>
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
                                                            <option value="{{$info->id}}" @if($project->category_id == $info->id) selected @endif>{{$info->name}}</option>
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
                                                                   aria-describedby="basic-addon1"  value="{{$project->min_price}}">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="number" name="max_price" class="form-control"
                                                                   placeholder="Min Price" aria-label="price"
                                                                   aria-describedby="basic-addon1"  value="{{$project->max_price}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Project Due Date</label>
                                                    <input type="date" class="form-control" name="due_date" value="{{$project->due_date}}">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Bid End Date</label>
                                                    <input type="datetime-local" name="bid_end" class="form-control"  value="{{$project->bid_end}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Contract</label>
                                                    <input type="text" class="form-control" name="contract"  value="{{$project->contract}}">
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="card-title m-t-40">Project Description</h5>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                            <textarea cols="80" id="testedit" name="details" rows="10" data-sample="1"
                                                      data-sample-short>{{$project->details}}
                                            </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @if(auth()->user()->user_type == 1)
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Status</label>
                                                    <select name="status" class="form-control"
                                                            data-placeholder="Update Status" tabindex="1">
                                                        <option value="0" @if($project->status == 0) selected @endif>Pending</option>
                                                        <option value="1" @if($project->status == 1) selected @endif>Active</option>
                                                        <option value="2" @if($project->status == 2) selected @endif>Complete</option>
                                                        <option value="3" @if($project->status == 3) selected @endif>Rejected</option>
                                                        <option value="4" @if($project->status == 4) selected @endif>Draft</option>

                                                    </select>
                                                    @error('status')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            @endif
                                            <div class="col-md-12">
                                                <div class="card text-center pt-3">
                                                    <div class="card-body" style="height:90px">
                                                        <input type="file" name="images[]" multiple>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions mt-4">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Update</button>
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
