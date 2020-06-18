<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'img' => 'required'
        ]);
        $base64_image = $request->input('img');
        $picture = Picture::findOrFail($id);
        if (preg_match('/^data:image\/(\w+);base64,/', $base64_image)) {
            $aray = explode(',', $base64_image);
            $data = base64_decode($aray[1]);
            $expension = explode(';', explode('/', $aray[0])[1])[0];
            $expension = $expension == 'jpeg' ? 'jpg' : $expension;
            $fileName = Str::random(20) . '.' . $expension;
            $path = public_path('img/' . $picture->public_folder) . '/' . $fileName;

            file_put_contents($path, $data);
            $picture->filename = $fileName;
            $picture->save();

            return $picture;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
