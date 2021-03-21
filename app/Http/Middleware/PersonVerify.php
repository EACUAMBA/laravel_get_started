<?php

namespace App\Http\Middleware;

use App\Services\PermissionService;
use App\Services\PersonService;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonVerify
{

    protected $personService;

    public function __construct(PersonService $personService)
    {
        $this->personService = $personService;
    }

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($this->personService->all()->count() > 0 && !Auth::check()){
            return redirect(route('auth.login'));
        }


        return $next($request);
    }
}
