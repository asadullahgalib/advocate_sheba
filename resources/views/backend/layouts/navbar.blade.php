@php
$prefix           =Request::route()->getPrefix();
$route            =Route::current()->getName();
$user_role        =Auth::user()->role;
$parentroutearray = explode('.',$route);
$parentroute      = $parentroutearray[0];
$childroute       = $parentroute.'.'.@$parentroutearray[1];
$nav_menu         =[];
@endphp
<?php
    $usertype = Auth()->user()->usertype;
    $dashboardColors = DB::table('dashboard_colors')->where('usertype',$usertype)->first();
?>
<style type="text/css">
    .pnavbar{
        background: {{(@$dashboardColors->navbarbgcode)?($dashboardColors->navbarbgcode):'#4980b5'}} !important;
    }
/*    .pnavbar{
        background: {{(@$dashboardColors->childnavbarbgcode)?($dashboardColors->childnavbarbgcode):'#305171'}} !important;
        }*/

        .m-left-minus-10{
            margin-left: -10px;
        }
    </style>

    <div class="left main-sidebar">
        <div class="sidebar-inner leftscroll">
            <div style="text-align: center;">
                <a  href="{{route('home')}}"> 
                    <img src="{{asset('uploads/dashboard_logo_images/'.@$logo->image2)}}" style="width: 60%;"> 
                </a>
            </div>
            <div id="sidebar-menu">
                <ul> 
                    <li class="submenu">
                        <a class="{{$route== 'home'?'active':''}}" href="{{route('home')}}"><i class="fa fa-fw fa-dashboard"></i><span> Dashboard </span> </a>
                    </li>
                    @php           
                    $grand_parents = App\Model\Menu::select('id','name','route','icon')->where('parent', 0)->where('status',1)->orderBy('sort', 'asc')->get();
                    foreach ($grand_parents as  $grand_parent){
                        $permission=App\Model\MenuPermission::select('id')->where('menu_id',$grand_parent->id)->where('role_id',$user_role)->first();
                        if($permission){
                            $nav_menu[$grand_parent->id]['grand_id']       =$grand_parent->id;
                            $nav_menu[$grand_parent->id]['grand_parent']       =$grand_parent->name;
                            $nav_menu[$grand_parent->id]['grand_parent_route'] =$grand_parent->route;            
                            $nav_menu[$grand_parent->id]['grand_parent_icon'] =$grand_parent->icon;            
                            $parents=App\Model\Menu::select('id','name','route','icon')->where('parent', $grand_parent->id)->where('status',1)->orderBy('sort', 'asc')->get();
                            foreach($parents as $parent){
                                $permission=App\Model\MenuPermission::select('id')->where('menu_id',$parent->id)->where('role_id',$user_role)->first();
                                if($permission){
                                    $nav_menu[$grand_parent->id]['parent'][$parent->id]['parent_id']    =$parent->id;
                                    $nav_menu[$grand_parent->id]['parent'][$parent->id]['parent_name']  =$parent->name;
                                    $nav_menu[$grand_parent->id]['parent'][$parent->id]['parent_route'] =$parent->route;
                                    $nav_menu[$grand_parent->id]['parent'][$parent->id]['parent_icon'] =$parent->icon;
                                    $childs=App\Model\Menu::select('id','name','route','icon')->where('parent', $parent->id)->where('status',1)->orderBy('sort', 'asc')->get();
                                    foreach($childs as $child){
                                        $permission=App\Model\MenuPermission::select('id')->where('menu_id',$child->id)->where('role_id',$user_role)->first();
                                        if($permission){
                                            $nav_menu[$grand_parent->id]['parent'][$parent->id]['child'][$child->id]['child_id']    =$child->id;
                                            $nav_menu[$grand_parent->id]['parent'][$parent->id]['child'][$child->id]['child_name']  =$child->name;
                                            $nav_menu[$grand_parent->id]['parent'][$parent->id]['child'][$child->id]['child_route'] =$child->route;
                                            $nav_menu[$grand_parent->id]['parent'][$parent->id]['child'][$child->id]['child_icon'] =$child->icon;
                                            $child_childs=App\Model\Menu::select('id','name','route','icon')->where('parent', $child->id)->where('status',1)->orderBy('sort', 'asc')->get();
                                            foreach($child_childs as $child_child){
                                                $permission=App\Model\MenuPermission::select('id')->where('menu_id',$child_child->id)->where('role_id',$user_role)->first();
                                                if($permission){
                                                    $nav_menu[$grand_parent->id]['parent'][$parent->id]['child'][$child->id]['child_child'][$child_child->id]['child_id']    =$child_child->id;
                                                    $nav_menu[$grand_parent->id]['parent'][$parent->id]['child'][$child->id]['child_child'][$child_child->id]['child_name']  =$child_child->name;
                                                    $nav_menu[$grand_parent->id]['parent'][$parent->id]['child'][$child->id]['child_child'][$child_child->id]['child_route'] =$child_child->route;                      
                                                    $nav_menu[$grand_parent->id]['parent'][$parent->id]['child'][$child->id]['child_child'][$child_child->id]['child_icon'] =$child_child->icon;                      
                                                    $child_child_childs=App\Model\Menu::select('id','name','route','icon')->where('parent', $child_child->id)->where('status',1)->orderBy('sort', 'asc')->get();
                                                    foreach($child_child_childs as $child_child_child){
                                                        $permission=App\Model\MenuPermission::select('id')->where('menu_id',$child_child_child->id)->where('role_id',$user_role)->first();
                                                        if($permission){
                                                            $nav_menu[$grand_parent->id]['parent'][$parent->id]['child'][$child->id]['child_child'][$child_child->id]['child_child_child'][$child_child_child->id]['child_id']    =$child_child_child->id;
                                                            $nav_menu[$grand_parent->id]['parent'][$parent->id]['child'][$child->id]['child_child'][$child_child->id]['child_child_child'][$child_child_child->id]['child_name']  =$child_child_child->name;
                                                            $nav_menu[$grand_parent->id]['parent'][$parent->id]['child'][$child->id]['child_child'][$child_child->id]['child_child_child'][$child_child_child->id]['child_route'] =$child_child_child->route;
                                                            $nav_menu[$grand_parent->id]['parent'][$parent->id]['child'][$child->id]['child_child'][$child_child->id]['child_child_child'][$child_child_child->id]['child_icon'] =$child_child_child->icon;
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                    @endphp
                    @php
                    $click_menu = 5;
                    @endphp
                    @foreach($nav_menu as $grand_menu)   
                    <li class="submenu">
                        <a href="#">
                            <i class="fa fa-folder"></i>
                            <span>{{$grand_menu['grand_parent']}}</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            @foreach($grand_menu['parent'] as $parent_menu)
                            @if(!empty($parent_menu['child']))                  
                            <li class="submenu">
                                <a href="#">
                                    <i class="fa fa-folder"></i>
                                    <span>{{$parent_menu['parent_name']}}</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    @foreach($parent_menu['child'] as $child_menu)
                                    @if(!empty($child_menu['child_child']))                  
                                    <li class="submenu">
                                        <a href="#">
                                            <i class="fa fa-folder"></i>
                                            <span>{{$child_menu['child_name']}}</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul>
                                            @foreach($child_menu['child_child'] as $child_child)
                                            @if(!empty($child_child['child_child_child']))                  
                                            <li class="submenu">
                                                <a href="#">
                                                    <i class="fa fa-folder"></i>
                                                    <span>{{$child_child['child_name']}}</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <ul>
                                                    @foreach($child_child['child_child_child'] as $child_child_child)
                                                    <li class="click_menu" data-click_menu="{{$click_menu++}}">
                                                        <a href="{{route($child_child_child['child_route'])}}">
                                                            <i class="fa {{(@$child_child_child['child_icon'])?(@$child_child_child['child_icon']):'fa-gg'}}"></i>
                                                            <span>{{$child_child_child['child_name']}}</span>
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ul>                       
                                            </li>
                                            @else
                                            <li class="click_menu" data-click_menu="{{$click_menu++}}">
                                                <a href="{{route($child_child['child_route'])}}">
                                                    <i class="fa {{(@$child_child['child_icon'])?(@$child_child['child_icon']):'fa-gg'}}"></i>
                                                    <span>{{$child_child['child_name']}}</span>
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>                       
                                    </li>
                                    @else
                                    <li class="click_menu" data-click_menu="{{$click_menu++}}">
                                        <a href="{{route($child_menu['child_route'])}}">
                                            <i class="fa {{(@$child_menu['child_icon'])?(@$child_menu['child_icon']):'fa-gg'}}"></i>
                                            <span>{{$child_menu['child_name']}}</span>
                                        </a>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>                       
                            </li>
                            @else
                            <li class="click_menu" data-click_menu="{{$click_menu++}}">
                                <a href="{{route($parent_menu['parent_route'])}}">
                                    <i class="fa {{(@$parent_menu['parent_icon'])?(@$parent_menu['parent_icon']):'fa-gg'}}"></i>
                                    <span>{{$parent_menu['parent_name']}}</span>
                                </a>
                            </li>
                            @endif                                
                            @endforeach            
                        </ul>                           
                    </li>
                    @endforeach

                </ul>
                <div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="margin-left: 19px;color: #000;font-size: 17px !important;"><i class="fa fa-sign-out" style="font-size:20px;padding-right: 7px;"></i> Logout  </a>
                    </form>
                </div>   
                <div class="clearfix"></div>
            </div>
        <div class="clearfix"></div>
    </div>
</div>

<script type="text/javascript">
    $(function(){
        var url = "{{Request::url()}}";
        var click_menu_id = $('[href="'+url+'"]').parent().data('click_menu');
        $('[data-click_menu='+click_menu_id+']').addClass('active');
        $('[data-click_menu='+click_menu_id+']').parents('ul').css('display','block');
        $('[data-click_menu='+click_menu_id+']').parents('.submenu').children('a').addClass('subdrop pnavbar');
        $('[data-click_menu='+click_menu_id+']').parents('.submenu').children('a').children('i').removeClass('fa-folder').addClass('fa-folder-open text-warning');
        $('[data-click_menu='+click_menu_id+']').children('a').addClass('text-primary');
    });


</script>