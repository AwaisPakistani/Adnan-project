<style>
  #show_first_name{
    color:red;
    display:none;
  }
</style>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Click to Add Contributor(#<span id="show_author"></span>)
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl text-start">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Contributor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="add_contForm">
      <div class="form-group">
        <div class="row">
             <div class="col-6">
                <label><b>First Name </b></label>
                <input type="text" name="first_name" id="first_name" required><br>
                <span id="show_first_name"">Please fill this field*</span>
             </div>
             <div class="col-6">
    
              <label><b>Last Name </b></label>
               <input type="text" name="last_name" id="last_name" required><br>
             </div>
        </div>
     
      </div>
      <div class="form-group">
        <div class="row">
             <div class="col-6">
                <label><b>Email </b></label>
                <input type="text" name="email" id="email" required><br>
             </div>
             <div class="col-6">
    
              <label><b>Degree </b></label>
               <input type="text" name="degree" id="degree" required><br>
             </div>
        </div>
     
      </div>
      <div class="form-group">
        <div class="row">
             <div class="col-6">
                <label><b>Position </b></label>
                <input type="text" name="position" id="position" required><br>
             </div>
             <div class="col-6">
    
              <label><b>Institution </b></label>
               <input type="text" name="institution" id="institution" required><br>
             </div>
        </div>
     
      </div>
      <div class="form-group">
        <div class="row">
             <div class="col-6">
                <label><b>Department </b></label>
                <input type="text" name="department" id="department"required><br>
             </div>
             <div class="col-6">
    
                <label><b>Country </b></label>
                <input type="text" name="country" id="country" required><br>
             </div>
        </div>
       </form>
      </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button"  class="btn btn-primary">Save changes</button>
        <input type="submit" class="btn btn-success" value="submit">
        <!-- <a href="javascript:void(0)" id="add_cont" style="background:blue; color:white; padding:8px;">Save Changes</a> -->
      </div>
    </div>
  </div>
</div>
<!-- <script src="{{url('assets/front/dist/js/jquery.min.js')}}"></script> -->
