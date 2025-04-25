<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Lead;
use App\Models\Worklog;
use App\Models\Plan;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'clientCount' => Client::count(),
            'leadCount' => Lead::count(),
            'worklogCount' => Worklog::count(),
            'plans' => Plan::all()->groupBy('name')->map->count(),
        ]);
    }
}
