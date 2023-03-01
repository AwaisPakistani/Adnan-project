<!-- Bootstrap bundle JS -->


  <!--plugins-->
  

  
  <script src="{{url('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
  <script src="{{url('assets/js/table-datatable.js')}}"></script>
	
  <!--app-->
 
<!-- Datatable -->

<script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
  <!--plugins-->
  <script src="{{url('assets/js/jquery.min.js')}}"></script>
  <script src="{{url('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{url('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
  <script src="{{url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  <script src="{{url('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
  <script src="{{url('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <script src="{{url('assets/js/pace.min.js')}}"></script>
  <script src="{{url('assets/plugins/chartjs/js/Chart.min.js')}}"></script>
  <script src="{{url('assets/plugins/chartjs/js/Chart.extension.js')}}"></script>
  <script src="{{url('assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
  <!--app-->
  <script src="{{url('assets/js/app.js')}}"></script>
  <script src="{{url('assets/js/index2.js')}}"></script>
  <script>
    new PerfectScrollbar(".best-product")
 </script>

<!-- datatable -->
  <script src="{{url('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
  <script src="{{url('assets/js/table-datatable.js')}}"></script>
	
  <!--app-->
  <script src="{{url('assets/js/app.js')}}"></script>
<!---end datatable-->

<script src="{{url('assets/plugins/select2/js/select2.min.js')}}"></script>
  <script src="{{url('assets/js/form-select2.js')}}"></script>
  <script src="{{url('assets/js/admin.js')}}"></script>
  <!-- Social Media -->
  <script src="{{url('assets/js/todo.js')}}"></script>
  <script src="{{url('assets/plugins/input-tags/js/tagsinput.js')}}"></script>
  <!-- Sweet Alert 2 -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Summernote -->
<script src="{{url('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
  


 <!-- Icon Display -->
<script type="text/javascript">
    function triggerclick(){
      document.querySelector('#siteiconimage').click();
    }
    function displayImage(e){
      if (e.files[0]) {
        var reader=new FileReader();
        reader.onload=function(e){
          document.querySelector('#icon_display').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
      }
    }
  </script>

  <!-- Logo Display -->
<script type="text/javascript">
    function triggerclick(){
      document.querySelector('#logo_image').click();
    }
    function displayImage(e){
      if (e.files[0]) {
        var reader=new FileReader();
        reader.onload=function(e){
          document.querySelector('#logo_display').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
      }
    }
  </script>
<script>
  $(document).ready(function(){
    $('.journal_moreinfo').on('change',function(){
       var journal_moreinfo=$('.journal_moreinfo').val();
       //alert(journal_moreinfo); return false;
       var extension = journal_moreinfo.replace(/^.*\./, '');
       if(extension=='pdf' || extension=='PDF'){
        $("#journal_moreinfo").html('<strong style="color:green;">File selected</strong>');
       }else{
        $("#journal_moreinfo").html('<strong style="color:red;">Just PDF will be accepted for this field</strong>');
         return false;
       }
    });
    $('.author_guide').on('change',function(){
       var author_guide=$('.author_guide').val();
       //alert(author_guide); return false;
       var extension = author_guide.replace(/^.*\./, '');
       if(extension=='pdf' || extension=='PDF'){
        $("#author_note").html('<strong style="color:green;">File selected</strong>');
       }else{
        $("#author_note").html('<strong style="color:red;">Just PDF will be accepted for this field</strong>');
         return false;
       }
    });
  });
</script>


</body>

</html>