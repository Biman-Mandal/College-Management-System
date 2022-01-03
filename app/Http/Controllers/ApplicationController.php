<?php

namespace App\Http\Controllers;
use Crypt;
use Session;
use App\application;
use App\profile;
use Illuminate\Http\Request;
use Auth;
use Validator;
// use path;
class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
     public function profile(application $Application)
    {
        $Email=Session::get('Email');
        $user=$Application::where("Email",$Email)->get();
        $img=$user[0]['StudentImg'];
        // print_r($user);
        return view('Apply.Application-Profile')->with('Image',$img);

    }
    public function profileAction($id,profile $Profile,Request $request){
        echo "<pre>";
        $Data=$Profile::find($id);
        // print_r($Data);
        $RequestData=$request->all();
        // print_r($RequestData);
        $Data->Username=$request->input('Username');
        $Data->Email=$request->input('Email');
        $Data->MobileNumber=$request->input('MobileNumber');
        $Data->City=$request->input('City');
        $Data->State=$request->input('State');
        $Data->Course=$request->input('Course');
        // exit();
        $Data->save();
        if ($Data->save()) {
            return redirect('/ApplicationProfile')
                    ->with('success','Profile Data Updated Success');
        }
        // print_r($RequestData);
        // print_r($id);
        // print_r($Data);
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
        /*print_r($request->all());
        exit();*/

        echo "<pre>";
        // $errors = [
        //  'Email.required|unique' => 'Please enter full name'
        //   ];
        $validator = Validator::make($request->all(), [
           'Email' => "required|unique:applications,Email",
        ]);
        if ($validator->fails()) {
        return redirect('/Application')
                    ->withErrors($validator)
                    ->withInput();
          }else{
        //
        // $Data=$request->input();
        $AllData=$request->all();
        $Image=$request->file('StudentImg');
        $name=$request->file('StudentImg')->getClientOriginalName();
        $path=$request->StudentImg->path();
        $new_name = rand() . '.' . $Image->getClientOriginalExtension();
        // print_r($new_name);
        // echo "<br>";
        // print_r($name);
        // echo "<br>";
        $AllImage=$AllData['StudentImg'];
        // print_r($AllImage);
        $AllData['StudentImg']=$new_name;
        print_r($AllData);
        $user=new application($AllData);
        // echo "<br>";
        // print_r($path);
        //   exit();
        $user->save();
         if ($user->save()) {
             move_uploaded_file($path,'StoredImages/'.$new_name);
             return redirect('/Application')
             ->with('success','Application Form Data Has Been Submitted Successfully');
         }
         }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(application $application)
    {
        $Data=$application->get();
        return view('DatabaseNew/ViewUpdateDelete/AddmissionApplicaton')->with('AddmisionApp',$Data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(application $application,Request $request)
    {
        // print_r($application);
        $Email=Session::get('Email');
        $user=$application::where("Email",$Email)->get();
        // echo "<pre>";
        return view('Apply.ApplicationUpdateForm')->with('UserData',$user);
        // print_r($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {
        $DB=new application;
        $user=$DB::find($id);
        $user->Course=$request->input('Course');
        $user->Firstname=$request->input('Firstname');
        $user->Lastname=$request->input('Lastname');
        $user->Address=$request->input('Address');
        $user->District=$request->input('District');
        $user->Gender=$request->input('Gender');
        $user->LandlineNo=$request->input('LandlineNo');
        $user->MobileNumber=$request->input('MobileNumber');
        $user->Email=$request->input('Email');
        $user->AdmissionCategory=$request->input('AdmissionCategory');
        $user->State=$request->input('State');
        $user->DateOfBirth=$request->input('DateOfBirth');
        $user->FatherName=$request->input('FatherName');
        $user->MotherName=$request->input('MotherName');
        $user->ParentNumber=$request->input('ParentNumber');
        $user->FamilyIncome=$request->input('FamilyIncome');
        $user->FatherProfession=$request->input('FatherProfession');
        $user->MotherProfession=$request->input('MotherProfession');
        $user->ParentEmail=$request->input('ParentEmail');
        $user->School10th=$request->input('School10th');
        $user->Total10thMarks=$request->input('Total10thMarks');
        $user->thBoardCouncil10=$request->input('thBoardCouncil10');
        $user->Passing10thYear=$request->input('Passing10thYear');
        $user->thSchool12=$request->input('thSchool12');
        $user->thmarks12=$request->input('thmarks12');
        $user->thGroup12=$request->input('thGroup12');
        $user->thPhysicsMarks12=$request->input('thPhysicsMarks12');
        $user->thChemistryMarks12=$request->input('thChemistryMarks12');
        $user->thMathematicsMarks12=$request->input('thMathematicsMarks12');
        $user->thBoardCouncil12=$request->input('thBoardCouncil12');
        $user->thPassingYear12=$request->input('thPassingYear12');
        // exit();
        $user->save();
        return redirect('ApplicationUpdate')->with('success','Data Has Been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(application $application)
    {
          Auth::logout();
          Session::flush();
          return redirect('/ApplyOnline')->with('success','Logout Successfull');
    }
    public function delete(application $application,$id){
        $Data=$application->find($id);
          // print_r($Data);
          //   exit();
        if ($Data) {
            $Data->delete();
            return redirect('/ApplicationAddmission')->with('success','Data Deleted Successfully');
        }else{
            return redirect('/ApplicationAddmission')->with('success','Error Found');
        }
    }
}
