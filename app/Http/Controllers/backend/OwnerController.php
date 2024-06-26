<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Service\ProjectService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OwnerController extends Controller
{
    public function dashboard(ProjectService $projectService){
        $data['projects'] = $projectService->projects();
        return view('backend.owner.dashboard')->with($data);
    }
}
