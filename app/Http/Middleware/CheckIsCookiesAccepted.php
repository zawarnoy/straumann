<?php


namespace App\Http\Middleware;


use App\Http\Service\Traits\IsChoiceRoleRouteTrait;
use Closure;

class CheckIsCookiesAccepted
{

    use IsChoiceRoleRouteTrait;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (strpos($request->route()->getPrefix(), 'admin') !== false) {
            return $next($request);
        }

        if (empty($roleCookie = $request->cookie('role')) && !$this->isChoiceRoleRoute()) {
            return redirect()->route('role.choice', ['redirect' => $request->getRequestUri()]);
        }

        if ($roleCookie && $this->isChoiceRoleRoute()) {
            return $request->get('redirect') ? redirect($request->get('redirect')) : redirect()->route('main.index');
        }

        return $next($request);
    }

}