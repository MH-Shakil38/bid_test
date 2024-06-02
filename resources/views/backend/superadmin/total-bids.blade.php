@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="filter-container">
                    <div class="">
                        <label>Sort by:</label>
                        <select class="form-control custom-select" id="bid_status" onchange="bid_status(this)">
                            <option disabled selected>All</option>
                            @forelse(bid_status() as $bid)
                                <option value="{{$bid['id']}}">{{$bid['name']}}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>
                    <span class="total-bid-lable">Total Bid ({{count($projects)}})</span>
                    <a class="download-csv-btn" href="javascript:void()">Download CSV</a>
                </div>

                <h4>Active Bids</h4>
                <div class="row" id="ajax-bid">
                   @include('backend.superadmin.bid-project.total-bids-ajax')
                </div>
            </div>
        </div>
    </div>


    <script>
        function ajaxLoader(){
            return `<h2 class="text-center loader no-record"><div class="spinner-border text-success"></div> Data Fetching.....</h2>`;
        }
        function bid_status() {
            $('#ajax-bid').html(ajaxLoader());
            let value = $('#bid_status').val()
            $.ajax({
                method: "get",
                url: window.location.href+"?status="+value,
                dataType: "JSON",
                success: function (response) {

                    console.log("Response", response.data);
                    $('#ajax-bid').html(response.data);
                }
            });
        }
    </script>
@endsection
