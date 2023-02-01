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
  <!-- Sweet Alert 2 -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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


</body>

</html>