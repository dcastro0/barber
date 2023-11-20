<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verifique se o usuário tem permissões específicas
        if (auth()->check() && auth()->user()->barber) {
            return $next($request);
        }

        // Redirecione ou retorne uma resposta de erro, conforme necessário
        return abort(403, 'Acesso não autorizado');
    }
    
}
