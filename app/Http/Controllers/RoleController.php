<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RoleController extends Controller
{
    public function index()
    {
        $roles = DB::select('SELECT * FROM roles');
        return response()->json($roles);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        DB::insert('INSERT INTO roles (company_id, title) VALUES (?, ?)',
            [$data['company_id'], $data['title']]);

        return response()->json(['message' => 'Role created successfully']);
    }

    public function show($id)
    {
        $role = DB::select('SELECT * FROM roles WHERE id = ?', [$id]);
        return response()->json($role);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        DB::update('UPDATE roles SET company_id = ?, title = ? WHERE id = ?', [$data['company_id'], $data['title'], $id]);

        return response()->json(['message' => 'Role updated successfully']);
    }

    public function destroy($id)
    {
        DB::delete('DELETE FROM roles WHERE id = ?', [$id]);
        return response()->json(['message' => 'Role deleted successfully']);
    }
}
