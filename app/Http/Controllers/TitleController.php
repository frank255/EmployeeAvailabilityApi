<?php

namespace App\Http\Controllers;


use App\Http\Resources\TitleCollection;
use App\Http\Resources\TitleResource;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(new TitleCollection(Title::all()),Response::HTTP_OK);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return TitleResource
     */
    public function store(Request $request)
    {
        $title = Title::create($request->only([
            'code','name'
        ]));

        return new TitleResource($title);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Title  $title
     * @return TitleResource
     */
    public function show(Title $title)
    {
        return new TitleResource($title);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Title  $title
     * @return TitleResource
     */
    public function update(Request $request, Title $title)
    {
        $title = Title::update($request->only([
            'code','name'
        ]));

        return new TitleResource($title);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Title $title)
    {
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
