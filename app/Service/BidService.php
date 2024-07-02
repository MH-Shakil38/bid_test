<?php

namespace App\Service;

use App\Models\BidInvoice;
use App\Models\BidProject;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BidService
{
    const BID_ACTIVE_STATUS = 1;
    const BID_DRAFT_STATUS = 2;
    const BID_COMPLETE_STATUS = 3;
    const BID_REJECT_STATUS = 4;
    const BID_IN_PROGRESS_STATUS = 5;

    const PROJECT_PENDING_STATUS = 0;
    const PROJECT_ACTIVE_STATUS = 1;
    const PROJECT_REJECT_STATUS = 4;


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

    public function bidStore()
    {
        $data = request()->all();
        $data['price']      =  $this->calculateCommission();
        $data['user_id']    =  Auth::id();
        $data['status']     =  0;
        return BidProject::query()->create($data);

    }

    public function calculateCommission()
    {
        $data = request();
        $price = $data->fixed_rate;
        $commission = commission_fee();
        $total = ($commission / 100) * $price;
        $total =  $price - $total;
        return $total;
    }
    public function changeBidStatus($bidId,$status = null)
    {
        try {
            DB::beginTransaction();
            $bid = BidProject::findById($bidId);
            $project = Project::query()->where('id', $bid->project_id)->first();
            $bids = BidProject::query()->whereNot('id',$bidId)->where('project_id',$bid->project_id);
            $bids->update(['status'=>'4']);
            $invoice = BidInvoice::query()->where('bid_id', $bid->id)->first();
            $bid->update(['status' => $status]);
            $project->update(['status' => $status]);
            $invoice->update(['bid_status' => $status]);
            DB::commit();
            return true;
        }catch (\Throwable $e){
            DB::rollBack();
            dd($e->getMessage());
        }
    }



}
