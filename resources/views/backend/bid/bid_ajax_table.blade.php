@forelse($projects as $info)
    <tr>
        <td>
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                    <a class="btn btn-circle btn-danger text-white">EA</a>
                </div>
                <div class="">
                    <h4 class="m-b-0 font-16">{{$info->project->title}}</h4>
                </div>
            </div>
        </td>
        <td>
            <label class="label label-danger">{{$info->project->contract}}</label>
        </td>

        <td>
            {{\Carbon\Carbon::parse($info->project->created_at)->format('d-M-Y')}}
        </td>
        <td>
            {{$info->price}}
        </td>
        <td>
            <span class="text-muted">min:${{$info->project->min_price}}, Max: ${{$info->max_price}} </span>
        </td>
        <td>
            {{$info->project->duration}}
        </td>
        <td>
            <div id="round-disabled" class="raiting-container" style="cursor: pointer;">
                <img alt="1" src="../assets/images/rating/star-on.png" title="bad">&nbsp;
                <img alt="2" src="../assets/images/rating/star-on.png" title="poor">&nbsp;
                <img alt="3" src="../assets/images/rating/star-on.png" title="regular">&nbsp;
                <img alt="4" src="../assets/images/rating/star-off.png" title="good">&nbsp;
                <img alt="5" src="../assets/images/rating/star-off.png" title="gorgeous">
            </div>
        </td>
        <td>
            <a href="{{route('bidder.bid.details',$info->id)}}" class="btn btn-info">Details</a>
        </td>
    </tr>
@empty
@endforelse
