<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectStoreRequest;
use App\Models\BidProject;
use App\Models\Category;
use App\Models\Project;
use App\Service\ProjectService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function totalProject(Request $request,ProjectService $projectService){
        $data['projects'] = $projectService->projectQuery();
        if ($request->ajax() && $request->type == 'search') {
            $view = view('backend.project.search_ajax_table')->with($data)->render();
            return response()->json($view);
        }
        return view('backend.superadmin.total-project')->with($data);
    }

    public function create()
    {
        $data['categories'] = Category::all();
        return view('backend.create-project')->with($data);
    }

    public function store(ProjectStoreRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $data['user_id'] = Auth::id();
            $data['status'] = $request->submit;
             $project = Project::query()->create($data);
            if ($request->hasFile('images')) {
                foreach ($request->file('images', []) as $file) {
                    $project->addMedia($file)
                        ->usingName('project/'.$data['user_id'] )
                        ->toMediaCollection('project', 'public');
                }
            }
            DB::commit();
            return redirect()->route('owner.dashboard')->with('success','Project created successfully');

        }catch (\Exception $e) {
            DB::rollBack();
            dd($e);
        }
    }

    public function edit($id)
    {
        $data['categories'] = Category::all();
        $data['project'] = Project::query()->find($id);
        return view('backend.edit-project')->with($data);
    }
    public function update(Request $request, $id)
    {
        $project['project'] = Project::query()->find($id);

        if ($project['project']->status != 0 && auth()->user()->user_type != 1)
            return back()->with('error', 'You can not update this project');

        try {
            DB::beginTransaction();
            $data = $request->all();
            $project['project']->update($data);
            if ($request->hasFile('images')) {
                foreach ($request->file('images', []) as $file) {
                    $project['project']->addMedia($file)
                        ->usingName('project/'.$data['user_id'] )
                        ->toMediaCollection('project', 'public');
                }
            }
            DB::commit();
            return view('backend.view-project-details')->with($project);

        }catch (\Exception $e) {
            DB::rollBack();
            dd($e);
        }
    }


    public function ongoingProject()
    {
        if (user_type() == 3){
            $data['projects'] = Project::query()->where('user_id', Auth::id())->get();
            return view('backend.owner.dashboard')->with($data);
        }
    }

    public function viewProjectDetails($id,ProjectService $projectService)
    {

        $data['project'] = Project::query()->where('id',$id)->first();
        $data['activeBid'] = BidProject::query()->where('project_id',$data['project']->id)->where('status',1)->latest()->first();
        $data['project']->bids = BidProject::query()->where('project_id',$data['project']->id)->get();


        return view('backend.view-project-details')->with($data);
    }
}
