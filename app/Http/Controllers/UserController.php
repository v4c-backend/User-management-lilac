<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('department', 'designation')->get();
        return view('users.index', compact('users'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $users = User::with('department', 'designation')
            ->where('name', 'like', "%{$query}%")
            ->orWhereHas('department', fn($q) => $q->where('name', 'like', "%{$query}%"))
            ->orWhereHas('designation', fn($q) => $q->where('name', 'like', "%{$query}%"))
            ->get();

        return response()->json($users);
    }
}
