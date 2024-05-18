<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectStoreRequest;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function totalProject(){
        $data['projects'] = Project::all();
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

        }catch (\Throwable $e) {
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

    public function viewProjectDetails($id)
    {
        $data['info'] = Project::query()->where('user_id', Auth::id())->where('id',$id)->first();

        return view('backend.view-project-details')->with($data);
    }
}
