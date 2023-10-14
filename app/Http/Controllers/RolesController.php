<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    //
    public function create(Request $request)
    {
        $role = new Role();
        $role->name = $request->name;
        $role->save();

        return response()->json(true);
    }

    public function update(Request $request, Role $role)
        {
//            $role = new Role();
//            $role->name = $request->name;
//            $role->save();

            $role->update($request->only('name'));

            return response()->json($role);
        }

    public function index()
    {
        $roles = Role::get();
        return response()->json($roles);
    }

    public function show(Role $roleId)
    {

        return $roleId->users->where('id', 1);
    }
}
