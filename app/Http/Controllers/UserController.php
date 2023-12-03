<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return view('admin.pages.users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.pages.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->phone,
            'password' => $request->password,
            'role_id' => $request->role,
        ]);

        return redirect()->route('users.index')->withStatus('User Added Successfully');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'id')->toarray();
        return view('admin.pages.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        try {
            $users = User::findOrFail($id);
            $users->update([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->phone,
                'role_id' => $request->role,
            ]);
            // dd($users);

            return redirect()->route('users.index')->withStatus('User Updated Successfully');
        } catch (QueryException $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.pages.users.show', compact('user'));
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('users.index')->withStatus('User Deleted Successfully');
    }
}
