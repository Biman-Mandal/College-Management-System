<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\employeeModel;
class employeeController extends Controller
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
        
        $validator = Validator::make($request->all(), [
           'EmployeEmail' => "required|unique:newemployes,EmployeEmail",
        ]);
        if ($validator->fails()) {
        return redirect('/Database')
                    ->withErrors($validator)
                    ->withInput();
          }else{
            $Data=$request->all();
            echo "<pre>";
            

            $Image=$request->file('EmployeImage');
            $Imagename=$request->file('EmployeImage')->getClientOriginalName();
            $Imagepath=$request->EmployeImage->path();
            $new_name_Image = rand() . '.' . $Image->getClientOriginalExtension();
            $Data['EmployeImage']=$new_name_Image;
            $StoreImage=move_uploaded_file($Imagepath,'StoredImages/'.$new_name_Image);
            
            $File1=$request->file('EmployeAtFileOne');
            $Filename1=$request->file('EmployeAtFileOne')->getClientOriginalName();
            $Filepath1=$request->EmployeAtFileOne->path();
            $new_name_File1 = rand() . '.' . $File1->getClientOriginalExtension();
            $Data['EmployeAtFileOne']=$new_name_File1;
            // print_r($Data);
            $obj=new employeeModel($Data);

             // exit();
            $StoreFile1=move_uploaded_file($Filepath1,'StoredFiles/'.$new_name_File1);
            if ($StoreImage && $StoreFile1 && $obj){
                $obj->save();
                return redirect('/Database')->with('success','Data Inserted Success');
            }else{
                return redirect('/Database')->with('success','File/Image Not Supported Choose Different One');
            }
           
           
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(employeeModel $EmployeeModel)
    {
        $Data=$EmployeeModel->get();
        return view('DatabaseNew/ViewUpdateDelete/ViewEmployeeData')->with('EmplyeeData',$Data);
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
    public function destroy(employeeModel $EmployeeModel,$id)
    {
         $Data=$EmployeeModel->find($id);
        if ($Data) {
            $Data->delete();
            return redirect('/ViewEmployee')->with('success','Data Deleted Successfully');
        }else{
            return redirect('/ViewEmployee')->with('success','Error Found');
        }
    }
    
}
