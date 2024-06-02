@forelse($projects as $project)
    <div class="col-lg-6">
        <div class="card bid-container-listing">
            <div class="card-body">
                <h4 class="card-title mb-0">
                    {{$project->title}}
                    <div id="round-disabled" class="raiting-container" style="cursor: pointer;">
                        <img alt="1" src="../assets/images/rating/star-on.png" title="bad">&nbsp;
                        <img alt="2" src="../assets/images/rating/star-on.png" title="poor">&nbsp;
                        <img alt="3" src="../assets/images/rating/star-on.png" title="regular">&nbsp;
                        <img alt="4" src="../assets/images/rating/star-off.png" title="good">&nbsp;
                        <img alt="5" src="../assets/images/rating/star-off.png" title="gorgeous">
                    </div>
                </h4>

                <div class="bid-option">
                    <span class="dots">...</span>
                    <ul>
                        <li><a href="javascript:void()">Edit</a></li>
                        <li><a href="javascript:void()">Delete</a></li>
                    </ul>
                </div>
                <div class="d-flex justify-content-between pt-3">
                                    <span class="text-muted">Project-add: <span
                                            class="font-weight-bold">{{bid_date($project->created_at)}}</span></span>
                    <span class="text-muted float-right">Total Bid: <span
                            class="font-weight-bold">{{bid_count($project->id)}}</span> </span>
                    <span class="text-muted float-right">Bid Ending Time: <span
                            class="font-weight-bold text-danger">{{bid_time($project->bid_end)}}</span> </span>
                </div>
                <p class="project-hours pt-3"><span>Fixed</span> - More than 6 months, 300$</p>

                <span class="mb-3 d-block four-line-text">{!! substr( $project->details , 0 ,400) !!}
                                        ....<a href="{{route('view.project-details',$project->id)}}">View Details </a>
                                      </span>
            </div>
        </div>
    </div>
@empty
    <div class="no-record" > <h2>No Record Fount</h2> </div>
@endforelse
