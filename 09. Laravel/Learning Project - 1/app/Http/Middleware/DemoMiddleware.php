<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DemoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle( Request $request, Closure $next ): Response
    {

//         $key = $request->key;

// // condition to check
//         if ( $key == 1234 )
//         {
//             return $next( $request );
//         }
//         else
//         {
//             return response()->json( 'Unauthorized', 401 );
//         }

//adding header from middleware, after hitting the route, it will come to middleware and this header will be added

        // $request->headers->add( ['email' => 'john@example.com'] );
        return $next( $request );
    }

}
