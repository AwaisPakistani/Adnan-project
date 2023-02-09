
@extends('front.layout.main')
@section('content')
@include('front.inc.contact_hero')
<div class="container mb-5 mt-0">
    <div class="row">
    </div>
<div class="container-fluid mt-1 contact">
    <div class="row">
    <div class="col-md-7 col-lg-8">
        <h4 class="mb-3 py-4">Get In Touch</h4>
        <form method="post" action="{{route('front.contact_form')}}" class="needs-validation" style="padding-right:50px;" novalidate="">@csrf
          <div class="row g-3">
            <div class="col-12">
          
                  @if(Session::has('success_message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('success_message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
                  @if(Session::has('error_message'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{Session::get('error_message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
                 
                
                 
            </div>
            <div class="col-12">
              <label for="username" class="form-label">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>
            
            <div class="col-12">
              <label for="username" class="form-label">Email</label>
              <div class="input-group has-validation">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                <input type="email" name="email" class="form-control" id="username" placeholder="you@example.com" required>
              <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
                </div>
              </div>
            </div>
            
            <div class="col-12">
              <label for="username" class="form-label">Phone</label>
              <div class="input-group has-validation">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                <input type="number" name="phone" class="form-control" id="username" placeholder="03xx-xxxxxxx" required>
              <div class="invalid-feedback">
              Please enter a valid mobile number.
                </div>
              </div>
            </div>
          

            <div class="col-12">
              <label for="address" class="form-label">Message</label>
              <textarea type="textarea" name="message" class="form-control" id="address" placeholder="Enter you message..." required></textarea>
              <div class="invalid-feedback">
                Please enter your message.
              </div>
            </div>
            
          <button class="w-100 btn-lg" style="background-color:{{$advancesetting->button_color}}; color:{{$advancesetting->basic_color}}; border:0px;" type="submit">Send 
             <!-- <div class="spinner-grow text-warning loader" role="status" style="dislplay:none;">
              <span class="visually-hidden">Loading...</span>
            </div> -->
          </button>
          

        </div>
        </form>
      </div>
      <div class="col-md-5 col-lg-4 order-md-last py-4 px-5" style="
      background:{{$advancesetting->main_color}}; color:{{$advancesetting->basic_color}};
      border-top-left-radius:30px;
      border-bottom-right-radius:30px;
      ">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span>Contact Info</span>
          </h4>
          <hr>
          <h5><i class="fas fa-home"></i>&nbsp;&nbsp;Address</h5>
          <ul>
            @if(!empty($address))
                @foreach($address as $add)
                  @if(!empty($add))
                  <li>{{$add}}</li>
                  @endif
                @endforeach
            @endif
          </ul>
         
          <h5><i class="fas fa-envelope"></i>&nbsp;&nbsp;Email</h5>
          <ul>
            @if(!empty($email))
                @foreach($email as $mail)
                @if(!empty($mail))
                  <li>{{$mail}}</li>
                @endif
                @endforeach
            @endif
          </ul>
          <h5><i class="fas fa-phone"></i>&nbsp;&nbsp;Phone</h5>
          <ul>
            @if(!empty($phone))
                @foreach($phone as $mobile)
                @if(!empty($mobile))
                  <li>{{$mobile}}</li>
                @endif
                @endforeach
            @endif
          </ul>
          
        
        

       
      </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-12">
        <iframe src="
        @if(!empty($contacts->map))
        {{$contacts->map}}
        @else
        https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d425289.3917400059!2d72.80590669578969!3d33.61637228087196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbfd07891722f%3A0x6059515c3bdb02b6!2sIslamabad%2C%20Islamabad%20Capital%20Territory%2C%20Pakistan!5e0!3m2!1sen!2s!4v1675660910694!5m2!1sen!2s
        @endif
        " width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
</div>
@endsection
