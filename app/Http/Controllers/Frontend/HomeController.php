<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BidProject;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function changeStatus(Request $request)
    {
        $model = "\App\Models\\" . $request->model;
        $row = $model::findOrFail($request->id);
        $row->update(['status' => $request->status]);
        if($request->model == 'BidProject'){
           $bid = BidProject::findById($request->id);
           $bids = BidProject::query()->where('project_id',$bid->project_id);
           $bids->update(['status'=>2]);
            BidProject::query()->findOrFail($request->id)->update(['status'=>1]);
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

    public function findProject(Request $request)
    {
        $data['projects'] = Project::query()
            ->where('title', 'like', '%' . $request->title . '%')
            ->get();
        return view('frontend.listing')->with($data);
    }
}
