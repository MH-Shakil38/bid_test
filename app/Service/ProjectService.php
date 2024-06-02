<?php

namespace App\Service;

use App\Models\Project;

class ProjectService
{
    public function projects($user_type = null)
    {
        $request = request();
        if ($user_type == null && !isset($request->status)) {
            return Project::query()->get();
        }elseif (isset($request->status)){
            return Project::query()->where('status', $request->status)->get();
        }else{
            return Project::query()->where('user_type', $user_type)->get();
        }
    }
}
