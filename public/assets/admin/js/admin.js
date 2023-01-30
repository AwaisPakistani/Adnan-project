$(document).ready(function(){
    $(".perms").click(function(){
        alert('hi'); return false;
         var status=$(this).children('i').attr('status');
         //alert(status); return false;
         var category_id=$(this).attr('category_id');
         //alert(category_id); return false;
         $.ajax({
           type:'post',
           url:'/admin/update-category-status',
           data:{status:status,category_id:category_id},
           success:function(resp){
             //alert(resp); return false;
             if (resp['status']=='off') {
               $('#category-'+category_id).html('<i style="font-size: 30px;" class="fas fa-toggle-off" aria-hidden="true" status="Inactive"></i>');
             }else if(resp['status']=='on'){
               $('#category-'+category_id).html('<i style="font-size: 30px;" class="fas fa-toggle-on" aria-hidden="true" status="Active"></i>');
             }
           },error:function(){
             alert("Error");
           }
         });
       });
    $("#current_password").keyup(function(){
      var curr_pwd = $("#current_password").val();
      //alert(curr_pwd); return false;
      $.ajax({
        type:'post',
        url:'/admin/check-current-password',
        data:{curr_pwd:curr_pwd},
        success:function(resp){
          //alert(resp);
          if (resp=='false') {
            $("#chkCurrPass").html('<strong style="color:red;">Current Password is incorrect </strong>');
          }else{
            $("#chkCurrPass").html('<strong style="color:green;">Password Matched</strong>');
          }
        },error:function(){
          alert("error");
        }
      });
    });//
  
      // For CAtegories status
  
  
  
  
  
  
  
    
  
  
  
  });