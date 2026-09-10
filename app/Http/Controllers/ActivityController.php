<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActivityRequest;
use App\Models\Activity;
use App\Services\ActivityManagementService;
use App\Services\ActivityService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;



class ActivityController extends Controller
{
    public function index(){
        $character = Auth::user()->character;
        $activities = Auth::user()->activities()->with('skills')->get();
        $skills = $character->skills()->get();

        $logs = $character->activityLogs()
        ->with('activity')
        ->latest()
        ->take(5)
        ->get();


        return view('activities.index', compact(
            'character',
            'activities',
            'logs',
            'skills'
        ));
    }

    public function complete(Activity $activity, ActivityService $activityService){
        $character = Auth::user()->character;

        $activityService->complete($character, $activity);

        return redirect()->route('activities.index')->with('success', 'Активность выполнена! +' . $activity->base_xp . ' XP');
    }

    public function store(ActivityRequest  $request, ActivityManagementService $activityManagementService){
        $activityManagementService->create(
            Auth::user(),
            $request->validated()
        );
        return redirect()->route('activities.index')->with('success', 'Активность создана!');

    }
    public function update(ActivityRequest $request,Activity $activity,ActivityManagementService $activityManagementService) 
    {
        Gate::authorize('update', $activity);

        $activityManagementService->update(
            $activity,
            $request->validated()
        );

        return redirect()
            ->route('activities.index')
            ->with('success', 'Активность обновлена!');
    }
    public function destroy(Activity $activity, ActivityManagementService $activityManagementService)
    {
        Gate::authorize('delete', $activity);

        $activityManagementService->delete($activity);

        return redirect()
            ->route('activities.index')
            ->with('success', 'Активность удалена!');
    }

}
