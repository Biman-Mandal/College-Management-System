<?php

namespace App\Http\Controllers;
use Crypt;
use Auth;
use App\portal;
use Illuminate\Http\Request;

class protalController extends Controller
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
       /* print_r($request->all());
        exit();*/
        $user=new portal;
        $user->UniversityRoll=$request->input('UniversityRoll');
        $user->Password=Crypt::encrypt($request->input('Password'));
        $user->Name=$request->input('Name');
        $user->MoblileNumber=$request->input('MoblileNumber');
        $user->Email=$request->input('Email');
        $user->Depertment=$request->input('Depertment');
        
        // $DBemail=$user->Email;
        // $DBinputEmail=$user->Email=$request->input('Email');
        $user->save();
        return view('StudentPortal.RegisterJS');
        
        // if ($DBemail==$DBinputEmail) {
        //  return redirect('/Registration')
        //  ->with('Error','Same email Address Can not be stored');
        // }elseif ($DBemail!=$DBinputEmail) {
        //     
        // }
        
    }
    public function Login(Request $request)
    {
         /*print_r($request->all());
        exit();*/
        $user=portal::where("Email",$request->input("Email"))->get();
        $user[0]->Password;
        $user[0]->Email;
        $UserEmail=$user[0]->Email;
        $DycryptPass=Crypt::decrypt($user[0]->Password);
         if (($DycryptPass==$request->input("Password")) && $UserEmail==$request->input("Email"))
            {
            //Put('SessionName->Session Value.. We can acces the table value from this also')
               /*$request->Session()->put('user',$request->input('LoginEmail'));
               $request->Session()->put('city',$city);*/
                return view('StudentPortal.LoginJs');
            }else{
                return redirect('/StudentPotal');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\portal  $portal
     * @return \Illuminate\Http\Response
     */
    public function show(portal $portal)
    {
        $Data=$portal->get();
        return view('DatabaseNew/ViewUpdateDelete/ViewPortalProfile')->with('PortalDataP',$Data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\portal  $portal
     * @return \Illuminate\Http\Response
     */
    public function edit(portal $portal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\portal  $portal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, portal $portal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\portal  $portal
     * @return \Illuminate\Http\Response
     */
    public function destroy(portal $portal,$id)
    {
        $Data=$portal->find($id);
          // print_r($Data);
        if ($Data) {
            $Data->delete();
            return redirect('/ProfilePotal')->with('success','Data Deleted Successfully');
        }else{
            return redirect('/ProfilePotal')->with('success','Error Found');
        }
    }
}
