@forelse($projects as $info)
    <tr>
        <td>
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                    <a class="btn btn-circle btn-danger text-white">{{substr($info->title,0,2)}}</a>
                </div>
                <div class="">
                    <h4 class="m-b-0 font-16">{{substr($info->title,0,50)}}...</h4>
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
            <a href="{{route('view.project-details',$info->id)}}">
                {!! status($info->status)  !!}
            </a>
            {{--                                        {{\Carbon\Carbon::parse($info->bid_end)->format('d-M-Y h\h :i\m a')}}--}}
        </td>
        <td>

            <a href="{{route('projects.edit',$info->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
        </td>
    </tr>
@empty
@endforelse
