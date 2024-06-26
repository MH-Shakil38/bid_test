@forelse($projects as $info)
    <tr>
        <td>
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                    <a class="btn btn-circle btn-danger text-white">EA</a>
                </div>
                <div class="">
                    <h4 class="m-b-0 font-16">{{$info->title}}</h4>
                </div>
            </div>
        </td>
        <td>
            <label class="label label-danger">{{$info->contract}}</label>
        </td>
        <td>
            <span class="text-muted">min:${{$info->min_price}}, Max: ${{$info->max_price}} </span>
        </td>
        <td>
            {{\Carbon\Carbon::parse($info->bid_end)->format('d-M-Y h\h :i\m a')}}
        </td>
        <td>
            <a href="{{route('view.project-details',$info->id)}}">
                {!! status($info->status)  !!}
            </a>
            <a href="{{route('projects.edit',$info->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
        </td>
    </tr>
@empty
    <div class="no-record" > <h2>No Record Fount</h2> </div>
@endforelse
