<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    public readonly User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $users = $this->user->all();
        return view('users', ['users' => $users]);
    }

    public function create()
    {
        return view('user_create');
    }

    public function store(StoreUserRequest $request)
    {
        $created = $this->user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return $created
            ? redirect()->route('users.index')->with('message', 'Successfully created')
            : redirect()->back()->with('message', 'Error created');
    }

    public function show(User $user)
    {
        return view('user_show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('user_edit', ['user' => $user]);
    }

    public function update(UpdateUserRequest $request, string $id)
    {
        $data = $request->validated();

        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $updated = $this->user->where('id', $id)->update($data);

        return $updated
            ? redirect()->route('users.index')->with('message', 'Successfully updated')
            : redirect()->back()->with('message', 'Error update');
    }

    public function destroy(string $id)
    {
        $this->user->where('id', $id)->delete();
        return redirect()->route('users.index')->with('message', 'Successfully deleted');
    }
}