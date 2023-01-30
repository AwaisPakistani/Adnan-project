$(document).ready(function(){
    $(".rolesperms").on("change", function() {
		var role_id=$(this).attr('role_id');
        var permission_name=$(this).attr('permission_name');
        var status=$(this).attr('status');
    
        $.ajax({
          type:'post',
          url:'/admin/update-roles-permission',
          data:{role_id:role_id,permission_name:permission_name,status:status},
          success:function(resp){
            //document.location.reload();

            return false;
          },error:function(){
            alert("Error");
          }
        });
	});

  $(".confirmalert").on("click", function() {
    // if(confirm('Are you sure you want to delete it?')){
    //   return true;
    // }else{
    //   return false;
    // }
    //alert('hi');

    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
    })
    
    swalWithBootstrapButtons.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, cancel!',
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
        swalWithBootstrapButtons.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          'Cancelled',
          'Your imaginary file is safe :)',
          'error'
        )
      }
    })
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