<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\User;
use App\Service\BidService;
use App\Service\ProjectService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasicController extends Controller
{

    public function dashboard(Request $request, BidService $bidService)
    {
        $data['totalBid'] = $bidService->getAllBid()->count();
        $data['totalBidder'] = $bidService->getUser(User::USER_TYPE_BIDDER)->count();
        $data['totalHomeowner'] = $bidService->getUser(User::USER_TYPE_OWNER)->count();
        if (user_type() == 1){
            return view('backend.dashboard')->with($data);
        }elseif (user_type() == 2){
            return redirect()->route('bidder.dashboard');
        }elseif (user_type() == 3){
            $data['projects'] = Project::query()->where('user_id', Auth::id())->get();
            return view('backend.owner.dashboard')->with($data);
        }
    }
    public function totalProject(){

        return view('backend.superadmin.total-project');
    }

    public function totalBids(Request $request, ProjectService $projectService){
        $data['projects'] = $projectService->projects();
        if ($request->ajax()) {
            $html =  view('backend.superadmin.bid-project.total-bids-ajax')->with($data)->render();
            return response()->json(['data'=>$html]);
        }
        return view('backend.superadmin.total-bids')->with($data);
    }

    public function totalBidders(Request $request,BidService $bidService){
        $data['bidders'] = $bidService->getUser(User::USER_TYPE_BIDDER);
        if ($request->ajax()) {
            $html =  view('backend.content.total-bidder')->with($data)->render();
            return response()->json(['data'=>$html]);
        }
        return view('backend.superadmin.total-bidders')->with($data);
    }

    public function homeOwners(Request $request,BidService $bidService){
        $data['owners'] = $bidService->getUser(User::USER_TYPE_OWNER);
        if ($request->ajax()) {
            $html =  view('backend.content.total-bidder')->with($data)->render();
            return response()->json(['data'=>$html]);
        }
        return view('backend.superadmin.home-owners')->with($data);
    }











}
