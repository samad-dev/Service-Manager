<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImpactController extends Controller
{
    public function index()
    {
        $impacts = DB::select('SELECT s.*,IFNULL(c.name,"System") as company FROM `impacts` s left join company c on s.company_id = c.id;');
        return response()->json($impacts);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        DB::insert('INSERT INTO impacts (company_id, title, active) VALUES (?, ?, ?)', [$data['company_id'], $data['title'], $data['active']]);
        return response()->json(['message' => 'Impact created successfully']);
    }

    public function show($id)
    {
        $impact = DB::select('SELECT * FROM impacts WHERE id = ?', [$id]);
        return response()->json($impact);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        DB::update('UPDATE impacts SET company_id = ?, title = ?, active = ? WHERE id = ?', [$data['company_id'], $data['title'], $data['active'], $id]);
        return response()->json(['message' => 'Impact updated successfully']);
    }


    public function companywise($id)
    {
        $status = DB::select('SELECT * FROM impacts WHERE company_id = ?', [$id]);
        return response()->json($status);
    }


    public function destroy($id)
    {
        DB::delete('DELETE FROM impacts WHERE id = ?', [$id]);
        return response()->json(['message' => 'Impact deleted successfully']);
    }
}
