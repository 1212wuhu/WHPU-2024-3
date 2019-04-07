<?php

    namespace App\Http\Middleware;

    use Closure;

    class AuthImportMiddle
    {
        /**
         * 解决ajax请求的中间件，会返回json
         *
         * @param \Illuminate\Http\Request $request
         * @param \Closure $next
         * @return mixed
         */
        public function handle($request, Closure $next, $role)
        {
            if (session('Auth') != $role) {
                $array = array(
                    "code" => 403,
                    "msg" => "Permission denied",
                );
                return response()->jsonp($request->input('callback'),$array);
            }
            return $next($request);
        }
    }
