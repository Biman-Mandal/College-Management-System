<?php

namespace App\Http\Controllers;

use App\PortalData;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class PortalDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('StudentPortal.portal-data-registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Application|Redirector|RedirectResponse
     */
    public function store(Request $request)
    {
        PortalData::create($request->all());
        return redirect('student-portal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PortalData  $portal_data
     * @return Response
     */
    public function show(PortalData $portal_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PortalData  $portal_data
     * @return Response
     */
    public function edit(PortalData $portal_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PortalData  $portal_data
     * @return Response
     */
    public function update(Request $request, PortalData $portal_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PortalData  $portal_data
     * @return Response
     */
    public function destroy(PortalData $portal_data)
    {
        //
    }
}
