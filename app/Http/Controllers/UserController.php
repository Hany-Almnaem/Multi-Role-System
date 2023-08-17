<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8',
        'role' => 'required|in:user,app_admin,app_manager',
    ]);

    // Create a new user with the validated data
    $user = User::create($validatedData);

    // Redirect to the index view or perform other actions
    return redirect()->route('users.index')->with('success', 'تم اضافة المستخدم ');
}


    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('users.index')->with('success', 'تم تعديل المستخدم ينجاح');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'تم حذف المستخدم ينجاح');
    }

    public function assignRole(Request $request, User $user)
    {
        $user->update(['role' => $request->input('role')]);
        return redirect()->route('users.index')->with('success', 'تم اسناد الدور بنجاح');
    }

}
