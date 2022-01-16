<script src="{{asset('Dashboard/vendors/scripts/core.js')}}"></script>
<script src="{{asset('Dashboard/vendors/scripts/script.min.js')}}"></script>
<script src="{{asset('Dashboard/vendors/scripts/process.js')}}"></script>
<script src="{{asset('Dashboard/vendors/scripts/layout-settings.js')}}"></script>
<script src="{{asset('Dashboard/src/plugins/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('Dashboard/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('Dashboard/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('Dashboard/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('Dashboard/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('Dashboard/vendors/scripts/dashboard.js')}}"></script>
<!-- alert box -->
<script>
  // The function below will start the confirmation dialog
  function confirmAction() {
    let confirmAction = confirm("Are you sure to execute this action?");
    if (confirmAction) {
      alert("Action successfully executed");
    } 
  }
</script>
<!-- end alert box -->
