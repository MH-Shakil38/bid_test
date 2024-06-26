<?php

namespace App\Service;

use App\Models\Project;

class ProjectService
{
    public function projects($user_type = null)
    {
        $request = request();
        $query = Project::query();
        $query = user_type() == 3 ? $query->where('user_id',auth()->user()->id) : $query;
        isset($request->title) ?  $query->where('title', 'LIKE', '%' . $request->title . '%') : $query;
        isset($request->date) ?  $query->where('created_at', 'like', '%' . $request->date . '%') : $query;
        isset($request->status) &&  $request->status != 'All'?  $query->where('status', $request->status) : $query;
        return $query->get();
    }

    public function projectQuery()
    {
        $request = request();
        $query = Project::query();
        $query = user_type() == 3 ? $query->where('user_id',auth()->user()->id) : $query;
        isset($request->title) ?  $query->where('title', 'LIKE', '%' . $request->title . '%') : $query;
        isset($request->date) ?  $query->where('created_at', 'like', '%' . $request->date . '%') : $query;
        isset($request->status) &&  $request->status != 'All'?  $query->where('status', $request->status) : $query;
        return $query->get();
    }
}
