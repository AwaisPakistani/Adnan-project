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
            <a href="{{$social_icon->social_url}}" class="btn btn-floating social-icons btn-lg" style="background-color:{{$advancesetting->main_color}};color:{{$advancesetting->basic_color}};"><i class="{{$social_icon->social_class}}"></i></a>
            @endforeach
           
            <!-- Social -->
          </div>
        </div>
        <!--Grid column-->
       <!--Grid column-->
       <div class="col-lg-4 col-md-6 mb-4 mb-md-0 footer-pages">
          <h5 class="text-uppercase mb-4">Pages</h5>
          <div class="my-3">
            <a href="{{url('/')}}">HOME</a></div>
          @if(!empty($pages))
          @foreach($pages->take(2) as $page)
          <div class="my-3 text-uppercase">
            <a href="{{route('front.page.url',$page->id)}}">{{$page->page_name}}</a></div>
          @endforeach
          @endif
          <div class="my-3">
            <a href="{{route('front.contact_page')}}">CONTACT US</a></div>
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
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">
                @if(!empty($address[0]))
                {{$address[0]}}
                @endif
              </span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">
              @if(!empty($email[0]))
              {{$email[0]}}
              @endif
            </span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">
              @if(!empty($phone[0]))  
              {{$phone[0]}}
              @endif
            </span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">
              @if(!empty($phone[1]))
              {{$phone[1]}}
              @endif
            </span>
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
      {{$advancesetting->footer_copyright}}
    </div>
    <!-- Copyright -->
  </footer>