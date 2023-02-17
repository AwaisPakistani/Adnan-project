$(document).ready(function () {
$("#current_issue_volume").change(function(){
    var volume = $(this).val();
    var journal=$('#current_issue_journal').val();
    //alert(volume); return false;
    $.ajax({
      type    : 'POST', 
      url     : '/front/getting-issues-of-volume',
      data    : {volume:volume,journal:journal}, 
      success:function(resp){
           console.log(resp['data']);
         // alert(resp['data']);
          // console.log(resp['data']['id']);
           $('#issueajax').html(resp['data']);
        
        
        
      },error:function(){
        alert("error");
      }
    });
  });//

});