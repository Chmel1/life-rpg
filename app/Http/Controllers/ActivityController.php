<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Services\ActivityService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    public function index(){
        $character = Auth::user()->character;
        $activities = Activity::with('skills')->get();

        return view('activities.index', compact(
            'character',
            'activities'
        ));
    }

    public function complete(Activity $activity, ActivityService $activityService){
        $character = Auth::user()->character;

        $activityService->complete($character, $activity);

        return redirect()->route('activities.index')->with('success', 'Активность выполнена! +' . $activity->base_xp . ' XP');
    }
}
