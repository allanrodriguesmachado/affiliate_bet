<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class UserController extends Controller
{

    public function index(): View
    {
        $users = User::query()->where('status', 'false')->get();

        return view('users.index', [
            'users' => $users
        ]);
    }


    public function create(): View
    {
        return view('users.create');
    }

    public function store(): RedirectResponse
    {
        $users = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::query()->create($users);

        return to_route('user.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(User $user): View
    {
        return view('users.edit', compact('user'));
    }

    public function update(User $user, Request $request): RedirectResponse
    {
        $validation  = request()->validate([
            'name' => 'min:4|string',
            'email' => 'min:4|string',
            'status' => 'string'
        ]);

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $user->update($validation);

        return to_route('user.index');
    }

    public function destroy(string $id): RedirectResponse
    {
        $user = User::query()->where('id', $id);
        $user->delete();

        return to_route('user.index');
    }
}
