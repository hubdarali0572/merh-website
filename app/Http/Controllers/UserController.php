<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::all();
          $users = User::whereNotIn('user_type', ['SuperAdmin'])->get();

        return view('pages.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.users.add');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    // 1. Fetch the role first
    $role = Role::where('name', 'User')->first();

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    // Always hash passwords!
    $user->password = bcrypt($request->password); 

    // 2. Assign the role ID directly to the column
    if ($role) {
        $user->role_id = $role->id;
    }

    $user->save();

    return redirect()->route('users.index')->with('success', 'User Added Successfully');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);

        return view('pages.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();


        return redirect()->route('users.index')->with('success', 'User Updated SuccessFully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
        }

        return redirect()->route('users.index')->with('danger', 'User Deleted SuccessFully');
    }
}
