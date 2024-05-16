<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasicController extends Controller
{

    public function dashboard()
    {
        if (user_type() == 1){
            return view('backend.dashboard');
        }elseif (user_type() == 2){
            return view('backend.bidder.dashboard');
        }elseif (user_type() == 3){
            $data['projects'] = Project::query()->where('user_id', Auth::id())->get();
            return view('backend.owner.dashboard')->with($data);
        }
    }
    public function totalProject(){

        return view('backend.superadmin.total-project');
    }

    public function totalBids(){
        return view('backend.superadmin.total-bids');
    }

    public function totalBidders(){
        return view('backend.superadmin.total-bidders');
    }

    public function homeOwners(){
        return view('backend.superadmin.home-owners');
    }











}
