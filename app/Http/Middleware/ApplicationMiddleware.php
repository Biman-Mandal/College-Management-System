<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class ApplicationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $Session=Session::get('Profile');
        $DatabaseSession=Session::get('DatabaseProfile');
        $path=$request->path();
        // Application
        if (($path=='ApplyOnline' || $path=='SignUpApply') && Session::get('Profile')) {
           return redirect('/Application');
        }
        else if(($path=='Application' || $path=='ApplicationUpdate' || $path=='ApplicationProfile' ) && !$Session) {
            return redirect('/ApplyOnline')->with('success','You Are Not Login Yet..Login For Continue the process');
        }
        // Database
        if (($path=='ApplyOnline' || $path=='SignUpApply' || $path=='/') &&  $DatabaseSession ) {
            return redirect('/Database');
        }else if( ($path=='Database' || $path=='ViewStudent' || $path=='ViewTeacher' || $path=='ViewAlloted' || $path=='ViewEmployee' || $path=='ProfilePotal' || $path=='ApplicationPotal' || $path=='ProfileAddmission' || $path=='ApplicationAddmission')  && !$DatabaseSession){
            return redirect('/');
        }
        return $next($request);
    }
}
