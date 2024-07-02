<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\BidProject;
use App\Models\Project;
use App\Service\BidService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\search;

class BidderController extends Controller
{
    public function dashboard(Request $request){
        if ($request->ajax() && $request->type == 'search') {
            $data['projects'] = BidProject::query()
                ->with('project')
                ->where('user_id', Auth::id())
                ->where('status',$request->status)
                ->where('created_at', 'like', '%' . $request->date . '%')
                ->get();

            $view = view('backend.bid.bid_ajax_table')
                    ->with($data)
                    ->render();
            return response()->json($view);
        }
        $data['projects'] = BidProject::query()
            ->with('project')
            ->where('user_id', Auth::id())
            ->get();
        return view('backend.bidder.dashboard')->with($data);
    }
    public function bidOnProject(){
        $data['projects'] = BidProject::query()
            ->with('project')
            ->where('user_id', Auth::id())
            ->get();
        return view('backend.bidder.bid-on-project')->with($data);
    }


    public function bidDetails($bidId)
    {
        $data['bid'] = BidProject::query()
            ->with('project')
            ->where('user_id', Auth::id())
            ->where('id',$bidId)
            ->first();
        return view('backend.bidder.bid-details')->with($data);
    }

    public function activeProject()
    {
        $data['projects'] = Project::query()
            ->where('user_id', Auth::id())
            ->where('status',BidService::PROJECT_ACTIVE_STATUS)
            ->get();
        return view('backend.bidder.active-project')->with($data);
    }

    public function completeProject()
    {
        $data['projects'] = Project::query()
            ->where('user_id', Auth::id())
            ->where('status',BidService::PROJECT_REJECT_STATUS)
            ->get();
        return view('backend.bidder.complete-project')->with($data);
    }
}
