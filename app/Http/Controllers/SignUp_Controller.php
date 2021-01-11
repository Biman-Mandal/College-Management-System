<?php

namespace App\Http\Controllers;
use Crypt;
use Hash;
use Validator;
use App\profile;
use Illuminate\Http\Request;
use Auth;
class SignUp_Controller extends Controller
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
         
        $validator = Validator::make($request->all(), [ // <---
            'Password' => 'min:6|required_with:PageRetypePassword|same:PageRetypePassword',
            'PageRetypePassword' => 'min:6',
           'Email' => "required|unique:profiles,Email",
           'MobileNumber'=>'min:10 | max:12',
        ]);
        /* $request->validate([
           ]);*/
           if ($validator->fails()) {
        return redirect('/SignUpApply')
                    ->withErrors($validator)
                    ->withInput();
          }
            echo "<pre>";
            echo "<br>";
            $user=$request->input();
            $Pass=$request->input('Password');
                $hashed = Hash::make($Pass, [
                        'rounds' => 12,
                    ]);
            echo "<pre>";
            echo $hashed;
            $user['Password']=$hashed;
            $user=new profile($user);
            // $Pass=$hashed;
            $user->save();
            print_r($user);
           
        return redirect('ApplyOnline')
        ->with('success','Your account has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function Login(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        // exit();
        $validator = Validator::make($request->all(), [ // <---
            'Password' => 'min:6|required_with:LoginRetypePass|same:LoginRetypePass',
            'LoginRetypePass' => 'min:6',
           'Email' => "required",
        ]);
        if ($validator->fails()) {
        return redirect('/ApplyOnline')
                    ->withErrors($validator)
                    ->withInput();
          }else{
           $obj=new profile;
           $data=$request->all();
           $user=$obj::where("Email",$request->input("Email"))->get();
           $InputEmail=$request->input('Email');
           $InputPassword=$request->input('Password');
           // print_r($user);
           if($user->isEmpty()){
                return back()->withErrors('Not have an account || Create One');
           }elseif($user){
             $Pass=$user[0]['Password'];
             if (Hash::check($InputPassword, $Pass)) {
                $Email=$user[0]['Email'];
                $Profile=$user;
                $LoginMsg="IsLogin";
                // $request->Session()->put('city',$city);
            $request->Session()->put('Profile', $Profile);
            $request->Session()->put('Email', $Email);
            $request->Session()->put('LoginMsg',$LoginMsg);
                   return redirect('/Application');

                }else{
                    return back()->withErrors('Invalid Password');
                }
           }
           
        }
    }
     public function Logout(Request $request)
    {   
        
         Auth::logout();
         return redirect('/');
    }
    public function show(profile $profile)
    {
        $Data=$profile->get();
        return view("DatabaseNew/ViewUpdateDelete/AddmissonProfile")->with('AddmissionData',$Data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(profile $profile,$id)
    {
       $Data=$profile->find($id);
          // print_r($Data);
            // exit();
        if ($Data) {
            $Data->delete();
            return redirect('/ProfileAddmission')->with('success','Data Deleted Successfully');
        }else{
            return redirect('/ProfileAddmission')->with('success','Error Found');
        }
    }
}
