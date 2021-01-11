<?php

namespace App\Http\Controllers;
use Crypt;
use Validator;
use App\newstudent;
use Illuminate\Http\Request;
use Auth;
class NewStudent_Controller extends Controller
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
        ini_set('memory_limit','256M');
        // echo "<pre>";
        // print_r($request->all());
        $validator = Validator::make($request->all(), [
           'Email' => "required|unique:newstudents,Email",
        ]);
        if ($validator->fails()) {
        return redirect('/Database')
                    ->withErrors($validator)
                    ->withInput();
          }else{
            echo "<pre>";
            $Data=$request->all();
            // print_r($Data);
        $Image=$request->file('StudentImg');
        $name=$request->file('StudentImg')->getClientOriginalName();
        $path=$request->StudentImg->path();
        $new_name = rand() . '.' . $Image->getClientOriginalExtension();
        // $AllImage=$Data['StudentImg'];
        $Data['StudentImg']=$new_name;
        $StoreImage=move_uploaded_file($path,'StoredImages/'.$new_name);
        // print_r($Data);
        $obj=new newstudent($Data);

        if ($StoreImage && $obj) {
            $obj->save();
            return redirect('/Database')->with('success','Data Submitted Successfuly');
        }else{
            return redirect('/Database')->with('success','Invalid Image !Choose Another Image And Upload Again');
          }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\newstudent  $newstudent
     * @return \Illuminate\Http\Response
     */
    public function show(newstudent $newstudent)
    {
        $Data=$newstudent->get();
        return view('DatabaseNew/ViewUpdateDelete/ViewStudentData')->with('StdData',$Data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\newstudent  $newstudent
     * @return \Illuminate\Http\Response
     */
    public function edit(newstudent $newstudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\newstudent  $newstudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newstudent $newstudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\newstudent  $newstudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(newstudent $newstudent,$id)
    {
        $Data=$newstudent->find($id);
        if ($Data) {
            $Data->delete();
            return redirect('/ViewStudent')->with('success','Data Deleted Successfully');
        }else{
            return redirect('/ViewStudent')->with('success','Error Found');
        }
    }
}
