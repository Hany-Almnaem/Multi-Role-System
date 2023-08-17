<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User; // Import the User model
use App\Models\Request as UserRequest;

class RequestController extends Controller
{
    public function index()
    {
        $requests = UserRequest::all();
        return view('requests.index', compact('requests'));
    }
    public function create()
    {
        $users = User::all(); // Retrieve all users from the database
        return view('requests.create', compact('users'));
    }
    public function store(Request $request)
    {
        $requestData = $request->all();

        // Create a new request using the UserRequest model
        UserRequest::create($requestData);

        return redirect()->route('requests.index')->with('success', 'تم انشاء الطلب بنجاح');
    }

    public function show(UserRequest $request)
    {
        return view('requests.show', compact('request'));
    }

    public function edit(UserRequest $request)
{
    $users = User::all(); // Retrieve all users from the database
    return view('requests.edit', compact('request', 'users'));
}

public function update(Request $request, UserRequest $userRequest)
{
    $userRequest->fill($request->all());
    $userRequest->save();
    return redirect()->route('requests.index')->with('success', 'تم تحديث الطلب بنجاح');
}


    public function destroy(UserRequest $request)
    {
        $request->delete();
        return redirect()->route('requests.index')->with('success', 'تم حذف الطلب بنجاح ');
    }

    public function approve(Request $httpRequest, UserRequest $userRequest)
{
    $userRequest->update(['status' => 'Approved']);
    // Add notification logic to inform the user
    return redirect()->route('requests.index')->with('success', 'تمت الموافقة على الطلب');
}


    public function reject(Request $request, UserRequest $userrequest)
    {
        $request->update(['status' => 'Rejected']);
        // Add notification logic to inform the user
        return redirect()->route('requests.index')->with('success', 'الطلب مرفوض');
    }
}
