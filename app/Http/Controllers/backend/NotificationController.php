<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(){
        return view('backend.superadmin.custom-notification');
    }
    public function store(Request $request)
    {
        $request->validate([
           'detail' => 'required',
           'notification_to' => 'required',
        ]);

        Notification::create([
            'detail'=>$request->detail,
            'notification_to' => $request->notification_to
        ]);
        return redirect()->back()->with('success', 'Notification Added Successfully');
    }
}
