<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatusController extends Controller
{
    public function index()
    {
        $statuses = DB::select('SELECT * FROM status');
        return response()->json($statuses);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        DB::insert('INSERT INTO status (company_id, title, active) VALUES (?, ?, ?)', [
            $data['company_id'],
            $data['title'],
            $data['active'],
            now(),
            now(),
            null
        ]);
        return response()->json(['message' => 'Status created successfully']);
    }

    public function show($id)
    {
        $status = DB::select('SELECT * FROM status WHERE id = ?', [$id]);
        return response()->json($status);
    }


    public function companywise($id)
    {
        $status = DB::select('SELECT * FROM status WHERE company_id = ?', [$id]);
        return response()->json($status);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        DB::update('UPDATE status SET company_id = ?, title = ?, active = ?, updated_at = ? WHERE id = ?', [
            $data['company_id'],
            $data['title'],
            $data['active'],
            now(),
            $id
        ]);
        return response()->json(['message' => 'Status updated successfully']);
    }

    public function destroy($id)
    {
        DB::delete('DELETE FROM status WHERE id = ?', [$id]);
        return response()->json(['message' => 'Status deleted successfully']);
    }
}
