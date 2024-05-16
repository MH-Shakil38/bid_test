<?php

namespace App\Http\Controllers;

use App\Models\BidProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BidController extends Controller
{
    public function bidProjectStore(Request $request){
        try {
            DB::beginTransaction();
            $data = $request->all();
            $data['user_id'] = Auth::id();
            BidProject::query()->create($data);
            DB::commit();
            return redirect()->back()->with('success','Bid Proposal has been Send');
        }catch (\Exception $e){
            DB::rollBack();
            dd($e->getMessage());
        }
    }
}
