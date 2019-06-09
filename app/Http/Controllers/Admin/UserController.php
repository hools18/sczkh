<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryClaim;
use App\Models\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'users' => User::orderBy('name')->get(),
        ];

        return view('admin.user.index', $data);
    }

    public function edit(Request $request)
    {
        $user = User::find($request->user_id);

        $data = [
            'route' => route('admin.user.update'),
            'user' => $user,
            'roles' => Role::orderBy('name')->where('isActive', true)->get(),
            'categoryes' => CategoryClaim::orderBy('name')->where('isActive', true)->get(),
        ];

        return response()->json([
            'form' => view('admin.user.form', $data)->render(),
        ]);
    }

    public function update(Request $request)
    {
        $user = User::find($request->user_id);
        $user->role_id = $request->role_id;
        $user->category_claim_id = $request->category_claim_id;
        $user->name = $request->name_user;
        $user->save();

        return redirect()->back();
    }

}
