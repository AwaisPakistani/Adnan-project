<!-- Remove the container if you want to extend the Footer to full width. -->


  <footer class="text-white text-center text-lg-start my-0" style="background-color: #23242a;">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">About {{$site_identity->site_name}}</h5>

          <p>
          {{$site_identity->description}}
          </p>

          <div class="mt-4">
            <!-- Social -->
            @foreach($social as $social_icon)
            <a href="{{$social_icon->social_url}}" class="btn btn-floating social-icons btn-lg"><i class="{{$social_icon->social_class}}"></i></a>
            @endforeach
           
            <!-- Social -->
          </div>
        </div>
        <!--Grid column-->
       <!--Grid column-->
       <div class="col-lg-4 col-md-6 mb-4 mb-md-0 footer-pages">
          <h5 class="text-uppercase mb-4">Pages</h5>
          <div class="my-3">
            <a href="#">HOME</a></div>
          <div class="my-3">
            <a href="#">ABOUT US</a></div>
          <div class="my-3">
            <a href="#">PRIVACY POLICY</a></div>
          <div class="my-3">
            <a href="#">DISCLAIMER</a></div>
          <!-- <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="ms-2">
                <a href="#"> 
                   HOME
                </a>
              </span>
            </li>
            <li class="mb-3">
            <span class="ms-2">
                <a href="#"> 
                   ABOUT US
                </a>
              </span>
            </li>
            <li class="mb-3">
            <span class="ms-2">
                <a href="#"> 
                   PRIVACY POLICY
                </a>
              </span>
            </li>
            <li class="mb-3">
            <span class="ms-2">
                <a href="#"> 
                   DISCLAIMER
                </a>
              </span>
            </li>
          </ul> -->
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4 pb-1">Contact Us</h5>

          <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">New York, NY 10012, US</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">info@example.com</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+ 01 234 567 88</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">+ 01 234 567 89</span>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  

<!-- End of .container -->

<!-- FOOTER -->
  <!-- <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer> -->