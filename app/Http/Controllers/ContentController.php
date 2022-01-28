<?php

namespace App\Http\Controllers;

use App\Content;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = content::all();
        return view('admin/content/content', compact('content'));
    }

    public function create(Request $request)
    {
        $content = new content();
        $content->name = $request->name;
        $content->detail = $request->detail;


        $content->save();
        return redirect()->route('content');
    }

    public function edit($id)
    {
        $content = content::find($id);
        return view('admin.content.edit', compact('content'));
    }

    public function update(Request $request, $id)
    {

        content::updateOrCreate(
            [
                'id' => $id
            ],
            [
                'name' => $request->name,
                'detail' => $request->detail,
            ]
        );
        return redirect()->route('content');
    }

    public function destroy($id)
    {
        content::destroy($id);
        return redirect()->route('content');
    }
}
