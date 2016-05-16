<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$allow = url('androidlogin');
		$allow2 = url('android/add_coordinate');
		//dd($request->url() == $allow);

		if($request->url() == $allow || $request->url() == $allow2)
			return $next($request);
		else
			return parent::handle($request, $next);
		//return $next($request);
	}

}
