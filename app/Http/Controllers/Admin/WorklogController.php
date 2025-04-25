<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Worklog;

class WorklogController extends Controller
{
    public function index()
    {
        return view('admin.worklogs.index', [
            'worklogs' => Worklog::orderByDesc('performed_at')->get()
        ]);
    }
}
