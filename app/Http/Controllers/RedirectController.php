<?php

namespace App\Http\Controllers;

use App\Models\Redirect;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $redirects = Redirect::all();
       return response()->json([
           'redirects' => $redirects
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
        $redirect = Redirect::create($request->all());
 
       return response()->json([
           'message' => "Product saved successfully!",
           'redirects' => $redirect
       ], 200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Redirect  $redirect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Redirect $redirect)
    {
        $redirect->update($request->all());
 
        return response()->json([
            'message' => "link updated successfully!",
            'redirects' => $redirect
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Redirect  $redirect
     * @return \Illuminate\Http\Response
     */
    public function destroy(Redirect $redirect)
    {
        $redirect->delete();
 
        return response()->json([
            'message' => "Product deleted successfully!",
        ], 200);
    }
}
