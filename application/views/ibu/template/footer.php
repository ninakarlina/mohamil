   </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <strong>2019 - <a href="www.ti.polindra.ac.id">Teknik Informatika-Politeknik Negeri Indramayu</a>.</strong>
      </footer>
    </div><!-- ./wrapper -->

    
   <!-- chosen select -->
    <script src="<?php echo base_url(); ?>assetss/plugins/chosen/js/chosen.jquery.min.js"></script>
    <!-- DATA TABES SCRIPT
    <script src="assetss/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="assetss/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    Datepicker -->
    <script src="<?php echo base_url(); ?>assetss/plugins/datepicker/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url(); ?>assetss/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url(); ?>assetss/plugins/fastclick/fastclick.min.js'></script>
    <!-- maskMoney -->
    <script src="<?php echo base_url(); ?>assetss/js/jquery.maskMoney.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assetss/js/app.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assetss/rupiah.js" type="text/javascript"></script>
    <!-- page script -->
	<script src="<?php echo base_url(); ?>assetss/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assetss/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
	<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assetss/datatables/buttons-1.5.6/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assetss/datatables/buttons-1.5.6/js/buttons.flash.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assetss/datatables/jszip-2.5.0/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assetss/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assetss/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assetss/datatables/buttons-1.5.6/js/buttons.html5.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assetss/datatables/buttons-1.5.6/js/buttons.print.min.js"></script>
    <script type="text/javascript">
      $(function () {
        // datepicker plugin
        $('.date-picker').datepicker({
          autoclose: true,
          todayHighlight: true
        });

        // chosen select
        $('.chosen-select').chosen({allow_single_deselect:true}); 
        //resize the chosen on window resize
        
        // mask money
        $('#harga_beli').maskMoney({thousands:'.', decimal:',', precision:0});
        $('#harga_jual').maskMoney({thousands:'.', decimal:',', precision:0});

        $(window)
        .off('resize.chosen')
        .on('resize.chosen', function() {
          $('.chosen-select').each(function() {
             var $this = $(this);
             $this.next().css({'width': $this.parent().width()});
          })
        }).trigger('resize.chosen');
        //resize chosen on sidebar collapse/expand
        $(document).on('settings.ace.chosen', function(e, event_name, event_val) {
          if(event_name != 'sidebar_collapsed') return;
          $('.chosen-select').each(function() {
             var $this = $(this);
             $this.next().css({'width': $this.parent().width()});
          })
        });
    
    
        $('#chosen-multiple-style .btn').on('click', function(e){
          var target = $(this).find('input[type=radio]');
          var which = parseInt(target.val());
          if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
           else $('#form-field-select-4').removeClass('tag-input-style');
        });

        // DataTables
        $("#dataTables1").dataTable({
			dom :'Bfrtip',
			buttons:['csv','excel','pdf','print']
		});
		$("#dataTables3").dataTable({
			
		});
		$("#example1").dataTable({
			
		});
        $('#dataTables2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false,
		  dom :'Bfrtip',
		 buttons:['csv','excel','pdf','print']
        });
      });
    </script>

  </body>
</html>