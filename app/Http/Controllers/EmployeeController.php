<?php

namespace App\Http\Controllers;

use App\Http\Resources\EmployeeCollection;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {

        return response()->json(new EmployeeCollection(Employee::all()),Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return EmployeeResource
     */
    public function store(Request $request)
    {
        $employee = Employee::create($request->only([
            'name','title','gender','office','presence','departureTime','returnTime','reason','phone'
        ]));

        return new EmployeeResource($employee);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return EmployeeResource
     */
    public function show(Employee $employee)
    {
        return new EmployeeResource($employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return EmployeeResource
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->update($request->only([
            'name','title','gender','office','presence','departureTime','returnTime','reason','phone'
        ]));

        return new EmployeeResource($employee);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
