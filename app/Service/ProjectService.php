<?php

namespace App\Service;

use App\Models\Project;

class ProjectService
{
    public function projects($status = null)
    {
        $request = request();
        $query = Project::query();
        if ($request->type == 'frontend'){
            $query;
        }else{
            $query = user_type() == 3 ? $query->where('user_id',auth()->user()->id) : $query;
        }
        isset($request->title) ?  $query->where('title', 'LIKE', '%' . $request->title . '%') : $query;
        isset($request->category) ?  $query->where('category_id', $request->category) : $query;
        isset($request->date) ?  $query->where('created_at', 'like', '%' . $request->date . '%') : $query;
        isset($request->status) &&  $request->status != 'All'?  $query->where('status', $request->status) : $query;
        ($status != null ?  $query->where('status', $status) : $query);
        return $query->get();
    }
}
