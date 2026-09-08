<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Services\SkillService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class SkillController extends Controller
{
    public function index()
    {
        $character = Auth::user()->character;

        $skills = $character
            ->skills()
            ->get();

        return view('skills.index', compact('skills'));
    }

    public function store(
        Request $request,
        SkillService $skillService
    ) {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $skillService->create(
            Auth::user(),
            $validated
        );

        return redirect()
            ->route('skills.index')
            ->with('success', 'Навык создан!');
    }

    public function update(
        Request $request,
        Skill $skill
    ) {
        Gate::authorize('update', $skill);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $skill->update($validated);

        return redirect()
            ->route('skills.index')
            ->with('success', 'Навык обновлён!');
    }

    public function destroy(Skill $skill)
    {
        Gate::authorize('delete', $skill);

        $skill->delete();

        return redirect()
            ->route('skills.index')
            ->with('success', 'Навык удалён!');
    }
}