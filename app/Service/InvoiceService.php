<?php

namespace App\Service;

use App\Models\BidInvoice;
use App\Models\BidProject;
use App\Models\Project;
use Illuminate\Support\Facades\DB;

class InvoiceService
{
    public function bidInvoice($bidId)
    {
        try {
            DB::beginTransaction();
                $bid = BidProject::findById($bidId);
                $project= Project::query()->findOrFail($bid->project_id);
                $price = $this->calculateCommission($bid->fixed_rate);
                $site_commission = $bid->fixed_rate - $price;

                BidInvoice::query()->create([
                    'bidder_id'     =>$bid->user_id,
                    'owner_id'      =>$project->user_id,
                    'project_id'    =>$project->id,
                    'bid_id'        =>$bid->id,
                    'total'         =>$bid->price,
                    'site_commission'=>$site_commission,
                    'fixed_price'   =>$bid->fixed_rate,
                    'commission'    =>commission_fee(),
                ]);
            DB::commit();
            return true;
        }catch (\Throwable $e){
            DB::rollBack();
            dd($e->getMessage(),$e->getFile());
            return false;
        }

    }

    public function calculateCommission($price)
    {
        $commission = commission_fee();
        $total = ($commission / 100) * $price;
        $total =  $price - $total;
        return $total;
    }

}
