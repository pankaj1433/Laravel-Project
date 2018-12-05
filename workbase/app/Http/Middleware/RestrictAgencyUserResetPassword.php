<?php

namespace App\Http\Middleware;


use Closure;

class RestrictAgencyUserResetPassword
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
        $currentUser = $request->user();
        $needPasswordChange = $currentUser->need_password_change;
        $orgType = $currentUser->org_type;
        

        if ($needPasswordChange=='Y' && $orgType=='AGENCY_USER') {
            return redirect('/agencyUser/password/reset');
        }

        return $next($request);
    }
}
