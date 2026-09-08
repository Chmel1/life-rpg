<?php

namespace App\Http\Controllers;

use App\Services\AchievementService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AchievementController extends Controller
{
    public function index(AchievementService $achievementService){
        $character = Auth::user()->character;

        $achievements = $achievementService->getForCharacter($character);

        return view ('achievement.index', compact('character', 'achievements'));
    }
}
