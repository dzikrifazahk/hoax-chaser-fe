<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    function index()
    {
        $data = [
            'community' => getData('/community'),
        ];

        // dd($data['community']);

        return view('pages.admin.community', $data);
    }
}
