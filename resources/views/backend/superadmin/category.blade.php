@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid edit-profile">
        <div class="row">
            <div class="col-lg-3">
                <div class="filter card mt-3">
                    <div class="card-header">
                        <h3 class="mb-0">My Categories</h3>
                    </div>
                    <div class="card-body">
                        <ul>
                            @forelse($categories as $info)
                                <li>
                                    <a href="#">{{$info->name}}</a>
                                </li>
                            @empty
                            @endforelse

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="mb-0">My Categories</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('categories.store')}}" method="post">
                            @csrf
                            @method('POST')

                            <div class="form-group row">
                                <div class="col-xs-6 col-md-6 col-sm-6">
                                    <label for=""><h4>Add Categories Anme</h4></label>
                                    <input type="Add Category here" class="form-control" name="name" id="" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-6 col-md-6 col-sm-6">
                                    <input type="submit" value="Add New Category" class="save-profile" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
