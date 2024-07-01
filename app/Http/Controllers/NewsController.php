<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index()
    {
        $data = [
            'news' => getData('/news/getAll'),
        ];

        return view('pages.admin.news', $data);
    }

    function createOrUpdate(Request $request)
    {
        $body = [
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author,
            'source' => $request->source,
            'publishDate' => $request->publish_date,
            'newsKeywords' => $request->news_keywords,
            'ambigousKeywords' => $request->ambigous_keywords,
            'isTraining' => $request->is_training,
            'label' => $request->label,
            'location' => $request->location,
            'url' => $request->url,
            'urlRequestId' => $request->url_request_id,
        ];

        $response = postData('/news/createOrUpdate', $body);

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
        $response = deleteData('/news/' . $id);

        if ($response) {
            return redirect()->back()->with('success', 'Data has been retrieved');
        } else {
            return redirect()->back()->with('error', 'Data has not been retrieved');
        }
    }
}
