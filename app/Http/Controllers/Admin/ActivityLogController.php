<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
    public function index()
{
    $activities = \Spatie\Activitylog\Models\Activity::latest()->paginate(10);
    return view('admin.logs.index', compact('activities'));
}
}