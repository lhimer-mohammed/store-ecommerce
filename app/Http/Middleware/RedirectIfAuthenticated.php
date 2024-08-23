namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if ($guard == 'admins') {
                return redirect(RouteServiceProvider::ADMIN);
             } else {
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
