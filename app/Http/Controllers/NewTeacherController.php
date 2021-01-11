<?php

namespace App\Http\Controllers;
use Crypt;
use Auth;
use Validator;
use App\newteacher;
use Illuminate\Http\Request;

class NewTeacherController extends Controller
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
       
         // echo "<pre>";
         // $Data=$request->all();
         // print_r($Data);
         $validator = Validator::make($request->all(), [
           'TeacherEmail' => "required|unique:newteachers,TeacherEmail",
        ]);

        if ($validator->fails()) {
        return redirect('/Database')
                    ->withErrors($validator)
                    ->withInput();
          }else{
            echo "<pre>";
            $Data=$request->all();
            // print_r($Data);
            // Image File
        $Image=$request->file('TeacherImage');
        $Imagename=$request->file('TeacherImage')->getClientOriginalName();
        $Imagepath=$request->TeacherImage->path();
        $new_name_Image = rand() . '.' . $Image->getClientOriginalExtension();
        $Data['TeacherImage']=$new_name_Image;
        $StoreImage=move_uploaded_file($Imagepath,'StoredImages/'.$new_name_Image);
        // Attachd Pdf File
        $File1=$request->file('TeacherAtFileOne');
        $Filename1=$request->file('TeacherAtFileOne')->getClientOriginalName();
        $Filepath1=$request->TeacherAtFileOne->path();
        $new_name_File1 = rand() . '.' . $File1->getClientOriginalExtension();
        $Data['TeacherAtFileOne']=$new_name_File1;
        $StoreFile1=move_uploaded_file($Filepath1,'StoredFiles/'.$new_name_File1);


        //Attached Pdf File
        $File2=$request->file('TeacherAtFileTwo');
        $Filename2=$request->file('TeacherAtFileTwo')->getClientOriginalName();
        $Filepath2=$request->TeacherAtFileTwo->path();
        $new_name_File2 = rand() . '.' . $File2->getClientOriginalExtension();
        $Data['TeacherAtFileTwo']=$new_name_File2;
        $StoreFile2=move_uploaded_file($Filepath2,'StoredFiles/'.$new_name_File2);

        // print_r($Data);
        $obj=new newteacher($Data);
        // echo "<br>";
        if ($StoreImage && $StoreFile1 && $StoreFile2 && $obj) {
         
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
     * @param  \App\newteacher  $newteacher
     * @return \Illuminate\Http\Response
     */
    public function show(newteacher $newteacher)
    {
        $Data=$newteacher->get();
        return view('DatabaseNew/ViewUpdateDelete/ViewTeacherData')->with('TeacherData',$Data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\newteacher  $newteacher
     * @return \Illuminate\Http\Response
     */
    public function edit(newteacher $newteacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\newteacher  $newteacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newteacher $newteacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\newteacher  $newteacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(newteacher $newteacher,$id)
    {
         $Data=$newteacher->find($id);
        if ($Data) {
            $Data->delete();
            return redirect('/ViewTeacher')->with('success','Data Deleted Successfully');
        }else{
            return redirect('/ViewTeacher')->with('success','Error Found');
        }
    }
}
