$(document).ready(function () {
$("#current_issue_volume").change(function(){
    var volume = $(this).val();
    var journal=$('#current_issue_journal').val();
    //alert(volume); return false;
    $.ajax({
      type:'post',
      url:'/front/getting-issues-of-volume',
      data:{volume:volume,journal:journal},
      success:function(resp){
        alert(resp);
        
      },error:function(){
        alert("error");
      }
    });
  });//

});