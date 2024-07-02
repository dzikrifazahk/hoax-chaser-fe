<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DebunkingController extends Controller
{
    function index()
    {
        $data = [
            'debunking' => getData('/debunking'),
            'users' => getData('/users'),
        ];

        // dd($data['debunking']);
        return view('pages.admin.debunking', $data);
    }

    function detail($id)
    {
        $data = [
            'debunking' => getData('/debunking/getById?idDebunking=' . $id),
        ];

        // dd($data);
        return view('pages.admin.detail-debunking', $data);
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

        $response = postData('/debunking/createOrUpdate', $body);

        if ($response) {
            return redirect()->back()->with('success', 'debunking has been created');
        } else {
            return redirect()->back()->with('error', 'debunking has not been created');
        }
    }

    function getDataById($id)
    {
        $response = getData('/debunking/' . $id);

        if ($response) {
            return redirect()->back()->with('success', 'Data has been retrieved');
        } else {
            return redirect()->back()->with('error', 'Data has not been retrieved');
        }
    }

    function delete($id)
    {
        $response = deleteData('/debunking/' . $id);

        if ($response) {
            return redirect()->back()->with('success', 'Data has been retrieved');
        } else {
            return redirect()->back()->with('error', 'Data has not been retrieved');
        }
    }
}
