<!-- Mainly scripts -->
    <script src="{{asset('assets/template/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('assets/template/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/template/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/template/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('assets/template/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Data Table -->
    <script src="{{asset('assets/template/js/plugins/dataTables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/template/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Flot -->
    <script src="{{asset('assets/template/js/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/template/js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('assets/template/js/plugins/flot/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('assets/template/js/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('assets/template/js/plugins/flot/jquery.flot.pie.js')}}"></script>

<!-- Peity -->
    <script src="{{asset('assets/template/js/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('assets/template/js/demo/peity-demo.js')}}"></script>

<!-- Custom and plugin javascript -->
    <script src="{{asset('assets/template/js/style.js')}}"></script>
    {{-- <script src="{{asset('assets/template/js/inspinia.js')}}"></script> --}}
    <script src="{{asset('assets/template/js/plugins/pace/pace.min.js')}}"></script>

<!-- jQuery UI -->
    {{-- <script src="{{asset('assets/template/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script> --}}

<!-- GITTER -->
    <script src="{{asset('assets/template/js/plugins/gritter/jquery.gritter.min.js')}}"></script>

<!-- Sparkline -->
    <script src="{{asset('assets/template/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Sparkline demo data  -->
    <script src="{{asset('assets/template/js/demo/sparkline-demo.js')}}"></script>

<!-- ChartJS-->
    <script src="{{asset('assets/template/js/plugins/chartJs/Chart.min.js')}}"></script>

<!-- Toastr -->
    <script src="{{asset('assets/template/js/plugins/toastr/toastr.min.js')}}"></script>

<!-- Font Awesome Latest Version -->
    {{-- <script src="{{asset('assets/template/js/plugins/fontawesome/all.min.js')}}"></script> --}}

<!-- Script -->
    <script>
      $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
      });

      $('.dropdown-submenu a.submenu').on("click", function(e){
        e.stopPropagation();
        e.preventDefault();

        if($(this).closest('.dropdown-submenu').hasClass('open')){
            $(this).closest('.dropdown-submenu').removeClass('open');
            $('.dropdown-submenu').find('.dropdown-menu').removeClass('show');
        }else{
            $('.dropdown-submenu').removeClass('open');
            $(this).closest('.dropdown-submenu').addClass('open');
            $('.dropdown-submenu').find('.dropdown-menu').addClass('show');
        }
      });
    </script>