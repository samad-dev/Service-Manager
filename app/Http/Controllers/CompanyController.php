<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        DB::insert(
            'INSERT INTO company (name, email, telephon, mobile, address_1, address_2, city_id, state_id, country_id, zipcode, status, registration_number, first_name, middle_name, last_name, website, communication, datalines, telebox, domain_id, licences, latitude, longitude, support_email, support_contact, subscription_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [$data['name'], $data['email'], $data['telephon'], $data['mobile'], $data['address_1'], $data['address_2'], $data['city_id'], $data['state_id'], $data['country_id'], $data['zipcode'], $data['status'], $data['registration_number'], $data['first_name'], $data['middle_name'], $data['last_name'], $data['website'], $data['communication'], $data['datalines'], $data['telebox'], $data['domain_id'], $data['licences'], $data['latitude'], $data['longitude'], $data['support_email'], $data['support_contact'], $data['subscription_id']]
        );
        $insertedId = DB::getPdo()->lastInsertId();
        $hashedPassword = Hash::make('12345678');
        DB::insert('INSERT INTO users (first_name, last_name, company_id, name, email, designation_id,  password) VALUES ( ?, ?, ?, ?, ?, ?, ?)', [
            $data['first_name'],
            $data['last_name'],
            $insertedId,
            $data['name'],
            $data['email'],
            '0',
            $hashedPassword,
        ]);
        $user_id = DB::getPdo()->lastInsertId();
        DB::insert('INSERT INTO business_units (company_id, marketing_manager, store_manager, bu_user, name, email, phone, alternate_phone, address_1, address_2, latitude, longitude, city, state, country, zipcode, status, properties) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [$insertedId, $user_id, $user_id, '0', 'BU '.$data['name'], $data['email'], $data['mobile'], $data['mobile'], $data['address_1'], $data['address_2'], $data['latitude'], $data['longitude'], $data['city_id'], $data['state_id'], $data['country_id'], $data['zipcode'], $data['status'], '[]']);
        $buId = DB::getPdo()->lastInsertId();
        DB::table('bu_group')->insertGetId([
            'title' => $data['name']." Group",
            'bu_id' => $buId,
            'company_id' => $insertedId,
            'created_by' => 1,
        ]);
        DB::insert('INSERT INTO impacts (company_id, title, active) VALUES (?, ?, ?)', [$insertedId, 'Mediocer', $data['status']]);
        DB::insert('INSERT INTO status (company_id, title, active) VALUES (?, ?, ?)', [
            $insertedId,
            'Open',
            $data['status'],
        ]);
        DB::insert('INSERT INTO status (company_id, title, active) VALUES (?, ?, ?)', [
            $insertedId,
            'Closed',
            $data['status'],
        ]);
        DB::insert('INSERT INTO types (company_id, title, parent_id, active) VALUES (?, ?, ?, ?)', [
            $insertedId,
            'Basic Type',
            '0',
            $data['status']
        ]);
        DB::insert('INSERT INTO priority (company_id, title, active, sla) VALUES (?, ?, ?, ?)', [$insertedId, 'High', $data['status'], '1']);
        


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