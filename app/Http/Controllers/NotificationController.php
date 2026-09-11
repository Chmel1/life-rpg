<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
class NotificationController extends Controller
{
    public function index(){
        $user = auth()->user();

        $notifications = $user->notifications()->latest()->paginate(15);

        $user->unreadNotifications()->update(['read_at' => now(),]);

        return view('notifications.index', compact('notifications'));
    }

     public function read(string $notification): RedirectResponse
    {
        auth()->user()
            ->notifications()
            ->where('id', $notification)
            ->firstOrFail()
            ->markAsRead();

        return back();
    }
}
