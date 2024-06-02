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
              'name' => "Draft",
          ],
          [
              'id' => 3,
              'name' => "Complete",
          ],
          [
              'id' => 4,
              'name' => "Reject",
          ],

          [
              'id' => 5,
              'name' => "In Progress",
          ],

      ];
       return $bid_status;
    }
}

if (!function_exists('status')) {
    function status($status){
        if ($status == 1){
            return '<label class="label label-danger">Active</label>';
        }elseif ($status == 2){
            return '<label class="label label-success">Draft</label>';
        }elseif ($status == 3){
            return '<label class="label label-info">Complete</label>';
        }elseif ($status == 4){
            return '<label class="label label-warning">Reject</label>';
        }elseif ($status == 5){
            return '<label class="label label-info">In Progress</label>';
        }else{
            return '<label class="label label-info">In Progress</label>';
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



