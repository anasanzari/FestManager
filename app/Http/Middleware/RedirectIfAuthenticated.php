<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;
use Auth;

class RedirectIfAuthenticated {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if ($this->auth->check())
		{
			$user = Auth::user();
			if($user->type==0){
				//employee. Redirect him to employee
				return redirect('employee');
			}else if($user->type==1){
				//not yet. Redirect to customer page
				return redirect('customer');
			}else{
				//admin
				return redirect('admin');
			}

			return new RedirectResponse(url('/'));
		}

		return $next($request);
	}

}
