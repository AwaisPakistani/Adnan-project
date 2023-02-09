<svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="100%" height="250" role="img" aria-label="Placeholder: Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false" ><title>Title Page</title><rect width="100%" height="100%"  style="background-image(url('storage/'.$slides[1]->image)); opacity:0.8;">
    
</rect>
<text x="50%" y="50%" fill="#dee2e6" dy=".3em" style="font-size:.7em; ">
    
@php 
$route=Route::current()->getName();
$explode=explode('.',$route);
$exp1=$explode[1];
$exp2=explode('_',$exp1);
echo ucfirst($exp2[0]);
echo ' ';
echo ucfirst($exp2[1]);
@endphp
</text>

</svg>



