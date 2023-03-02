@extends('front.layout.main')
<!-- Editor -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
<link href="{{url('assets/front/dist/css/datatable.min.css')}}" rel="stylesheet">
<link href="{{url('assets/plugins/input-tags/css/tagsinput.css')}}" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
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
            /* text-align: center; */
            position: relative;
            margin-top: 20px
        }
        #check7_req,#comment_req,#checks,#docs
        {
            color:red;
            display:none;
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
            border: 0px solid #ccc;
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
        #msform input[type='checkbox']{
            width:auto;
        }

        #msform input:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 0px solid #673AB7;
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
            width: 20%;
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
            <div class="px-0 pt-1 pb-1 mt-1 mb-1">
                <h3 id="heading">Front Journal Development</h3>
                
                <form id="msform">@csrf
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="article"><strong>Article Type Selection</strong></li>
                        <li id="attfile"><strong>Attach File</strong></li>
                        <li id="info"><strong>Gerenral Information</strong></li>
                        <li id="review"><strong>Review Preferences</strong></li>
                        <li id="comments"><strong>Comments</strong></li>
                       
                    </ul>
                   
                    <fieldset class="text-start">
                    <div class="form-card">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="fs-title text-start"><b>Submission Language:</b></h2>
                                   
                                </div>
                            </div> 
                            <div class="text-start">
                                <!-- <label class="fieldlabels">Choose article type of your submission from the dropdown menu</label> <br> -->
                                <select name="article_type" style="width:50%; height:40px;">
                                    
                                    <option value="العربية">العربية</option>
                                    <option value="english">English</option>
                                    
                                </select><br>
                                <span>
                                    We accept submissions in multiple languages. Please select the main language of your submission from the drop-down menu above.*
                                </span>
                            </div>
                        </div>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="fs-title text-start text-bold"><b>Select Article Type:</b></h2>
                                </div>
                            </div> 
                            <div class="text-start">
                                <!-- <label class="fieldlabels">Choose article type of your submission from the dropdown menu</label> <br> -->
                                <select name="article_type" style="width:50%; height:40px;">
                                    @foreach($article_types as $at)
                                    <option value="{{$at->name}}">{{$at->name}}</option>
                                    @endforeach
                                </select><br>
                                <span>
                                It is required that articles be submitted to one of the sections of the journal.
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="row mt-0 mb-0">
                                <div class="col-12">
                                    <h2 class="fs-title text-bold"><b>Submission Requirements:</b></h2><span id="checks"><strong>Please check all checkboxes below*</strong><br></span>
                                <span>
                                Before proceeding, you are required to confirm that you have fulfilled the following requirements:<br><br>
                                <input  type="checkbox" name="check1" id="check1" required>&nbsp;The submission has not been published previously, and it is not currently under consideration by another journal (or if it is, an explanation has been provided in the comments section to the editor).<br>
                                
                                <br>
                                <input  type="checkbox" name="check2" id="check2" required>&nbsp;submission file is in one of the following formats: OpenOffice, Microsoft Word, or RTF document.<br>
                               
                                <input  type="checkbox" name="check3" id="check3" required>&nbsp;References have been provided with URLs, where available.<br>
                               
                                <input  type="checkbox" name="check4" id="check4" required>&nbsp;The text follows specific guidelines such as being single-spaced, using a 12-point font, italicizing rather than underlining (except for URLs), and placing all illustrations, figures, and tables within the text at the appropriate positions.<br>
                                
                                <br>
                                <input  type="checkbox" name="check5" id="check5" required>&nbsp;The text follows specific guidelines such as being single-spaced, using a 12-point font, italicizing rather than underlining (except for URLs), and placing all illustrations, figures, and tables within the text at the appropriate positions.<br>
                                
                                <br>
                                <input  type="checkbox" name="check6" id="check6">&nbsp;
                                The text adheres to the stylistic and bibliographic requirements set out in the Author Guidelines<br>
                                
                               </span>
                               <h2 class="fs-title text-bold"><b>Comments for the Editor:</b></h2>
                               
                               <textarea name="comments" id="comment" placeholder="Comments..."></textarea>
                               <span id="comment_req">This field is required</span>
                               <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#comment' ) )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                               </script>
                                <br>
                               <input  type="checkbox" name="check7" id="check7" required>&nbsp;
                               Consent to the collection and storage of my data in accordance with the privacy statement.<br>
                               <span id="check7_req">This field is required</span>
                                </div>
                            </div> 
                        </div>
                            <input type="button" name="next" class="next action-button" value="Proceed" />
                        
                    </fieldset>
                    <fieldset>
                    <div class="form-card">
                        <!-- <div class="predata">
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
                        </div> -->
                          
                        
                            <div class="container">
            <div class="row">
                <div class="col-7 mx-auto">
                    <h1 class="h2 mt-3 mb-3 text-center">Upload Multiple Files with Progress Bar</h1>
                    <div class="card text-center bg-light text-dark mb-4">
                        <div class="card-header">
                            <h3>Select File</h3>
                        </div>
                        <div class="card-body">
                            <input type="file" id="select_file" multiple />
                        </div><br>
                        <span id="docs">Please choose any one file to move forward</span>
                    </div>
                    <div class="progress" id="progress_bar" style="display:none; ">
                        <div class="progress-bar" id="progress_bar_process" role="progressbar" style="width:0%">0%</div>
                    </div>
                    <div id="uploaded_image" class="row mt-5"></div>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="{{url('assets/front/dist/js/jquery.min.js')}}"></script>
<script>
    $(document).ready(function(){

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);

        $(".next").click(function(){
            if(current==1){
           
                // alert(check1); return false;
                    if($('#check1').is(":not(:checked)") || $('#check2').is(":not(:checked)") || $('#check3').is(":not(:checked)") || $('#check4').is(":not(:checked)") || $('#check5').is(":not(:checked)") || $('#check6').is(":not(:checked)")){
                        $("#checks").show();
                        return false;
                    }else {
                        $("#checks").hide();
                    }
                    if($('#check7').is(":not(:checked)")){
                        $("#check7_req").show();
                        return false;
                    }else{
                        $("#check7_req").hide();
                    }
         
            }
            if(current==2){
                if($('#select_file').val()==''){
                    $("#docs").show();
                    return false;
                }else{
                    $("#docs").hide();
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
<script>
        function _(element){
            return document.getElementById(element);
        }
    _   ('select_file').onchange = function(event){

        var form_data = new FormData();

        var image_number = 1;

        var error = '';

        for(var count = 0; count < _('select_file').files.length; count++)  {
        if(!['image/jpeg', 'image/png', 'video/mp4'].includes(_('select_file').files[count].type)){
            error += '<div class="alert alert-danger"><b>'+image_number+'</b> Selected File must be .jpg or .png Only.</div>';
        } else {
            form_data.append("images[]", _('select_file').files[count]);
        }
        image_number++;
    }

    if(error != ''){
        _('uploaded_image').innerHTML = error;
        _('select_file').value = '';
    } else {
        _('progress_bar').style.display = 'block';
        var ajax_request = new XMLHttpRequest();
        ajax_request.open("POST", "upload.php");
        ajax_request.upload.addEventListener('progress', function(event){
            var percent_completed = Math.round((event.loaded / event.total) * 100);
            _('progress_bar_process').style.width = percent_completed + '%';
            _('progress_bar_process').innerHTML = percent_completed + '% completed';
        });
        ajax_request.addEventListener('load', function(event){
            _('uploaded_image').innerHTML = '<div class="alert alert-success">Files Uploaded Successfully</div>';
            _('select_file').value = '';
        });
        ajax_request.send(form_data);
    }
 };
</script> 

         


