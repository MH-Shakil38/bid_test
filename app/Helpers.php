<?php

use App\Models\BidProject;
use Illuminate\Support\Facades\Auth;

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
              'name' => "Submitted",
          ],
          [
              'id' => 3,
              'name' => "Complete",
          ],
          [
              'id' => 4,
              'name' => "Rejected",
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
        }elseif ($status == 2){
            return '<label class="badge bg--secondary">Submit</label>';
        }elseif ($status == 3){
            return '<label class="badge bg--primary">Complete</label>';
        }elseif ($status == 4){
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
    function total_bid_count($status = null){
        if ($status){
            return \Illuminate\Support\Facades\DB::table('bid_projects')->where('status', $status)->count();
        }else{
            return \Illuminate\Support\Facades\DB::table('bid_projects')->count();
        }
    }
}


if (!function_exists('string_cut')) {
    function string_cut($details ,$line = 4){
        $lines = explode(PHP_EOL, $details); // Split text by new lines
        $firstSixLines = array_slice($lines, 0, 6); // Get the first six lines
        return implode(PHP_EOL, $firstSixLines); // Combine them back into a single string
    }
}


if (!function_exists('categories')) {
    function categories(){
        return \App\Models\Category::query()->get();
    }
}

if (!function_exists("thumbnail")){
    function thumbnail($image){
        $placeholder = asset('thumbnail.png');
        if ($image == "" || $image == null){
            return $placeholder;
        }

        $headers = @get_headers($placeholder);
        $isImageAvailable = $headers && strpos($headers[0], '200');
        return $isImageAvailable ? $image : $placeholder;
    }
}
if (!function_exists("profile_pic_check")){
    function profile_pic_check($image){
        $placeholder = asset('thumbnail.png');
        if ($image == ""){
            return $placeholder;
        }
        $headers = @get_headers($placeholder);
        $isImageAvailable = $headers && strpos($headers[0], '200');
        return $isImageAvailable ? $image : $placeholder;
    }
}
if (!function_exists("dayMonthCalculate")){
    function dayMonthCalculate($startDate, $endDate){
        $startDate = \Carbon\Carbon::parse($startDate)->format('Y-m-d');
        $endDate = \Carbon\Carbon::parse($endDate)->format('Y-m-d');
        $startDate = new DateTime($startDate);
        $endDate = new DateTime($endDate);
        $interval = $startDate->diff($endDate);
        $days = $interval->days;
        $months = $interval->m + ($interval->y * 12);
        return $months != 0 ? $days.'-Days' . $months.': Month' : $days.'-Days';
    }
}


if (!function_exists("bidderProjectCountByStatus")){
    function bidderProjectCountByStatus($status){
       return \App\Models\BidProject::query()->where('status', $status)->count() ?? 0;
    }
}

if (!function_exists("commission_fee")){
    function commission_fee(){
       $data =  \App\Models\Commission::query()->latest()->first();
       return $data->amount ?? 20;
    }
}

if (!function_exists("status_ways_project_by_bidder")){
    function status_ways_project_by_bidder($status){
        $query = \App\Models\BidProject::query()->where('user_id',auth()->user()->id);
        $status != null ?$query->where('status', $status) : $query ;
        return $query->get();
    }
}

if (!function_exists("bidder_total_earning")){
    function bidder_total_earning(){
        $query = \App\Models\BidInvoice::query()->where('bidder_id',auth()->user()->id);
        return $query->get()->sum('total') ?? 0;
    }
}
if (!function_exists("total_earning")){
    function total_earning(){
        $query = \App\Models\BidInvoice::query();
        return $query->get()->sum('site_commission') ?? 0;
    }
}
if (!function_exists("bidder_current_project")){
    function bidder_current_project($bidId){
        return BidProject::query()
            ->with('project')
            ->where('user_id', $bidId)
            ->first();
    }
}

if (!function_exists("owner_latest_project")){
    function owner_latest_project($ownerId){
        return \App\Models\Project::query()
            ->where('user_id', $ownerId)
            ->first();
    }
}

if (!function_exists("total_bid_on_project")){
    function total_bid_on_project(){
        return \App\Models\BidProject::query()->get()->unique('project_id')->count();
    }
}



