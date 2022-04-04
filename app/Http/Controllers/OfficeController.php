<?php

namespace App\Http\Controllers;


use App\Http\Resources\EmployeeResource;
use App\Http\Resources\OfficeCollection;
use App\Http\Resources\OfficeResource;
use App\Models\Employee;
use App\Models\Office;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(new OfficeCollection(Office::all()),Response::HTTP_OK);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return OfficeResource
     */
    public function store(Request $request)
    {
        $office = Office::create($request->only([
            'code','name'
        ]));

        return new OfficeResource($office);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Office  $office
     * @return OfficeResource
     */
    public function show(Office $office)
    {
        return new OfficeResource($office);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Office  $office
     * @return OfficeResource
     */
    public function update(Request $request, Office $office)
    {
        $office = Office::update($request->only([
            'code','name'
        ]));

        return new OfficeResource($office);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Office $office)
    {
        $office->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
