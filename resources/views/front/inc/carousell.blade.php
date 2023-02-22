 @if(!empty($slides))
 <div id="carousel text-start" >
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            @php
            $nb=1;
            @endphp
            @foreach($slides as $slide)
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$slide->id}}"
            @if($nb==1)
            class="active"
            @endif
            aria-label="Slide {{$slide->id}}" aria-current="true"></button>
            @php $nb++;  @endphp
            @endforeach
            @php 
            $ni=1;
            @endphp
          </div>
          <div class="carousel-inner">
            @foreach($slides as $slide)
            <div class="carousel-item text-start
            @if($ni==1)
            active
            @endif
            ">
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="100%" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false">
                
              <title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect>
              
              <text x="50%" y="50%" fill="#555" dy=".3em">
                 <img src="{{url('storage/'.$slide->image)}}"> 
              </text></svg>
             
              <div class="carousel-caption text-start d-none d-md-block " style="padding-bottom:100px;">
                <h1>{{$slide->title}}</h1>
                <p>{{$slide->description}}</p>
                <p><a class="btn btn-lg btn-primary" href="{{$slide->button_url}}">{{$slide->button_title}}</a></p>
              </div>
            </div>
            @php
            $ni++;
            @endphp
            @endforeach
           
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>
</div>
@endif
