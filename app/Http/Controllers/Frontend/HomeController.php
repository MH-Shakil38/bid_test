<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BidProject;
use App\Models\Category;
use App\Models\Project;
use App\Service\BidService;
use App\Service\ProjectService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function changeStatus(Request $request,BidService $bidService)
    {
        if ($request->model == 'BidProject') {
            $bidService->changeBidStatus($request->id,$request->status);
        }else{
            $model = "\App\Models\\" . $request->model;
            $row = $model::findOrFail($request->id);
            $row->update(['status' => $request->status]);
        }

        return response()->json(['success' => 'Status Successfully Updated']);

    }

    public function jobPost()
    {
        $data['categories'] = Category::all();
        return view('frontend.job-post')->with($data);
    }

    public function listing()
    {
        return view('frontend.listing');
    }

    public function dashboard()
    {
        return view('backend.dashboard');
    }

    public function projectDetails($id)
    {
        $info = Project::query()->findOrFail($id);
        return view('frontend.project-details', compact('info'));
    }

    public function projectBid($id)
    {
        $info = Project::query()->findOrFail($id);
        return view('frontend.project-bid', compact('info'));
    }

    public function findProject(Request $request, ProjectService $projectService,)
    {
        $data['projects'] = Project::query()->where('status',0)->get();
        return view('frontend.listing')->with($data);
    }
}
