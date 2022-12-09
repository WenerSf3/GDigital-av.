<?php

namespace App\Http\Controllers;

use App\Models\Links;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Links::all();
       return response()->json([
           'links' => $links
       ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $link = Links::create($request->all());
 
        return response()->json([
            'message' => "Product saved successfully!",
            'product' => $link
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Links  $links
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Links $links)
    {
        $link->update($request->all());
 
       return response()->json([
           'message' => "link updated successfully!",
           'link' => $link
       ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Links  $links
     * @return \Illuminate\Http\Response
     */
    public function destroy(Links $links)
    {
        $link->delete();
 
       return response()->json([
           'message' => "Product deleted successfully!",
       ], 200);
    }
}
