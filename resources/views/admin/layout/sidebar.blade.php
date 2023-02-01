<!--start sidebar -->
@php 
use App\Models\Siteintro;
$siteidentity_id=Siteintro::with('site_icon','logo')->where('id',1)->value('id');
$site_id=Siteintro::with('site_icon','logo')->where('id',1)->first();
// logo
$logo=Siteintro::with('logo')->where('id',2)->first();
$logopath=$logo->logo->url;
// end logo
$myid=Auth::user()->id;
@endphp
<aside class="sidebar-wrapper" data-simplebar="true">
          <div class="sidebar-header">
            <div>
              <a href="{{url('admin/')}}">
                <img src="{{url('storage/'.$logopath)}}" class="logo-icon" alt="logo icon">
              </a>
            </div>
            <div>
            <a href="{{url('admin/')}}">
              <h4 class="logo-text">{{$site_id->site_name}}</h4>
            </a>
            </div>
            <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
            </div>
          </div>
          <!--navigation-->
          <ul class="metismenu" id="menu">
            <li>
              <a href="{{url('/admin')}}" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Dashboard</div>
              </a>
            </li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title">Application</div>
              </a>
              <ul>
                @role('superadmin|admin')
                <li> <a href="{{route('site_identity_siteicon',$siteidentity_id)}}"><i class="bi bi-circle"></i>Site Icon</a>
                </li>
                <li> <a href="{{route('site_identity_logo')}}"><i class="bi bi-circle"></i>Logo</a>
                </li>
                <li> <a href="{{route('siteintro',$siteidentity_id)}}"><i class="bi bi-circle"></i>Site Info</a>
                </li>
                @endrole
                <li> <a href="{{route('view_social')}}"><i class="bi bi-circle"></i>Social</a>
                </li>
               
              </ul>
            </li>
            <li class="menu-label">Settings</li>
            @role('superadmin')
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-users"></i>
                </div>
                <div class="menu-title">Admin Users</div>
              </a>
              <ul>
                <li> <a href="{{route('admin.admins')}}"><i class="bi bi-circle"></i>View Admin Users</a>
                </li>
                <li> <a href="{{url('admin/add-admin')}}"><i class="bi bi-circle"></i>Add Admin Users</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fadeIn animated bx bx-user-x"></i>
                </div>
                <div class="menu-title">Roles</div>
              </a>
              <ul>
                <li> <a href="{{route('admin.roles')}}"><i class="bi bi-circle"></i>View Roles</a>
                </li>
                <li> <a href="{{route('add-edit-role')}}"><i class="bi bi-circle"></i>Add Role</a>
                </li>
              </ul>
            </li>
            @endrole
            @role('superadmin|admin')
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
                <div class="menu-title">Permissions</div>
              </a>
              <ul>
                <li> <a href="{{route('admin.permissions')}}"><i class="bi bi-circle"></i>View Permissions</a>
                </li>
                <li> <a href="{{url('admin/add-edit-permission')}}"><i class="bi bi-circle"></i>Add Permission</a>
                </li>
                 
              </ul>
            </li>
            @endrole
            <li>

              <a href="{{route('change-admin-password',$myid)}}">
                <div class="parent-icon"><i class="bi bi-key-fill"></i>
                </div>
                <div class="menu-title">Change My Password</div>
              </a>
            </li>
            <li>

              <a href="{{route('change-admin-profile',$myid)}}">
                <div class="parent-icon"><i class="bi bi-person-lines-fill"></i>
                </div>
                <div class="menu-title">Change My DP</div>
              </a>
            </li>
            
            <li class="menu-label">Front Settings</li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fadeIn animated bx bx-user-x"></i>
                </div>
                <div class="menu-title">Front Roles</div>
              </a>
              <ul>
                @can('add')
                <li> <a href="{{route('front.add_role')}}"><i class="bi bi-circle"></i>Add Front Role</a>
                </li>
                @endcan
                @can('view')
                <li> <a href="{{route('front.view_roles')}}"><i class="bi bi-circle"></i>View Front Roles</a>
                </li>
                @endcan
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
                <div class="menu-title">Front Permissions</div>
              </a>
              <ul>
                @can('add')
                <li> <a href="{{route('front.add_permission')}}"><i class="bi bi-circle"></i>Add Front Permission</a>
                </li>
                @endcan
                @can('view')
                <li> <a href="{{route('front.view_permissions')}}"><i class="bi bi-circle"></i>View Front Permissions</a>
                </li>
                @endcan
              </ul>
            </li>

            <li class="menu-label">Site Portal</li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-file-earmark-spreadsheet-fill"></i>
                </div>
                <div class="menu-title">Categories</div>
              </a>
              <ul>
                @can('view')
                <li> <a href="{{route('admin.view_categories')}}"><i class="bi bi-circle"></i>View Categories</a>
                </li>
                @endcan
                @can('add')
                <li> <a href="{{route('admin.add_category')}}"><i class="bi bi-circle"></i>Add Category</a>
                </li>
                @endcan
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-person-fill"></i>
                </div>
                <div class="menu-title">Chief Editor</div>
              </a>
              <ul>
                <li> <a href="table-basic-table.html"><i class="bi bi-circle"></i>Add Chiefeditor</a>
                </li>
                
                <li> <a href="table-advance-tables.html"><i class="bi bi-circle"></i>View Chiefeditor</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                </div>
                <div class="menu-title">Journals</div>
              </a>
              <ul>
                <li> <a href="table-basic-table.html"><i class="bi bi-circle"></i>Add Journal</a>
                </li>
                
                <li> <a href="table-advance-tables.html"><i class="bi bi-circle"></i>View Journals</a>
                </li>
              </ul>
            </li>
           
          </ul>
          <!--end navigation-->
       </aside>
       <!--end sidebar -->