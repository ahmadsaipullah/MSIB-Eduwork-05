{{-- javascripct --}}

<script src="{{ asset('template/assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('template/assets/js/app.js') }}"></script>

<!-- Need: Apexcharts -->
<script src="{{ asset('template/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('template/assets/js/pages/dashboard.js') }}"></script>


<!-- css datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!-- datatable jquery -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTables').DataTable();
    });
</script>
