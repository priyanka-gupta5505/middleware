<?php
 
namespace App\Http\Middleware;
 
use Closure;
 
class Roll
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
        if($request->input('roll')<20)
    {
            return redirect('/');
        }
        else
        {
            echo "valid users";
        }
        return $next($request);
    }
}
