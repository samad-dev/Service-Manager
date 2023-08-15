<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuGroupController extends Controller
{
    public function index()
    {
        $buGroups = DB::select('SELECT * FROM bu_group');
        return response()->json($buGroups);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        DB::insert('INSERT INTO bu_group (title, bu_id, company_id, created_by) VALUES (?, ?, ?, ?)', [$data['title'], $data['bu_id'], $data['company_id'], $data['created_by']]);
        return response()->json(['message' => 'BU group created successfully']);
    }

    public function show($id)
    {
        $buGroup = DB::select('SELECT * FROM bu_group WHERE id = ?', [$id]);
        return response()->json($buGroup);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        DB::update('UPDATE bu_group SET title = ?, bu_id = ?, company_id = ?, created_by = ? WHERE id = ?', [$data['title'], $data['bu_id'], $data['company_id'], $data['created_by'], $id]);
        return response()->json(['message' => 'BU group updated successfully']);
    }

    public function companywise($id)
    {
        $status = DB::select('SELECT * FROM bu_group WHERE company_id = ?', [$id]);
        return response()->json($status);
    }

    public function destroy($id)
    {
        DB::delete('DELETE FROM bu_group WHERE id = ?', [$id]);
        return response()->json(['message' => 'BU group deleted successfully']);
    }
}
