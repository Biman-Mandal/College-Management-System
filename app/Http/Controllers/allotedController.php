<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AllotedModel;
class allotedController extends Controller
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
        echo "<pre>";
        $Data=$request->input();
        // print_r($Data);
        $obj=new AllotedModel($Data);
        
        if ($obj) {
            $obj->save();
            return redirect('/Database')->with('success','Data Submitted Success');
        }else{
            return redirect('/Database')->with('success','Error In DataSave ..Try After Sometime');
        }
        exit();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(AllotedModel $allotedModel)
    {
        $Data=$allotedModel->get();
        return view('DatabaseNew/ViewUpdateDelete/ViewAllotedData')->with('AddlotedData',$Data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllotedModel $allotedModel,$id)
    {
        //
        $Data=$allotedModel->find($id);
        if ($Data) {
            $Data->delete();
            return redirect('/ViewAlloted')->with('success','Data Deleted Successfully');
        }else{
            return redirect('/ViewAlloted')->with('success','Error Found');
        }
    }
}
