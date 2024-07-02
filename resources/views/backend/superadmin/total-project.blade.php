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
                                        <label class="control-label">Search by title</label>
                                        <input type="text" class="form-control" name="title" id="title">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Search by Date</label>
                                        <input type="date" class="form-control" name="date" id="date">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Search by Status</label>
                                        <select class="form-control custom-select" name="status" id="status">
                                            <option disabled selected>All</option>
                                            @forelse(bid_status() as $bid)
                                                <option value="{{$bid['id']}}">{{$bid['name']}}</option>
                                            @empty
                                            @endforelse
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
                <h4>Projects</h4>
                <div class="card">
                    <div class="table-responsive">
                        <table class="table v-middle">
                            <thead>
                            <tr class="bg-light">
                                <th class="border-top-0">Projects Name</th>
                                <th class="border-top-0">Contract</th>
                                <th class="border-top-0">Budget</th>
                                <th class="border-top-0">Status</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                            </thead>
                            <tbody class="append-table">
                            @include('backend.project.search_ajax_table')
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function ajaxLoader(){
            return `<h2 class="text-center loader no-record"><div class="spinner-border text-success"></div> Data Fetching.....</h2>`;
        }
        $(document).ready(function() {
            function fetchProjects() {
                $('.append-table').html(ajaxLoader());
                var title = $('#title').val();
                var date = $('#date').val();
                var status = $('#status').val();
                var type = 'search';

                $.ajax({
                    url: '{{ route("total-project") }}',
                    type: 'GET',
                    data: {
                        title   : title,
                        date    : date,
                        status  : status,
                        type    : type,
                    },
                    success: function(data) {
                        $('.append-table').html(data);
                    }
                });
            }

            $('#title').on('keyup', fetchProjects);
            $('#date').on('change', fetchProjects);
            $('#status').on('change', fetchProjects);
        });
    </script>

@endsection
