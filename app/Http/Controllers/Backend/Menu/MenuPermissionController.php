<?php
namespace App\Http\Controllers\Backend\Menu;

use App\Http\Controllers\Controller;
use App\Model\Menu;
use App\Model\MenuPermission;
use App\Model\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class MenuPermissionController extends Controller{
    
    public function index(Request $request){        
        if(Auth::user()->user_category=="Developer"){
            $role = Role::all();
        }elseif(Auth::user()->user_category=="admin"){
            $role = Role::where('mail_status','1')->get();
        }
        $parent_menuall = Menu::where('parent',0)->where([['id','!=',1],['status','1']])->orderBy('sort','asc')->get();
        if($request->menu_id){
            $parent_menu = Menu::where('parent',0)->where([['id','!=',1],['status','1']])->whereIn('id',$request->menu_id)->orderBy('sort','asc')->get();
        }else{
            $parent_menu = Menu::where('parent',0)->where([['id','!=',1],['status','1']])->orderBy('sort','asc')->get();
        }
        if($request->user_role){
            $allMenu =[];
            foreach ($parent_menu as $key => $pmenu) {
                $allMenu[$pmenu->id]['id']= $pmenu->id;
                $allMenu[$pmenu->id]['name']= $pmenu->name;
                $allMenu[$pmenu->id]['route']= $pmenu->route;
                $allMenu[$pmenu->id]['menu_from']= 'menu'; 
                $child_menu = Menu::where('parent',$pmenu->id)->where([['id','!=',1],['status','1']])->orderBy('sort','asc')->get();
                if(count($child_menu)>0){
                    foreach ($child_menu as $key => $cmenu) {
                        $allMenu[$pmenu->id]['child'][$cmenu->id]['id']= $cmenu->id;
                        $allMenu[$pmenu->id]['child'][$cmenu->id]['name']= $cmenu->name;
                        $allMenu[$pmenu->id]['child'][$cmenu->id]['route']= $cmenu->route;
                        $allMenu[$pmenu->id]['child'][$cmenu->id]['menu_from']= 'menu';  
                        $child_child_menu = Menu::where('parent',$cmenu->id)->where([['id','!=',1],['status','1']])->orderBy('sort','asc')->get();
                        if(count($child_child_menu)>0){
                            foreach ($child_child_menu as $key => $ccmenu) {
                                $allMenu[$pmenu->id]['child'][$cmenu->id]['child'][$ccmenu->id]['id']= $ccmenu->id;
                                $allMenu[$pmenu->id]['child'][$cmenu->id]['child'][$ccmenu->id]['name']= $ccmenu->name;
                                $allMenu[$pmenu->id]['child'][$cmenu->id]['child'][$ccmenu->id]['route']= $ccmenu->route;
                                $allMenu[$pmenu->id]['child'][$cmenu->id]['child'][$ccmenu->id]['menu_from']= 'menu';  
                                $child_child_child_menu = Menu::where('parent',$ccmenu->id)->where([['id','!=',1],['status','1']])->orderBy('sort','asc')->get();
                                if(count($child_child_child_menu)>0){
                                    foreach ($child_child_child_menu as $key => $cccmenu) {
                                        $allMenu[$pmenu->id]['child'][$cmenu->id]['child'][$ccmenu->id]['child'][$cccmenu->id]['id']= $cccmenu->id;
                                        $allMenu[$pmenu->id]['child'][$cmenu->id]['child'][$ccmenu->id]['child'][$cccmenu->id]['name']= $cccmenu->name;
                                        $allMenu[$pmenu->id]['child'][$cmenu->id]['child'][$ccmenu->id]['child'][$cccmenu->id]['route']= $cccmenu->route;
                                        $allMenu[$pmenu->id]['child'][$cmenu->id]['child'][$ccmenu->id]['child'][$cccmenu->id]['menu_from']= 'menu'; 
                                        $allMenu[$pmenu->id]['child'][$cmenu->id]['child'][$ccmenu->id]['child'][$cccmenu->id]['menu_route']['0']['id']= $cccmenu->id;                        
                                        $allMenu[$pmenu->id]['child'][$cmenu->id]['child'][$ccmenu->id]['child'][$cccmenu->id]['menu_route']['0']['name']= 'View';                        
                                        $allMenu[$pmenu->id]['child'][$cmenu->id]['child'][$ccmenu->id]['child'][$cccmenu->id]['menu_route']['0']['route']= $cccmenu->route;                      
                                        $allMenu[$pmenu->id]['child'][$cmenu->id]['child'][$ccmenu->id]['child'][$cccmenu->id]['menu_route']['0']['menu_from']= 'menu'; 
                                        $allMenu[$pmenu->id]['child'][$cmenu->id]['child'][$ccmenu->id]['child'][$cccmenu->id]['menu_route']['0']['permission']= MenuPermission::where('menu_id',$cccmenu->id)->where('role_id',$request->user_role)->first();
                                    }
                                }else{
                                    $allMenu[$pmenu->id]['child'][$cmenu->id]['child'][$ccmenu->id]['child']= null;
                                    $allMenu[$pmenu->id]['child'][$cmenu->id]['child'][$ccmenu->id]['menu_route']['0']['id']= $ccmenu->id;                        
                                    $allMenu[$pmenu->id]['child'][$cmenu->id]['child'][$ccmenu->id]['menu_route']['0']['name']= 'View';                        
                                    $allMenu[$pmenu->id]['child'][$cmenu->id]['child'][$ccmenu->id]['menu_route']['0']['route']= $ccmenu->route;                        
                                    $allMenu[$pmenu->id]['child'][$cmenu->id]['child'][$ccmenu->id]['menu_route']['0']['menu_from']= 'menu';
                                    $allMenu[$pmenu->id]['child'][$cmenu->id]['child'][$ccmenu->id]['menu_route']['0']['permission']= MenuPermission::where('menu_id',$ccmenu->id)->where('role_id',$request->user_role)->first();
                                }
                            }
                        }else{
                            $allMenu[$pmenu->id]['child'][$cmenu->id]['child']= null;
                            $allMenu[$pmenu->id]['child'][$cmenu->id]['menu_route']['0']['id']= $cmenu->id;                        
                            $allMenu[$pmenu->id]['child'][$cmenu->id]['menu_route']['0']['name']= 'View';                        
                            $allMenu[$pmenu->id]['child'][$cmenu->id]['menu_route']['0']['route']= $cmenu->route;                        
                            $allMenu[$pmenu->id]['child'][$cmenu->id]['menu_route']['0']['menu_from']= 'menu';
                            $allMenu[$pmenu->id]['child'][$cmenu->id]['menu_route']['0']['permission']= MenuPermission::where('menu_id',$cmenu->id)->where('role_id',$request->user_role)->first();
                        }
                    }
                }else{
                    $allMenu[$pmenu->id]['child']= null;
                    $allMenu[$pmenu->id]['menu_route']['0']['id']= $pmenu->id;                        
                    $allMenu[$pmenu->id]['menu_route']['0']['name']= 'View';
                    $allMenu[$pmenu->id]['menu_route']['0']['route']= $pmenu->route;
                    $allMenu[$pmenu->id]['menu_route']['0']['menu_from']= 'menu';
                    $allMenu[$pmenu->id]['menu_route']['0']['permission']= MenuPermission::where('menu_id',$pmenu->id)->where('role_id',$request->user_role)->first();
                }
            }
            
            return view('backend.menu.view-menu-permission', compact('role','parent_menu','parent_menuall','allMenu'));
        }else{
            return view('backend.menu.view-menu-permission', compact('role','parent_menu','parent_menuall'));
        }
    }

    public function storePermission(Request $request){
        $data = explode(',', $request->jsondata); 
        $role_id = $request->role_id;
        $menu_id = $request->menu_id;
        DB::transaction(function () use($data,$role_id,$menu_id){
            if($menu_id){
                MenuPermission::whereIn('menu_id',$menu_id)->where('role_id',$role_id)->delete();
                $parent_menu = Menu::whereIn('id',$menu_id)->get();
                foreach ($parent_menu as $key => $pmenu) {
                    MenuPermission::where('menu_id',$pmenu->id)->where('role_id',$role_id)->delete(); 
                    $child_menu = Menu::where('parent',$pmenu->id)->get();
                    if(count($child_menu)>0){
                        foreach ($child_menu as $key => $cmenu) {
                            MenuPermission::where('menu_id',$cmenu->id)->where('role_id',$role_id)->delete(); 
                            $child_child_menu = Menu::where('parent',$cmenu->id)->get();
                            if(count($child_child_menu)>0){
                                foreach ($child_child_menu as $key => $ccmenu) {
                                    MenuPermission::where('menu_id',$ccmenu->id)->where('role_id',$role_id)->delete(); 
                                    $child_child_child_menu = Menu::where('parent',$ccmenu->id)->get();
                                    if(count($child_child_child_menu)>0){
                                        foreach ($child_child_child_menu as $key => $cccmenu) {
                                            MenuPermission::where('menu_id',$cccmenu->id)->where('role_id',$role_id)->delete();
                                        }
                                    }else{
                                        MenuPermission::where('menu_id',$ccmenu->id)->where('role_id',$role_id)->delete(); 
                                    }
                                }
                            }else{
                                MenuPermission::where('menu_id',$cmenu->id)->where('role_id',$role_id)->delete(); 
                            }
                        }
                    }else{
                        MenuPermission::where('menu_id',$pmenu->id)->where('role_id',$role_id)->delete(); 
                    }
                }
            }else{    
                MenuPermission::where('role_id', $role_id)->delete();
            }

            foreach ($data as $d){
                $split_data = explode('&', $d);
                if(@$split_data[1]){
                    $ifexist = MenuPermission::where('menu_id', $split_data[1])->where('role_id',$role_id)->where('permitted_route',$split_data[2])->first();
                    if($ifexist == null){
                        $p = new MenuPermission;
                        $p->menu_id         = $split_data[1];
                        $p->role_id         = $role_id;
                        $p->permitted_route = $split_data[2];
                        $p->save();
                    }                   
                }
            }
        });
        $request->session()->flash('success', ' Menu Permission has saved successfully');
        return response()->json(array('status' => 'success'));
    }
    
}

