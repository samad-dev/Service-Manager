<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class CompanyController extends Controller
{
    public function index()
    {
        $companies = DB::select('SELECT * FROM company');
        return response()->json($companies);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephon' => 'nullable|string|max:15',
            'mobile' => 'nullable|string|max:15',
            'address_1' => 'nullable|string|max:255',
            'address_2' => 'nullable|string|max:255',
            'city_id' => 'nullable|integer',
            'state_id' => 'nullable|integer',
            'country_id' => 'nullable|integer',
            'zipcode' => 'nullable|string|max:20',
            'status' => 'required|integer|in:0,1',
            'created_at' => 'required|date_format:Y-m-d H:i:s',
            'registration_number' => 'nullable|string|max:50',
            'first_name' => 'nullable|string|max:100',
            'middle_name' => 'nullable|string|max:100',
            'last_name' => 'nullable|string|max:100',
            'website' => 'nullable|string|max:255',
            'communication' => 'nullable|string|max:100',
            'datalines' => 'nullable|string|max:255',
            'telebox' => 'nullable|string|max:255',
            'domain_id' => 'nullable|integer',
            'licences' => 'nullable|string|max:255',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'support_email' => 'nullable|email|max:255',
            'support_contact' => 'nullable|string|max:255',
            'subscription_id' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([$validator->errors()], 400);
        }

        DB::insert(
            'INSERT INTO company (name, email, telephon, mobile, address_1, address_2, city_id, state_id, country_id, zipcode, status, created_at, registration_number, first_name, middle_name, last_name, website, communication, datalines, telebox, domain_id, licences, latitude, longitude, support_email, support_contact, subscription_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [$data['name'], $data['email'], $data['telephon'], $data['mobile'], $data['address_1'], $data['address_2'], $data['city_id'], $data['state_id'], $data['country_id'], $data['zipcode'], $data['status'], $data['created_at'], $data['registration_number'], $data['first_name'], $data['middle_name'], $data['last_name'], $data['website'], $data['communication'], $data['datalines'], $data['telebox'], $data['domain_id'], $data['licences'], $data['latitude'], $data['longitude'], $data['support_email'], $data['support_contact'], $data['subscription_id']]
        );
        $insertedId = DB::getPdo()->lastInsertId();


        return response()->json(['message' => 'Company created successfully']);
    }

    public function show($id)
    {
        $company = DB::select('SELECT * FROM company WHERE id = ?', [$id]);
        return response()->json($company);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        DB::update('UPDATE company SET name = ?, email = ?, telephon = ?, mobile = ?, address_1 = ?, address_2 = ?, city_id = ?, state_id = ?, country_id = ?, zipcode = ?, status = ?, created_at = ?, registration_number = ?, first_name = ?, middle_name = ?, last_name = ?, website = ?, communication = ?, datalines = ?, telebox = ?, domain_id = ?, licences = ?, latitude = ?, longitude = ?, support_email = ?, support_contact = ?, subscription_id = ? WHERE id = ?', [$data['name'], $data['email'], $data['telephon'], $data['mobile'], $data['address_1'], $data['address_2'], $data['city_id'], $data['state_id'], $data['country_id'], $data['zipcode'], $data['status'], $data['created_at'], $data['registration_number'], $data['first_name'], $data['middle_name'], $data['last_name'], $data['website'], $data['communication'], $data['datalines'], $data['telebox'], $data['domain_id'], $data['licences'], $data['latitude'], $data['longitude'], $data['support_email'], $data['support_contact'], $data['subscription_id'], $id]);

        return response()->json(['message' => 'Company updated successfully']);
    }

    public function destroy($id)
    {
        DB::delete('DELETE FROM company WHERE id = ?', [$id]);
        return response()->json(['message' => 'Company deleted successfully']);
    }
}