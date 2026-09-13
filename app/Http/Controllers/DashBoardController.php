<?php

namespace App\Http\Controllers;

use App\Services\XpService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class DashBoardController extends Controller
{
    public function index(XpService $xpService){
        $character = Auth::user()->character;

        $xpToNextLevel = $xpService->xpToNextLevel($character->level);

        $xpPercent = min(100, ($character->xp / $xpToNextLevel)* 100);

        $skills = $character->skills->map(function ($skill) use ($xpService) {

            $xpToNextLevel = $xpService->xpToNextLevel(
                $skill->pivot->level
            );

            $xpPercent = min(
                100,
                ($skill->pivot->xp / $xpToNextLevel) * 100
            );

            return [
                'skill' => $skill,
                'level' => $skill->pivot->level,
                'xp' => $skill->pivot->xp,
                'xpToNextLevel' => $xpToNextLevel,
                'xpPercent' => $xpPercent,
            ];
        });

        return view('dashboard', compact('character', 'xpToNextLevel', 'xpPercent', 'skills'));
    }

    public function updateAvatar(Request $request){
        $request->validate([
            'avatar' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:4096',
            ]
        ]);

        $character = auth()->user()->character;

        $oldAvatar = $character->avatar;

        $path = $request->file('avatar')
            ->store('avatars', 'public');

        $character->update([
            'avatar' => $path,
        ]);

        if ($oldAvatar) {
            Storage::disk('public')->delete($oldAvatar);
        }

        return back();
    }
}
