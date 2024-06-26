<?php
if (!function_exists('bid_date')) {
    function bid_date($data){
        if ($data == null){
            return '---';
        }
        return \Carbon\Carbon::parse($data)->format('M d, Y');
    }
}

if (!function_exists('bid_time')) {
    function bid_time($time){
        return \Carbon\Carbon::parse($time)->format('h\h :i\m');
    }
}

if (!function_exists('user_type')) {
    function user_type(){
        if (isset(auth()->user()->user_type)){
            return auth()->user()->user_type;
        }else{
            return null;
        }
    }
}

if (!function_exists('user_projects')) {
    function user_projects($uid, $status = null){
        if ($status)
            $jobs = \App\Models\Project::where('user_id', $uid)->where('status', $status)->count();
        else
            $jobs = \App\Models\Project::where('user_id', $uid)->count();

        return $jobs ?? 0;
    }
}


if (!function_exists('bid_count')) {
    function bid_count($project_id){
       $count = \Illuminate\Support\Facades\DB::table('bid_projects')->where('project_id', $project_id)->count();
       return $count;
    }
}


if (!function_exists('bid_status')) {
    function bid_status(){
      $bid_status = [
          [
              'id' => 0,
              'name' => "Pending",
          ],
          [
              'id' => 1,
              'name' => "Active",
          ],
          [
              'id' => 2,
              'name' => "Complete",
          ],
          [
              'id' => 3,
              'name' => "Reject",
          ],
          [
              'id' => 4,
              'name' => "Draft",
          ]

      ];
       return $bid_status;
    }
}

if (!function_exists('status')) {
    function status($status){
        if ($status == 0){
            return '<label class="badge bg-warning">Pending</label>';
        }elseif ($status == 1){
            return '<label class="badge bg--success">Active</label>';
        }elseif ($status == 4){
            return '<label class="badge bg--secondary">Draft</label>';
        }elseif ($status == 2){
            return '<label class="badge bg--primary">Complete</label>';
        }elseif ($status == 3){
            return '<label class="badge bg--danger">Reject</label>';
        }else{
            return '<label class="badge bg--info">Under Progress</label>';
        }
    }
}

if (!function_exists('changeStatusButton')) {
    function changeStatusButton($id,$status){
        if ($status == 0){
            return '<button class="btn btn-info float-right" onclick="changeStatus('.$id.',"BidProject",1)"> Pending.. </button>';
        }elseif ($status == 1){
            return '<button class="btn btn-info float-success" onclick="changeStatus('.$id.',"BidProject",1)">Active</button>';
        }elseif ($status == 2){
            return '<button class="btn btn-info float-danger" onclick="changeStatus('.$id.',"BidProject",1)"Reject</label>';
        }
    }
}

if (!function_exists('total_bid_count')) {
    function total_bid_count($status){
        return \Illuminate\Support\Facades\DB::table('bid_projects')->where('status', $status)->count();
    }
}


if (!function_exists('string_cut')) {
    function string_cut($details ,$line = 4){
        $lines = explode(PHP_EOL, $details); // Split text by new lines
        $firstSixLines = array_slice($lines, 0, 6); // Get the first six lines
        return implode(PHP_EOL, $firstSixLines); // Combine them back into a single string
    }
}



