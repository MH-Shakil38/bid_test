<?php
if (!function_exists('data')) {
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



