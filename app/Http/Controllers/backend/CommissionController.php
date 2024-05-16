<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Commission;
use Illuminate\Http\Request;

class CommissionController extends Controller
{
    public function index(){
        $data['com'] = Commission::query()->latest()->first();
        return view('backend.superadmin.commission-setting')->with($data);
    }

    public function store(Request $request){
        $request->validate([
            'amount' => 'required',
        ]);
        Commission::create([
            'amount' => $request->amount
        ]);
        return redirect()->back()->with('success','Commission added successfully');
    }

    public function edit(Commission $commission)
    {
        $com = Commission::query()->latest()->first();
        return view('backend.superadmin.commission-setting',compact('commission','com'));
    }
    public function update(Request $request){
        $request->validate([
            'amount' => 'required',
        ]);
        Commission::query()->update([
            'amount' => $request->amount
        ]);
        return redirect()->route('commission.index')->with('success','Commission Updated successfully');
    }
}
