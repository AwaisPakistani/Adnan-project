@extends('front.layout.main')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.css">
<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="signUp.css">

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.js"></script>
  <script type="text/javascript" src="signUp.js"></script>
<style>
      #user_display{
      display: block;
      width: 25%;
      height:120px;
      margin: 10px auto;
      border-radius: 100%;
    }
     #user_display:hover{
      display: block;
      width: 25%;
      height:120px;
      margin: 10px auto;
      border-radius: 100%;
      opacity: 0.7;
      background-color: grey;
     }
     #required_user_image,#required_fname,#required_lname,#required_email,#required_password,#required_cpassword,#pmatch,
     #required_hq,#required_phone,#required_pn,
     #required_position,#required_institution,#required_department,
     #required_address,#required_country,#required_state,#required_zip,#required_email_val
     {
        color:red;
        display:none;
     }
   
    `p {
        color: grey
    }

    #heading {
        text-transform: uppercase;
        color: #673AB7;
        font-weight: normal
    }

    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative
    }

    .form-card {
        text-align: left
    }

    #msform fieldset:not(:first-of-type) {
        display: none
    }

    #msform input,
    #msform textarea {
        padding: 8px 15px 8px 15px;
        border: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        background-color: #ECEFF1;
        font-size: 16px;
        letter-spacing: 1px
    }

    #msform input:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #673AB7;
        outline-width: 0
    }

    #msform .action-button {
        width: 100px;
        background-color:{{$advancesetting->button_color}};
        color:{{$advancesetting->basic_color}};
        font-weight: bold;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 0px 10px 5px;
        float: right
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        background-color:{{$advancesetting->button_color}};
        color:{{$advancesetting->basic_color}};
        opacity:0.8;
    }

    #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px 10px 0px;
        float: right
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        background-color: #000000
    }

    .card {
        z-index: 0;
        border: none;
        position: relative
    }

    .fs-title {
        font-size: 25px;
        color: #673AB7;
        margin-bottom: 15px;
        font-weight: normal;
        text-align: left
    }

    .purple-text {
        color: #673AB7;
        font-weight: normal
    }

    .steps {
        font-size: 25px;
        color: gray;
        margin-bottom: 10px;
        font-weight: normal;
        text-align: right
    }

    .fieldlabels {
        color: gray;
        text-align: left
    }

    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        /* color: lightgrey; */
        color:#673AB7;
        width:100%;
    }

    #progressbar .active {
        color: white;
        background:green;
        margin:1px;
    }

    #progressbar li {
        list-style-type: none;
        font-size: 15px;
        width: 23%;
        float: left;
        position: relative;
        font-weight: 400;
        padding:8px 4px;
    }

    #progressbar #account:before {
        font-family: FontAwesome;
        
    }


    #progressbar #personal:before {
        font-family: FontAwesome;
        
    }

    #progressbar #payment:before {
        font-family: FontAwesome;
        
    }

    #progressbar #confirm:before {
        font-family: FontAwesome;
        
    }

    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 1px;
        padding-top:10px;
        padding-bottom:1opx;
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 5px;
        /* background: lightgray; */
        /* backround:#673AB7; */
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        color: #673AB7;
        /* background: {{$advancesetting->main_color}}; */
    }

    .progress {
        height: 20px;
        
    }

    .progress-bar {
        color:black;
        background-color: {{$advancesetting->main_color}};
    }
    
    element.style {
    width: 35%;
    }
    .progress-bar-animated {
    -webkit-animation: 1s linear infinite progress-bar-stripes;
    animation: 1s linear infinite progress-bar-stripes;
    }
   .progress-bar-striped {
    background-image: linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
    background-size: 1rem 1rem;
    }

    .fit-image {
        width: 100%;
        object-fit: cover
    }`
   

</style>
@section('content')
@include('front.inc.journal_hero')
<div class="container-fluid">
    @include('front.inc.alerts')
    <div class="row justify-content-center">
        <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">Sign Up Your User Account</h2>
                <p>Fill all form field to go to next step</p>
                <form method="post" action="{{route('front_register',$journal->id)}}" enctype="multipart/form-data" id="msform">@csrf
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Intro</strong></li>
                        <li id="personal"><strong>Personal</strong></li>
                        <li id="payment"><strong>Information</strong></li>
                        <li id="confirm"><strong>Interests</strong></li>
                    </ul>
                    <!-- <div class="progress" >
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> -->
                     <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Tell us about yourself:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 1 - 4</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                <img
                            src="{{url('assets/images/avatars/1avatar.jpg')}}" 
                             id="user_display" onclick="triggerclick()" width="50px" height="50px" alt="User Image"> <br/>
                            <input type="file" class="form-control" name="user_image" onchange="displayImage(this)" id="user_image" style="display: none;" required ><span  id="required_user_image">Please Select Image</span>
                                
                                </div>
                            </div><br><br>
                            <div class="row">
                            <div class="col-4">
                                <label class="fieldlabels">Title: </label><br>
                                <select style="background-color:#ECEFF1;width:100%;height:50%;" id="title" name="title_name" required>
                                    <option value="Dr.">Dr.</option>
                                    <option value="Professor">Professor</option>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Miss.">Miss.</option>
                                    <option value="Ms.">Ms.</option>
                                    <option value="Mrs.">Mrs.</option>
                                </select>
                                <span id="required_fname">
                                  Please enter your first name.
                                </span>
                                   
                            </div>
                            <div class="col-4">
                                <label class="fieldlabels">First Name: </label> <input
                                id="fname" type="text" name="first_name" placeholder="First Name" required /><span id="required_fname">
                                  Please enter your first name.
                                </span>
                                   
                            </div>
                                <div class="col-4">
                                <label class="fieldlabels">Last Name: </label> <input type="text" name="last_name" placeholder="Last Name" id="lname" required /><span id="required_lname">
                                  Please enter your last name.
                                </span>
                                </div>
                            </div>
                            <div class="row">
                               <div class="col-12">
                               <label class="fieldlabels">Email: *</label> <input type="email" name="email" id="email" placeholder="Email Id" required /><span id="required_email">
                                  Please enter your email address.
                               </span><span id="required_email_val">
                                  Please enter valid email address.
                               </span>
                               </div>
                            </div>
                         
                            <div class="row">
                                
                                <div class="col-6">
                                <label class="fieldlabels">Password: *</label> <input type="password"  id="password" name="pwd" placeholder="Password" required /><span id="required_password">
                                  Please enter your password.
                               </span>
                                </div>
                                <div class="col-6">
                                <label class="fieldlabels">Confirm Password: *</label> <input type="password" name="cpwd" id="cpassword" placeholder="Confirm Password" required /><span id="required_cpassword">
                                  Please enter to confirm password.
                               </span><span id="pmatch">
                               Passwords are not matching. Please fill same passwords
                               </span>
                                </div>
                            </div>
                           
                        </div> <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Tell us more about yourself:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 2 - 4</h2>
                                </div>
                            </div> <label class="fieldlabels">Highest Qualification: *</label> <input type="text" name="highest_qualification" 
                            id="highest_qualification" 
                            placeholder="Highest Qualification" /><span id="required_hq">Please enter highest education</span> <label class="fieldlabels">Primary Phone.: *</label> <input type="number" name="phone" id="phone" placeholder="Contact No." required /><span id="required_phone">Please enter your phone</span>
                            <label class="fieldlabels">Prefered Name.: *</label> <input type="text" name="prefered_name" 
                            id="prefered_name"
                            placeholder="Prefered Name." required /><span id="required_pn">Please enter your prefered name</span>
                        </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" requireds />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Your current job related information:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 3 - 4</h2>
                                </div>
                            </div> 
                            <div class="row">
                                
                                <div class="col-4">
                                <label class="fieldlabels">Position: </label> <input type="text" name="position" 
                                id="position"
                                placeholder="Position" required /><span id="required_position">Please enter your position</span>
                                </div>
                                <div class="col-4">
                                <label class="fieldlabels">Institution: </label> <input type="text" name="institution" 
                                id="institution"
                                placeholder="Institution" required /><span id="required_institution">Please enter institution name</span>
                                </div>
                                <div class="col-4">
                                <label class="fieldlabels">Department: </label> <input type="text" name="department" 
                                id="department"
                                placeholder="Department" required /><span id="required_department">Please enter department</span>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-12">
                              <label class="fieldlabels">Complete Address: </label> <input type="text" name="address" 
                              id="address"
                              placeholder="Address" required />
                              <span id="required_address">Please enter your address</span>
                              </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-4">
                                <label class="fieldlabels">Country: </label> <input type="text" name="country" 
                                id="country"
                                placeholder="Country" required />
                                <span id="required_country">Please enter country name</span>
                                </div>
                                <div class="col-4">
                                <label class="fieldlabels">State/Province: </label> <input type="text" name="state_province"
                                id="state"
                                placeholder="State or Province" required /><span id="required_state">Please enter state or province name</span>
                                </div>
                                <div class="col-4">
                                <label class="fieldlabels">Zip/Postal Code: </label> <input type="text" name="zip" 
                                id="zip"
                                placeholder="Zip or Postal Code" required /><span id="required_zip">Please enter zip code</span>
                                </div>
                            </div>
                        </div> <input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Registered As:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 4 - 4</h2>
                                </div>
                            </div> <br><br>
                            <!-- <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br> -->
                            
                            <div class="row">
                                <div class="col-12">
                                <label class="fieldlabels">If you also want to apply for the reviewer. So please check this box: </label><br> <input type="checkbox" name="reviewerr" style="width:25px; height:25px;" /> 
                                
                               
                                </div> <input type="submit" class="action-button" value="Submit" />
                             
                                </div>
                            </div>
                             <br><br>
                           
                        </div>
                        

                        
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.MultiStep Form -->
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javascript">
    function triggerclick(){
      document.querySelector('#user_image').click();
    }
    function displayImage(e){
      if (e.files[0]) {
        var reader=new FileReader();
        reader.onload=function(e){
          document.querySelector('#user_display').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
      }
    }
  </script>
<script>
    
    $(document).ready(function(){

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);


    $(".next").click(function(){
        if(current==1){
            var user_image=$('#user_image').val();
            var fname=$('#fname').val();
            var lname=$('#lname').val();
            var email=$('#email').val();
            var password=$('#password').val();
            var cpassword=$('#cpassword').val();
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            
            if(user_image==''){
                $("#required_user_image").show();
                return false;
            }else{
                $("#required_user_image").hide();
            }
            if(fname==''){
                $("#required_fname").show();
                return false;
            }else{
                $("#required_fname").hide();
            }
            if(lname==''){
                $("#required_lname").show();
                return false;
            }else{
                $("#required_lname").hide();
            }
            if(email==''){
                $("#required_email").show();
                $("#required_email_val").hide();
                return false;
            }else{
                $("#required_email").hide(); 
            }
            if(!regex.test(email)){    
            $("#required_email_val").show();    
            return false;    
            }else{
                $("#required_email_val").hide();
            }
          

            if(password==''){
                $("#required_password").show();
                return false;
            }else{
                $("#required_password").hide();
            }
            if(cpassword==''){
                $("#required_cpassword").show();
                return false;
            }else{
                $("#required_cpassword").hide();
            }
            if(password!=cpassword){
                $("#pmatch").show();
                
                return false;
            }else{
                $("#pmatch").hide();
            }
        }
        if(current==2){
            var hq=$('#highest_qualification').val();
            var phone=$('#phone').val();
            var prefered_name=$('#prefered_name').val();
            if(hq==''){
                $("#required_hq").show();
                return false;
            }else{
                $("#required_hq").hide();
            }
            if(phone==''){
                $("#required_phone").show();
                return false;
            }else{
                $("#required_phone").hide();
            }
            if(prefered_name==''){
                $("#required_pn").show();
                return false;
            }else{
                $("#required_pn").hide();
            }
        }
        if(current==3){
            var position=$('#position').val();
            var institution=$('#institution').val();
            var department=$('#department').val();
            var address=$('#address').val();
            var country=$('#country').val();
            var state=$('#state').val();
            var zip=$('#zip').val();
            if(position==''){
                $('#required_position').show();
                return false;
            }else{
                $('#required_position').hide();
            }
            if(institution==''){
                $('#required_institution').show();
                return false;
            }else{
                $('#required_institution').hide();
            }
            if(department==''){
                $('#required_department').show();
                return false;
            }else{
                $('#required_department').hide();
            }
            if(address==''){
                $('#required_address').show();
                return false;
            }else{
                $('#required_address').hide();
            }
            if(country==''){
                $('#required_country').show();
                return false;
            }else{
                $('#required_country').hide();
            }
            if(state==''){
                $('#required_state').show();
                return false;
            }else{
                $('#required_state').hide();
            }
            if(zip==''){
                $('#required_zip').show();
                return false;
            }else{
                $('#required_zip').hide();
            }
        }
        
        
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
    
        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
        step: function(now) {
        // for making fielset appear animation
        opacity = 1 - now;
    
        current_fs.css({
        'display': 'none',
        'position': 'relative'
        });
        next_fs.css({'opacity': opacity});
        },
        duration: 500
        });
        setProgressBar(++current);
        
    });


    $(".previous").click(function(){

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
        step: function(now) {
        // for making fielset appear animation
        opacity = 1 - now;

        current_fs.css({
        'display': 'none',
        'position': 'relative'
        });
        previous_fs.css({'opacity': opacity});
        },
        duration: 500
    });
    setProgressBar(--current);
    });

    function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
    .css("width",percent+"%")
    }

    $(".submit").click(function(){
    return false;
    })

 });
</script>