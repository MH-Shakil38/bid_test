<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BidController extends Controller
{
    public function totalBids()
    {
        return view('backend.superadmin.bids.total-bids');
    }
}
