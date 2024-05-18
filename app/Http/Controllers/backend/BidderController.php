<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\BidProject;
use App\Models\Project;
use App\Service\BidService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BidderController extends Controller
{
    public function dashboard(){
        $data['bids'] = BidProject::query()->with('project')->where('user_id', Auth::id())->get();
        $data['active'] = Project::query()
            ->where('user_id', Auth::id())
            ->where('status',BidService::PROJECT_ACTIVE_STATUS)
            ->get();
        $data['complete'] = Project::query()
            ->where('user_id', Auth::id())
            ->where('status',BidService::PROJECT_REJECT_STATUS)
            ->get();
        return view('backend.bidder.dashboard')->with($data);
    }
    public function bidOnProject(){
        $data['bids'] = BidProject::query()->with('project')->where('user_id', Auth::id())->get();
        return view('backend.bidder.bid-on-project')->with($data);
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
