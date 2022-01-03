<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Portal;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;
class PortalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('StudentPortal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('StudentPortal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(Request $request)
    {
        $user=new Portal;
        $user->UniversityRoll=$request->input('UniversityRoll');
        $user->Password=Crypt::encrypt($request->input('Password'));
        $user->Name=$request->input('Name');
        $user->MoblileNumber=$request->input('MoblileNumber');
        $user->Email=$request->input('Email');
        $user->Depertment=$request->input('Depertment');
        $user->save();
        return redirect('student-portal')->with('status','Data Inserted Successfully');
    }

    public function login(Request $request)
    {
        $user=Portal::where("Email",$request->input("Email"))->get();
        $UserEmail=$user[0]->Email;
        $DecryptPass=Crypt::decrypt($user[0]->Password);
        if (($DecryptPass==$request->input("Password")) && $UserEmail==$request->input("Email"))
        {
            return redirect('portal-data-registrations');
        }else{
            return redirect('/student-portal');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
