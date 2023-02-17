<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use App\Models\Frontuser;
use Session;

class FrontGate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //$id=Auth::guard('frontuser')->user()->id;
        //$chief=Frontuser::where('id',$id)->first();
        if (!Auth::guard('frontuser')->check()) {
            Session::flash('error_message','Sorry, you have to login first!');
            return redirect('/');
        }
        return $next($request);
    }
}
