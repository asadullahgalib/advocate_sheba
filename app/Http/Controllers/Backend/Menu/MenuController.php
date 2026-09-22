<?php

namespace App\Http\Controllers\Backend\Menu;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Model\Menu;
use App\Model\Icon;
use Auth;

class MenuController extends Controller
{

    public function index()
    {  

       $icon=Icon::all();  
       $menus =Menu::orderBy('sort','desc')->get();
       $parentMenu = Menu::where('parent', 0)->get();
       return view('backend.menu.view-menu',compact('menus','parentMenu','icon'));
    }

   
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request, [
        'name' => 'required',
        'url' => 'required',
        'parent' => 'required',
        'status' => 'required',
        'sort' =>'required'
        ]);    
      
      $menuData = new Menu;
      $menuData->name   = $request->name;
      if($request->parentchield !='0'){
        $parent = $request->parentchield;
      }else{
        $parent = $request->parent;
      }
      $menuData->parent = $parent;
      $menuData->route    = $request->url;
      $menuData->status = $request->status;
      $menuData->sort   = $request->sort;
      $menuData->icon   = $request->icon;
      $menuData->add    = $request->add_route;
      $menuData->edit    = $request->edit_route;
      $menuData->delete    = $request->delete_route;
      $menuData->save();
      $request->session()->flash('success','Menu Has Saved Successfully');
      return redirect()->back();

    }

    
    public function show(Request $request)
    {
         $menuId = $request->input('id');
         $menuData = Menu::find($menuId);
         $parentcheck = Menu::where('id',$menuData->parent)->first();
         if($parentcheck){
          if($parentcheck->parent =='0'){
             $menuData->parent_id = $parentcheck->id;
             $menuData->parentchield_id ='0';
          }else{
             $menuData->parent_id = $parentcheck->parent;
             $menuData->parentchield_id =$parentcheck->id;          
          }
         }else{
             $menuData->parent_id = '0';
             $menuData->parentchield_id ='0';  
         }

         return response()->json($menuData);
    }
   
    public function update(Request $request,$id)
    {
       $this->validate($request, [
            'name' => 'required',
            'url' => 'required',
            'parent' => 'required',      
            'status' => 'required',
            'sort' =>'required'
        ]);    
          

      $menuData = Menu::find($id);

      $menuData->name =$request->name;
       if($request->parentchield !='0'){
        $parent = $request->parentchield;
      }else{
        $parent = $request->parent;
      }
      $menuData->parent = $parent;
      $menuData->route = $request->url;
      $menuData->status = $request->status;
      $menuData->sort = $request->sort;
      $menuData->icon = $request->icon; 
       $menuData->add    = $request->add_route;
      $menuData->edit    = $request->edit_route;
      $menuData->delete    = $request->delete_route;    
      $menuData->save();
      $request->session()->flash('success','Menu Has Updated Successfully');
      return redirect()->back();       
    }

    public function getSubParent(Request $request){
      $parent = $request->input('parent');
      if($parent == '0'){
        $childparent = '';
      }else{
        $childparent = Menu::where('parent',$parent)->get();
      }
      return response()->json($childparent);
    }
}
