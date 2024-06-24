<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OwnerController extends Controller
{
    public function dashboard(){
        if (user_type() == 3){
            $data['projects'] = Project::query()->where('user_id', Auth::id())->get();
            return view('backend.owner.dashboard')->with($data);
        }
    }

    public function projects($status){
        $data['title'] = "Active Project";
        $data['projects'] = Project::query()->where('user_id', Auth::id())->where('status',$status)->get();
        return view('backend.owner.project-list')->with($data);
    }

    public function activeProject(){
        $data['title'] = "Active Project";
        $data['projects'] = Project::query()->where('user_id', Auth::id())->where('status',1)->get();
        return view('backend.owner.project-list')->with($data);
    }

    public function pendingProject(){
        $data['title'] = "Pending Project";
        $data['projects'] = Project::query()->where('user_id', Auth::id())->where('status',0)->get();
        return view('backend.owner.project-list')->with($data);
    }


    public function rejectedProject(){
        $data['title'] = "Rejected Project";
        $data['projects'] = Project::query()->where('user_id', Auth::id())->where('status',2)->get();
        return view('backend.owner.project-list')->with($data);
    }
}
