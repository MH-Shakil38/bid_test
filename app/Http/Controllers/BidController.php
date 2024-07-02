<?php

namespace App\Http\Controllers;

use App\Models\BidProject;
use App\Models\Project;
use App\Service\BidService;
use App\Service\InvoiceService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BidController extends Controller
{
    public function bidProjectStore(Request $request,BidService $bidService){
        try {
            DB::beginTransaction();
            $bidService->bidStore();
            DB::commit();
            return redirect()->back()->with('success','Bid Proposal has been Send');
        }catch (\Exception $e){
            DB::rollBack();
            dd($e->getMessage());
        }
    }

    public function bidDetails($bidProjectId)
    {
        $data['bid'] = BidProject::findById($bidProjectId);
        $data['project'] = Project::query()->findOrFail($data['bid']->project_id);
        return view('backend.bid.bid-details')->with($data);
    }

    public function BidInvoice(
        $bidId,
        InvoiceService $invoiceService,
        BidService $bidService,
    )
    {
        try {
            DB::beginTransaction();
            $invoice = $invoiceService->bidInvoice($bidId);
            if ($invoice == true){
                $status = $bidService->changeBidStatus($bidId,1);
            }
            DB::commit();
            return redirect()->back()->with('success','Bid Invoice has been Successfully Created');
        }catch (\Throwable $e){
            DB::rollBack();
            dd($e->getMessage(),$e->getTraceAsString(),$e->getLine(),$e->getFile());
        }
    }
}
