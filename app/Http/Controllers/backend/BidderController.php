<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BidderController extends Controller
{
    public function dashboard(){
        return view('backend.bidder.dashboard');
    }
    public function bidOnProject(){
        return view('backend.bidder.bid-on-project');
    }

    public function activeProject()
    {
        return view('backend.bidder.active-project');
    }

    public function completeProject()
    {
        return view('backend.bidder.complete-project');
    }
}
