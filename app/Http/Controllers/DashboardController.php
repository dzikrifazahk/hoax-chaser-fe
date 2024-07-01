<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard()
    {
        $data = [
            'type_menu' => 'dashboard',
            'total_news' => rand(100, 1000),
            'total_hoax' => rand(100, 1000),
            'total_actual' => rand(100, 1000),
            'total_not_trained' => rand(100, 1000),
            'history_url_request' => []
        ];
        return view('pages.admin.dashboard', $data);
    }

    function createOrUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $body = [
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
        ];

        if ($request->id) {
            $body['id'] = $request->id;
        }
        if ($request->file) {
            $body['file'] = $request->file;
        }
        if ($request->leader) {
            $body['leader'] = $request->leader;
        }

        $response = postData('/community/createOrUpdate', $body);

        if ($response) {
            return redirect()->back()->with('success', 'Community has been created');
        } else {
            return redirect()->back()->with('error', 'Community has not been created');
        }
    }

    function getDataById($id)
    {
        $response = getData('/community/' . $id);

        if ($response) {
            return redirect()->back()->with('success', 'Data has been retrieved');
        } else {
            return redirect()->back()->with('error', 'Data has not been retrieved');
        }
    }

    function delete($id)
    {
        $response = getData('/community/' . $id);

        if ($response) {
            return redirect()->back()->with('success', 'Data has been retrieved');
        } else {
            return redirect()->back()->with('error', 'Data has not been retrieved');
        }
    }
}
