   <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="#" target="_blank">Ecommerce Dashboard</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->

  <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/ruang-admin.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/chart.js/Chart.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/demo/chart-area-demo.js')); ?>"></script>  
  <script src="<?php echo e(asset('js/timepicker/mdtimepicker.min.js')); ?>"></script>
    <!-- datatable fucking links -->
  

    <script src="<?php echo e(asset('vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/datatables/cdn.datatables.net/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/datatables/cdn.datatables.net/buttons.flash.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/datatables/cdnjs.cloudflare.com/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/datatables/cdn.rawgit.com/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('js/datatables/cdn.datatables.net/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/datatables/cdn.datatables.net/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/datatables/datatables-init.js')); ?>"></script>
    <script src="<?php echo e(asset('js/sweetalert.min.js')); ?>"></script>
    <?php echo notifyJs(); ?>
    <script src="<?php echo e(asset('js/functions.js')); ?>"></script>
    

<script type="text/javascript">
$(document).ready(function(){
  
     $('#data_table').DataTable({
        dom: 'Blrftip',
        buttons: [
            'copy','excel','print'
        ]

  });
  
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

  $('.timepicker').mdtimepicker();
  //Initializes the time picker


});


</script>

  <script type="text/javascript">
       <?php if(session('err')): ?>
          swal('<?php echo e(session("err")); ?>','','error');
       <?php endif; ?>
       <?php if(session('succ')): ?>
          swal('<?php echo e(session("succ")); ?>','','success');
       <?php endif; ?>
  </script>
    <!-- End fucking links -->
</body>

</html><?php /**PATH C:\Users\hsuma\PhpstormProjects\PHP-ecommerce-shop-laravel2\resources\views/admin/admin_footer.blade.php ENDPATH**/ ?>