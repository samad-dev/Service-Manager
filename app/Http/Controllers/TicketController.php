<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = DB::select('SELECT * FROM tickets');
        return response()->json($tickets);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        DB::insert('INSERT INTO tickets (external_id, ticketID, ticket_counter, title, description, completed_date, due_date, company_id, completed_by, business_unit_id, vendor_id, vendor_type_id, reported_by, assigned_to, mode_of_complaint, sub_type_id, priority_id, impact_id, status_id, store_contact) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [$data['external_id'], $data['ticketID'], $data['ticket_counter'], $data['title'], $data['description'], $data['completed_date'], $data['due_date'], $data['company_id'], $data['completed_by'], $data['business_unit_id'], $data['vendor_id'], $data['vendor_type_id'], $data['reported_by'], $data['assigned_to'], $data['mode_of_complaint'], $data['sub_type_id'], $data['priority_id'], $data['impact_id'], $data['status_id'], $data['store_contact']]);

        return response()->json(['message' => 'Ticket created successfully']);
    }

    public function show($id)
    {
        $ticket = DB::select('SELECT * FROM tickets WHERE id = ?', [$id]);
        return response()->json($ticket);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        DB::update('UPDATE tickets SET external_id = ?, ticketID = ?, ticket_counter = ?, title = ?, description = ?, completed_date = ?, due_date = ?, company_id = ?, completed_by = ?, business_unit_id = ?, vendor_id = ?, vendor_type_id = ?, reported_by = ?, assigned_to = ?, mode_of_complaint = ?, sub_type_id = ?, priority_id = ?, impact_id = ?, status_id = ?, store_contact = ? WHERE id = ?', [$data['external_id'], $data['ticketID'], $data['ticket_counter'], $data['title'], $data['description'], $data['completed_date'], $data['due_date'], $data['company_id'], $data['completed_by'], $data['business_unit_id'], $data['vendor_id'], $data['vendor_type_id'], $data['reported_by'], $data['assigned_to'], $data['mode_of_complaint'], $data['sub_type_id'], $data['priority_id'], $data['impact_id'], $data['status_id'], $data['store_contact'], $id]);

        return response()->json(['message' => 'Ticket updated successfully']);
    }

    public function destroy($id)
    {
        DB::delete('DELETE FROM tickets WHERE id = ?', [$id]);
        return response()->json(['message' => 'Ticket deleted successfully']);
    }
}
