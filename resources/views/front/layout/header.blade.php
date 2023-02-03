<div class="container">
<header class="d-flex flex-wrap justify-content-center py-4 px-3 mb-2 border-bottom main-header">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img class="rounded-circle" src="{{url('storage/'.$logo->logo->url)}}" width="50px" height="50px" alt="logo">&nbsp;&nbsp;&nbsp;
        <span class="fs-4 site-name">{{$site_identity->site_name}}</span>
      </a>

      <ul class="nav nav-pills" > 
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page" style="color:white;">Home</a></li>
        <li class="nav-item" ><a href="#" class="nav-link">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
      </ul>
     
      &nbsp; &nbsp; &nbsp;
      <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
    </header>
</div>