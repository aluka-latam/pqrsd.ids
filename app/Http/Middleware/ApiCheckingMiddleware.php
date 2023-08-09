<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Helper\Installer\trait\ApichecktraitHelper;
use Auth;

class ApiCheckingMiddleware
{
    use ApichecktraitHelper;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(setting('envato_purchasecode') == null){
			if(Auth::check() && Auth::user()){

				return redirect()->route('admin.licenseinfo');
			}else{
				return $next($request);
			}
			
	    }else{
			
	        // Check purchase code
	        $purchaseCodeData = $this->purchaseCodeChecker(setting('envato_purchasecode'));
			
	        if ($purchaseCodeData->valid == false) {
	            return redirect('/apifailed');
	        }
	        if ($purchaseCodeData->valid == true) {
				
					
				
							
								return $next($request);
							
				
					
					

	        	
	        }
	    }
    }
}
