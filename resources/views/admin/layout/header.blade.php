@php
use App\Models\User;
@endphp
<header class="top-header">        
        <nav class="navbar navbar-expand gap-3">
          <div class="mobile-toggle-icon fs-3">
              <i class="bi bi-list"></i>
            </div>
            <form class="searchbar">
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
                <input class="form-control" type="text" placeholder="Type here to search">
                <div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i></div>
            </form>
            <div class="top-navbar-right ms-auto">
              <ul class="navbar-nav align-items-center">
                <li class="nav-item search-toggle-icon">
                  <a class="nav-link" href="#">
                    <div class="">
                      <i class="bi bi-search"></i>
                    </div>
                  </a>
              </li>
              <li class="nav-item dropdown dropdown-user-setting">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="user-setting d-flex align-items-center">
                    @php
                    $id=Auth::user()->id;
                    $image=User::with('admin_profile')->where('id',$id)->first();
                    @endphp
                    
                    @if(!empty($image->admin_profile))
                    @php
                    $path=$image->admin_profile->url;
                    @endphp
                     
                    <img src="{{url('storage/'.$path)}}" class="user-img" alt="profile">
                    @else
                    <img src="" class="user-img" alt="dp">
                    @endif
                   <!-- $image = '\storage\\'.$slider->image; -->
                  </div>
                </a>
                
              </li>
              <li>
                <a href="{{url('admin/logout')}}">
                  Logout
                </a>
              </li>
              
              </ul>
              </div>
        </nav>
      </header>