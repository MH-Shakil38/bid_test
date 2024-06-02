<?php

namespace App\Service;

use App\Models\BidProject;
use App\Models\User;

class BidService
{
    const BID_ACTIVE_STATUS = 1;
    const BID_DRAFT_STATUS = 2;
    const BID_COMPLETE_STATUS = 3;
    const BID_REJECT_STATUS = 4;
    const BID_IN_PROGRESS_STATUS = 5;

    const PROJECT_PENDING_STATUS = 0;
    const PROJECT_ACTIVE_STATUS = 1;
    const PROJECT_REJECT_STATUS = 2;


    public function getAllBid($user_id = null){
        if($user_id == null){
            return BidProject::query()->get();
        }else{
            return BidProject::query()->where('user_id', $user_id)->get();
        }
    }
    public function getUser($type = null){
        $request = request();
        if($type == null){
            return User::query()->with('bidder_projects')->get();
        }elseif ($request->type != null){
            return User::query()->with('bidder_projects')->where('user_type',$request->type)->get();
        }
        else{
            return User::query()->with('bidder_projects')->where('user_type',$type)->get();
        }
    }



}
