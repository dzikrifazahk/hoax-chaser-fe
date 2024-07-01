<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    function index()
    {
        $data = [
            'community' => getData('/community'),
            'users' => getData('/users'),
        ];

        // dd($data['community']);

        return view('pages.admin.community', $data);
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
            'leader' => $request->leader
        ];

        if ($request->id) {
            $body['id'] = $request->id;
        }
        // if ($request->file) {
        //     $body['file'] = $request->file;
        // }

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
        $response = deleteData('/community/' . $id);

        if ($response) {
            return redirect()->back()->with('success', 'Data has been retrieved');
        } else {
            return redirect()->back()->with('error', 'Data has not been retrieved');
        }
    }
}
