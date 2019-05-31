<?php

namespace App\Http\Middleware;

use Closure;

class ProfileCompletedMiddleware
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
        /* student */
        $user = $request->user();
        /* si student */
        if($user->role_id == 2){
            if(!$user->student->profile_completed){
                return redirect("/profile/complete");
            }
        } else if($user->role_id == 3){
            if(! $user->tutor->profile_completed){
                return redirect("/profile/complete");
            }
        }
        return $next($request);
    }
}
