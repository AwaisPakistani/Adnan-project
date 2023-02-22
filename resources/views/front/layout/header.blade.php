<div class="container-fluid" style="background-color:{{$advancesetting->main_color}};color:{{$advancesetting->basic_color}};">
 <div class="container">
   <header class="d-flex flex-wrap justify-content-center py-4 px-3 mb-0 border-bottom main-header" >
      <a href="{{url('/')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="{{url('storage/'.$logo->logo->url)}}" width="100%" height="50" alt="logo">&nbsp;&nbsp;&nbsp;
        <!-- <span class="fs-4 site-name">{{$site_identity->site_name}}</span> -->
      </a>

      <ul class="nav nav-pills" > 
        <li class="nav-item"><a href="{{url('/')}}" class="nav-link text-uppercase" aria-current="page" style="color:white;">Home</a></li>
        @if(!empty($pages))
        @foreach($pages as $page)
        <li class="nav-item" ><a href="{{route('front.page.url',$page->id)}}" class="nav-link text-uppercase">{{$page->page_name}}</a></li>
        @endforeach
        @endif
        
      <li class="nav-item"><a href="{{route('front.contact_page')}}" class="nav-link text-uppercase">Contact</a></li>
      </ul>
     
      &nbsp; &nbsp; &nbsp;
      <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            @if(Auth::guard('frontuser')->check())
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
            @else  
            <i class="fas fa-user rounded-circle"></i>
            <!-- <img src="" alt="mdo" width="32" height="32" class="rounded-circle"> -->
            @endif
          </a>
          @if(!empty($journal))
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
       
              @if(Auth::guard('frontuser')->check())
              <li><a class="dropdown-item" href="{{url('front/logout/'.$journal->id)}}">Logout</a></li>
              @else 
              <li><a class="dropdown-item" href="{{route('front_register',$journal->id)}}">Register</a></li>
              <!-- <li><hr class="dropdown-divider"></li> -->
              <li><a class="dropdown-item" href="{{url('chiefeditor-login/'.$journal->id)}}">Login...</a></li>
              @endif
            @else 

          </ul>
            @endif
        </div>
    </header>
</div>
</div>