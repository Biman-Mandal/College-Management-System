<?php

namespace App\Http\Controllers;

use App\portaldata;
use Illuminate\Http\Request;

class PortalDataCntroller extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // print_r($request->all());
        // exit();
         portaldata::create($request->all());
         return redirect('StudentPotal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\portaldata  $portaldata
     * @return \Illuminate\Http\Response
     */
    public function show(portaldata $portaldata)
    {
        $Data=$portaldata->get();
        return view('DatabaseNew/ViewUpdateDelete/PortalApplicationData')->with('PortalAppD',$Data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\portaldata  $portaldata
     * @return \Illuminate\Http\Response
     */
    public function edit(portaldata $portaldata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\portaldata  $portaldata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, portaldata $portaldata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\portaldata  $portaldata
     * @return \Illuminate\Http\Response
     */
    public function destroy(portaldata $portaldata,$id)
    {
          $Data=$portaldata->find($id);
          // print_r($Data);
        if ($Data) {
            $Data->delete();
            return redirect('/ApplicationPotal')->with('success','Data Deleted Successfully');
        }else{
            return redirect('/ApplicationPotal')->with('success','Error Found');
        }
    }
}
