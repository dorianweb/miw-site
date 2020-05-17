<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Page;
use App\Social;
use App\Subpage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       // return Social::all();
        return  Page::with('subpages')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        Social::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return new Social($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        return 'cannot access here';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        return 'cannot access here';
    }
}
