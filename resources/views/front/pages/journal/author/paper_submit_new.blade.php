@extends('front.layout.main')

<link href="{{url('assets/front/dist/css/datatable.min.css')}}" rel="stylesheet">
<link href="{{url('assets/plugins/input-tags/css/tagsinput.css')}}" rel="stylesheet" />
<link href="{{url('assets/front/dist/css/cdn.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
<link href="https://www.transparenttextures.com/patterns/lyonnette.png" rel="stylesheet">

<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
<style>
    
        .author-links a{
            text-decoration:none;
        }
        .author-links a:hover{
            color:#ff8000;
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
            background: green;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 0px 10px 5px;
            float: right
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            background-color: #311B92
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
            color: lightgrey;
            width:100%;
        }

        #progressbar .active {
            color: green;
        }

        #progressbar li {
            list-style-type: none;
            font-size: 15px;
            width: 16%;
            float: left;
            position: relative;
            font-weight: 400
        }

        #progressbar #article:before {
            font-family: FontAwesome;
            content: "\F378"
        }
        
        #progressbar #attfile:before {
            font-family: FontAwesome;
            content: "\F24A"
        }
        #progressbar #info:before {
            font-family: FontAwesome;
            content: "\f129"
        }
        #progressbar #review:before {
            font-family: FontAwesome;
            content: "\f085"
        }

        #progressbar #comments:before {
            font-family: FontAwesome;
            content: "\f27a"
        }    
        #progressbar #manuscript:before {
            font-family: FontAwesome;
            content: "\274F"
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
            padding: 2px
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: green;
        }

        
        /* Drag and drop */
        /* url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap'); */

/* .form-container {
	width: 100vw;
	height: 100vh;
	background-color: #7b2cbf;
	display: flex;
   	justify-content: center;
	align-items: center;
} */

/* === Wrapper Styles === */
url("https://www.transparenttextures.com/patterns/lyonnette.png");
#FileUpload {
  display: flex;
  justify-content: center;
}
.wrapper {
  margin: 30px;
  padding: 10px;
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
  border-radius: 10px;
  background-color: white;
  width: 415px;
}

/* === Upload Box === */
.upload {
  margin: 10px;
  height: 85px;
  border: 8px dashed #e6f5e9;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 5px;
}
.upload p {
  margin-top: 12px;
  line-height: 0;
  font-size: 22px;
  color: #0c3214;
  letter-spacing: 1.5px;
}
.upload__button {
  background-color: #e6f5e9;
  border-radius: 10px;
  padding: 0px 8px 0px 10px;
}
.upload__button:hover {
  cursor: pointer;
  opacity: 0.8;
}

/* === Uploaded Files === */
.uploaded {
  width: 375px;
  margin: 10px;
  background-color: #e6f5e9;
  border-radius: 10px;
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  align-items: center;
}
.file {
  display: flex;
  flex-direction: column;
}
.file__name {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: baseline;
  width: 300px;
  line-height: 0;
  color: #0c3214;
  font-size: 18px;
  letter-spacing: 1.5px;
}
.fa-times:hover {
  cursor: pointer;
  opacity: 0.8;
}
.fa-file-pdf {
  padding: 15px;
  font-size: 40px;
  color: #0c3214;
}
</style>


@section('content')
@include('front.inc.journal_content_hero')
<div class="container mb-3 mt-3">
    <div class="row">
       <div class="col-lg-12 text-center">
       @include('front.inc.author.buttons')
       </div>
      </div>
    <div class="row">
    
        <div class="col-lg-12 mt-2 text-end py-2 text-start" style="text-decoration:none;">
        @include('front.inc.alerts')
        <div class="author-links text-start px-5 py-2">
           
        <!-- Author Paper Submission -->

        <!-- Multi step form --> 
        <div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h3 id="heading">Front Journal Development</h3>
                
                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="article"><strong>Article Type Selection</strong></li>
                        <li id="attfile"><strong>Attach File</strong></li>
                        <li id="info"><strong>Gerenral Information</strong></li>
                        <li id="review"><strong>Review Preferences</strong></li>
                        <li id="comments"><strong>Comments</strong></li>
                        <li id="manuscript"><strong>Manuscript Data</strong></li>
                    </ul>
                   
                    <fieldset class="text-center">
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="fs-title text-center">Select Article Type:</h2><hr>
                                </div>
                            </div> 
                            <div class="text-center">
                                <label class="fieldlabels">Choose article type of your submission from the dropdown menu</label> <br>
                                <select name="article_type" style="width:50%; height:40px;">
                                    @foreach($article_types as $at)
                                    <option value="{{$at->name}}">{{$at->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        

                            <input type="button" name="next" class="next action-button" value="Proceed" />
                        
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                             <p>
                                Please provide a single file for containing your manuscript now. Data included in your manuscript may be used to populate information for you later in the submission process.
                            </p>
                            <p>
                                We encourage you to submit all the relavant source files  to not cause unnecessary delays in the review and and production process in case of issues,please use the Contact Us link.
                            </p>
                            <p>
                                Read further for tips with LaTex submissions.
                            </p>
                            <ul>
                                <li>
                                    Don't use subfolders.
                                </li>
                                <li>
                                    Upload and declare the main TeX file as type Manuscript
                                </li>
                                <li>
                                    The main manuscript Tex file must be the first item.
                                </li>
                                <li>
                                    If applicable, upload TEx supporting files as supplementary material
                                </li>
                                <li>
                                    Upload any style files that are not part of the Tex Live distribution
                                </li>
                                <li>
                                    Upload a PDF reference of your Tex file as supplementary material.
                                </li>
                                <li>
                                    Convert special characters into appropriate TeX code.
                                </li>
                                <li>
                                    Any errors will be shown in the later generated PDF.
                                </li>
                            </ul>
                          
                        
<div id="FileUpload">
  <div class="wrapper">
    <div class="upload">
      <p>Drag files here or <span class="upload__button">Browse</span></p>
    </div>
    <div class="uploaded uploaded--one">
      <i class="far fa-file-pdf"></i>
      <div class="file">
        <div class="file__name">
          <p>lorem_ipsum.pdf</p>
          <i class="fas fa-times"></i>
        </div>
        <div class="progress">
          <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:100%"></div>
        </div>
      </div>
    </div>
    <div class="uploaded uploaded--two">
      <i class="far fa-file-pdf"></i>
      <div class="file">
        <div class="file__name">
          <p>dolor_sit.pdf</p>
          <i class="fas fa-times"></i>
        </div>
        <div class="progress">
          <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:80%"></div>
        </div>
      </div>
    </div>
    <div class="uploaded uploaded--three">
      <i class="far fa-file-pdf"></i>
      <div class="file">
        <div class="file__name">
          <p>amet_consectetur.pdf</p>
          <i class="fas fa-times"></i>
        </div>
        <div class="progress">
          <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:60%"></div>
        </div>
      </div>
    </div>
  </div>
</div>

                           
                                
                                
                        </div> <input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                          
                            <h2 class="fs-title text-center"><strong>Enter Keywords</strong></h2> <br>
                            <div class="form-group">
                                <input type="text"name="keywords" data-role="tagsinput"placeholder="Enter Meta Keywords" required><br>
                                 <span style="color:green;">Note: Enter Comma(,) to save and switch to enter for more keyword</span>
                            </div>
                            
                           <br><br>
                           
                        </div>
                        <input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Finish:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 6 - 6</h2>
                                </div>
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                </div>
                            </div>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                   
                    
                    @include('front.inc.paper.comments')
                    
                   
                        <input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                             <br><br>
                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                </div>
                            </div>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Multi step form -->   
        <!-- End Author Papaer Submission -->
            
        </div>
        
        
         
        </div>
    </div>
</div>

@endsection
<script src="{{url('assets/front/dist/js/jquery.min.js')}}"></script>
<script>
    $(document).ready(function(){

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);

        $(".next").click(function(){

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
        $(".progress-bbar")
        .css("width",percent+"%")
        }

        $(".submit").click(function(){
        return false;
        })

    });
</script>
<script>
  
</script>
<script src="{{url('assets/plugins/input-tags/js/tagsinput.js')}}"></script>

         


