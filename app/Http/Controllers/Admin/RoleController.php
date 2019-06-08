<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 08.06.2019
 * Time: 15:57
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $data = [
            'roles' => Role::orderBy('name')->get(),
        ];
        return view('admin.role.index', $data);
    }

    public function showForm()
    {
        $data = [
            'route' => route('admin.role.create'),
        ];
        return response()->json([
            'form' => view('admin.role.form', $data)->render()
        ]);
    }

    public function create(Request $request)
    {

        Role::create([
            'name' => $request->name_role,
            'sys_name' => $request->sys_name_role,
            'isActive' => filter_var($request->active_role, FILTER_VALIDATE_BOOLEAN),
        ]);
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $role = Role::find($request->role_id);
        $data = [
            'role' => $role,
            'route' => route('admin.role.update'),
        ];
        return response()->json([
            'form' => view('admin.role.form', $data)->render()
        ]);
    }

    public function update(Request $request)
    {
        $role = Role::find($request->role_id);
        $role->name = $request->name_role;
        $role->sys_name = $request->sys_name_role;
        $role->isActive = filter_var($request->active_role, FILTER_VALIDATE_BOOLEAN);
        $role->save();

        return redirect()->back();
    }


}