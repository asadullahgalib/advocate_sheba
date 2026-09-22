<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Model\Menu;
use App\Model\MenuPermission;
class Permission
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
        $route=$request->route()->getName();               
        $menu=Menu::where('route',$route)
        ->where('route','!=','home')
        ->orWhere('add',$route)->orWhere('edit',$route)
        ->orWhere('delete',$route)
        ->where('parent','!=',0)
        ->first();
        // dd($menu);    
        if(isset($menu) && !empty($menu)){
            $role_id=Auth::user()->role;
            $permission=MenuPermission::where('role_id',$role_id)->where('permitted_route',$route)->first();                
            if (Auth::user()->role ==0 || $permission) {
                $title = Menu::where('route',$route)->first();
                if($title){
                    $request->session()->put('title',$title->name);              
                }
                return $next($request);
            } 
        }else{           
            return $next($request);
        }  

        // return redirect('/unauthorize'); 
         return redirect()->back()->with('error','Access Permission Denied');  
    }
}
