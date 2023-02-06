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
  // contacts
     //emails
  $("#add-email").on('click',function(){
      var emailCounter=$('.emailCount').length;
      // alert(emailCounter); return false;
      //alert('test'); return;
      emailCounter++;
      if (emailCounter > 3) {
        //alert('limit'); return false;
        $('#emailalert').show('noshowemail');
        return false;
      }
       newDiv=$(document.createElement('div')).attr('class','formgroupemail');
       newDiv.after().html('<br><input type="email" class="form-control" name="email[]" id="email" placeholder="Enter email">');
       newDiv.appendTo('#emailFieldGroup');
    
  });
     // addresses
  $("#addaddress").on('click',function(){
      var addressCounter=$('.addressCount').length;
      // alert(addressCounter); return false;
      // alert('test'); return;
      addressCounter++;
      if (addressCounter > 3) {
        //alert('limit'); return false;
        $('#addressalert').show('noshow');
        return false;
      }
       newDiv=$(document.createElement('div')).attr('class','formgroup');
       newDiv.after().html('<br><input type="text" class="form-control" name="address[]" id="address" placeholder="Enter address">');
       newDiv.appendTo('#addressFieldGroup');
    
  });
     // phone numbers
  $("#addphone").on('click',function(){
      var phoneCounter=$('.phoneCount').length;
      // alert(phoneCounter); return false;
      // alert('test'); return;
      phoneCounter++;
      if (phoneCounter > 3) {
        //alert('limit'); return false;
        $('#phonealert').show('noshowphone');
        return false;
      }
       newDiv=$(document.createElement('div')).attr('class','formgroupphone');
       newDiv.after().html('<br><input type="tel" class="form-control" name="phone[]" id="phone" placeholder="Enter phone">');
       newDiv.appendTo('#phoneFieldGroup');
    
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