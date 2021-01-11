<?php

namespace App\Http\Controllers;
use Crypt;
use Auth;
use Hash;
use Session;
use App\newteacher;
use App\database;
use Illuminate\Http\Request;
use DB;

class DatabaseLoginController extends Controller
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
        $Pass=$request->input('DatabasePassword');
        $hashed = Hash::make($Pass, [
                        'rounds' => 14,
                    ]);
        // echo $hashed;
        $Data['DatabasePassword']=$hashed;
        $user=new database($Data);
        $user->save();
        return redirect('/');
    }
    public function LoginCheck(Request $request)
    {
        
        // print_r($request->all());
        $obj=new database;
        $user=$obj::where("DatabaseUsername",$request->input("DatabaseUsername"))->get();
        $InputEmail=$request->input('DatabaseUsername');
        $InputPassword=$request->input('DatabasePassword');
       
        if ($user->isEmpty()) {
           return redirect('/');
        }else{
             $Pass=$user[0]['DatabasePassword'];
             if (Hash::check($InputPassword, $Pass)) {
                $TeacherData=new newteacher;
                $TeacherProfile=$TeacherData->get();
                $request->Session()->put('TeacherProfile', $TeacherProfile);
                $DatabaseProfile=$user;
                $request->Session()->put('DatabaseProfile', $DatabaseProfile);
                return redirect('/Database');
             }else{
                return redirect('/');
             }
        }
        // $user['DatabaseUsername'];
        exit();

        



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\database  $database
     * @return \Illuminate\Http\Response
     */
    public function show(database $database)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\database  $database
     * @return \Illuminate\Http\Response
     */
    public function edit(database $database)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\database  $database
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, database $database)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\database  $database
     * @return \Illuminate\Http\Response
     */
    public function destroy(database $database)
    {
         Auth::logout();
         Session::flush();
         return redirect('/');
    }
}
